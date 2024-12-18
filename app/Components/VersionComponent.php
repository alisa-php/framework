<?php

namespace App\Components;

use Alisa\Component;
use Alisa\Context;

class VersionComponent extends Component
{
    public function register()
    {
        $this->alisa->onCommand(['версия', 'version'], function (Context $ctx) {
            $ctx->reply("Версия навыка: {$this->args['version']}");
        });
    }
}