<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProjectOwnerMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;
    private $filePath;

    /**
     * Create a new message instance.
     */
    public function __construct($data,$filePath)
    {
        $this->data = $data;
        $this->filePath = $filePath;
        $this->data['file_path'] = $filePath;
    }

    public function build()
    {
        if (!empty($this->data['filename'])) {
            return $this->from(env('Mail_OWNER'), env('APP_NAME'))
                    ->subject('New Inquiry Of Client')
                    ->attach($this->filePath)
                    ->view('email.owner')
                    ->with('data', $this->data);
        } else {
            return $this->from(env('Mail_OWNER'), env('APP_NAME'))
                    ->subject('New Inquiry Of Client')
                    ->view('email.owner')
                    ->with('data', $this->data);
        }

    }
}
