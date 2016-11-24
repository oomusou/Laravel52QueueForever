<?php

namespace App\Services;

use Illuminate\Mail\Message;
use Mail;

class MailService
{
    public function mailBySync()
    {
        Mail::send('welcome', [], function (Message $message) {
            $message->sender('oomusou@gmail.com');
            $message->subject('Laravel 5.2 mail by Sync');
            $message->to('oomusou@gmail.com');
        });
    }
}