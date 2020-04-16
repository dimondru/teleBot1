<?php


namespace App;


use App\DTO\InputMassageDto;
use Telegram\Bot\Laravel\Facades\Telegram as Telegram;

/**
 * Class MassageManager
 * @package App\Http
 */
class MassageManager
{
    /**
     * @return array
     */
    public function getInput ()
    {
        return Telegram::getWebhookUpdate();
    }

    /**
     * @return mixed
     */
    public function getIncomingMassage(){
        return  $this->getInput()["message"];
    }

    /**
     * @return InputMassageDto
     */
    public function createMassageDto(){
        return new InputMassageDto($this->getIncomingMassage());
    }
}
