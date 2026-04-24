<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;
    public $nomorPendaftar;
    public $password;

    public function __construct($nomorPendaftar, $password)
    {
        $this->nomorPendaftar = $nomorPendaftar;
        $this->password = $password;
    }

    public function build()
    {
        return $this->subject('Akun Anda Berhasil Didaftarkan')
                    ->view('emails.registered');
    }
}
