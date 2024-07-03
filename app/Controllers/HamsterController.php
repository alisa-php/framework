<?php

namespace App\Controllers;

use Alisa\Context;

class HamsterController
{
    public function start(Context $context)
    {
        $context->reply('{effect:hamster} Привет!');
    }

    public function any(Context $context)
    {
        $text = $context('request.original_utterance', 'Неизвестная команда!');

        $context->reply('{effect:hamster}' . $text);
    }
}