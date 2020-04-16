<?php

namespace App\Http\Controllers;

use App\MassageManager;

use Telegram\Bot\Laravel\Facades\Telegram as Telegram;

class BotController extends Controller
{

    public function incoming(){
        $massageManager = new MassageManager();
        $massageDTO  = $massageManager->createMassageDto();

        $response = Telegram::sendMessage([
            'chat_id' => $massageDTO->chat_id,
            'text' => 'привет '.$massageDTO->text,

        ]);
    }
}
