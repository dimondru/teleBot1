<?php


namespace App\DTO;


class InputMassageDto
{

    public $text;

    public function __construct($data)
    {
        $this->text = $data['text'];
        $this->chat_id = $data['chat']['id'];
    }

}
