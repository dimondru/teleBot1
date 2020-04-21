<?php


namespace App\Bot;


use Telegram\Bot\Laravel\Facades\Telegram;

class Massage
{
    public function sendMassage($chat_id,$massage){
        $response = Telegram::sendMessage([
            'chat_id' => $chat_id,
            'text' => $massage,

        ]);
    }
}
