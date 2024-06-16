<?php
// app/Services/GoogleSheetService.php
namespace App\Services;

use Google\Service\Sheets;
use Google\Service\Drive;

class GoogleSheetService
{
    protected $sheetsService;
    protected $driveService;

    public function __construct(\Google\Client $client)
    {
        $this->sheetsService = new Sheets($client);
        $this->driveService = new Drive($client);
    }

    public function appendDataToSheet($spreadsheetId, $range, $values)
    {
        $body = new Sheets\ValueRange([
            'values' => $values
        ]);
        $params = [
            'valueInputOption' => 'RAW'
        ];
        $result = $this->sheetsService->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
        return $result;
    }

    public function uploadFileToDrive($filePath)
    {
        $file = new Drive\DriveFile();
        $file->setName(basename($filePath));

        $data = file_get_contents($filePath);
        // dd($this->driveService->files->create);
        $createdFile = $this->driveService->files->create($file, [
            'data' => $data,
            'mimeType' => mime_content_type($filePath),
            'uploadType' => 'multipart'
        ]);

        return $createdFile->id;
    }

    public function getFileLink($fileId)
    {
        $file = $this->driveService->files->get($fileId, ['fields' => 'webViewLink']);
        return $file->webViewLink;
    }
}
