<?php


// app/Services/GoogleClientService.php
namespace App\Services;

use Google\Client;
use Illuminate\Support\Facades\Storage;

class GoogleClientService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName('Laravel Google Sheets Integration');
        $this->client->setScopes([
            \Google\Service\Sheets::SPREADSHEETS,
            \Google\Service\Drive::DRIVE_FILE,
            \Google\Service\Drive::DRIVE
        ]);
        $this->client->setAuthConfig(base_path(env('GOOGLE_APPLICATION_CREDENTIALS')));
        $this->client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $this->client->setAccessType('online');
        $this->client->setPrompt('select_account consent');

        $tokenPath = public_path('storage/assets/service-key-bold-impulse-425908-g2-66212e3efa89.json');
        if (Storage::exists($tokenPath)) {
            $accessToken = json_decode(Storage::get($tokenPath), true);
            $this->client->setAccessToken($accessToken);
        }

        if ($this->client->isAccessTokenExpired()) {
            if ($this->client->getRefreshToken()) {
                $this->client->fetchAccessTokenWithRefreshToken($this->client->getRefreshToken());
            } else {
                session(['oauth2state' => $this->client->createAuthUrl()]);
                return redirect()->away($this->client->createAuthUrl());
            }
        }
    }

    public function getClient()
    {
        return $this->client;
    }

    public function handleCallback()
    {
        $client = new Client();
        $client->setApplicationName('Laravel Google Sheets Integration');
        $client->setScopes([
            \Google\Service\Sheets::SPREADSHEETS,
            \Google\Service\Drive::DRIVE_FILE,
            \Google\Service\Drive::DRIVE
        ]);
        $client->setAuthConfig(base_path(env('GOOGLE_APPLICATION_CREDENTIALS')));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        $code = request()->input('code');
        $accessToken = $client->fetchAccessTokenWithAuthCode($code);
        $client->setAccessToken($accessToken);

        $tokenPath = public_path('storage/assets/service-key-bold-impulse-425908-g2-66212e3efa89.json');
        if (!file_exists(dirname($tokenPath))) {
            mkdir(dirname($tokenPath), 0700, true);
        }
        file_put_contents($tokenPath, json_encode($client->getAccessToken()));

        return redirect()->route('formRequestSubmit');
    }
}
