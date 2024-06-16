<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientMail extends Mailable
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
        return $this->from($this->data['mail'], env('APP_NAME'))
                    ->subject('Thank You for Your Submission!')
                    ->attach($this->filePath)
                    ->view('email.client')
                    ->with('data', $this->data);
    }


}
