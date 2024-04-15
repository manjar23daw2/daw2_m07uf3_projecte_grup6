<?php

namespace App\Providers;

use Telegram\Bot\Api;

//require __DIR__ . '/vendor/autoload.php';

class TelegramService
{
    public function __construct(private readonly Api $telegram)
    {
    }

    public function MessageConfirmation($usuari, $horaEntrada, $logged)
    {
        if($logged){
            $this->telegram->sendMessage([
                'chat_id' => '-4180529468',
                //'chat_id' => '@Apartaments_MJ_CR_bot',
                'text' => "{$usuari} ha fet login a les {$horaEntrada}"
            ]);
        }else{
            $this->telegram->sendMessage([
                'chat_id' => '-4180529468',
                //'chat_id' => '@Apartaments_MJ_CR_bot',
                'text' => "{$usuari} ha fet logout a les {$horaEntrada}"
            ]); 
        }
    }
}
