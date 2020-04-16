<?php

namespace App\Http\Controllers;

use App\MassageManager;

use App\Models\Users\UserMasseges;
use Telegram\Bot\Laravel\Facades\Telegram as Telegram;

class BotController extends Controller
{

    public function incoming(){

        $massageManager = new MassageManager();
        $massageDTO  = $massageManager->createMassageDto();

        $massage = new UserMasseges();
        $massage->text = $massageDTO->text;
        $massage->chat_id = $massageDTO->chat_id;
        $massage->save();

        $response = Telegram::sendMessage([
            'chat_id' => $massageDTO->chat_id,
            'text' => 'привет '.$massageDTO->text,

        ]);
    }
}
