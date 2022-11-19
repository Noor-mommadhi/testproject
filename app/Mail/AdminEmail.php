<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $forgot;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($forgot)
    {
        $this->forgot=$forgot;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('ADMIN.resetlink')
            ->subject('Reset the Password')
            ->from('laravel@mail.com','laravel')
            ->with('conn',$this->forgot);
    }
}
