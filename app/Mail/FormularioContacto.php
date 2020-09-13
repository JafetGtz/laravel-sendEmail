<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormularioContacto extends Mailable
{
    use Queueable, SerializesModels;
     public $asunto = "mensaje de prueba";
     public $mensaje;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.formulario-contacto')
                ->subject('Document Upload')
                ->attach($this->mensaje['archivo']->getRealPath(),
                [
                    'as' => $this->mensaje['archivo']->getClientOriginalName(),
                    'mime' => $this->mensaje['archivo']->getClientMimeType(),
                ]);
    }
}
