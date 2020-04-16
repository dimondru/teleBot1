<?php


namespace App\Http;


use App\Http\DTO\InputMassageDto;

/**
 * Class MassageManager
 * @package App\Http
 */
class MassageManager
{
    /**
     * @return array
     */
    public function getInput () :array
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
