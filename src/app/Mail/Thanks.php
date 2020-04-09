<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Thanks extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
      $this->mail_data = $mail_data;
    }

    public function build()
    {
      return $this->markdown('mails.thanks',$this->mail_data) 
      ->subject('DreamMapperShopでご購入頂きありがとうございます'); 
    }
}
