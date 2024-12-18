<?php

namespace Framework\Controllers;

use Alisa\Context;
use Throwable;

class ExceptionLogController
{
    public function __invoke(Context $ctx, Throwable $th)
    {
        $dir = storage_path('logs/exceptions/' . date('Y-m-d'));

        if (!file_exists($dir)) {
            mkdir($dir, 0776, true);
        }

        $file = $dir . '/exceptions.log';

        file_put_contents($file, '[' . date('d.m.Y H:i:s') . "] \n[context] -> " . $ctx . "\n[exception] -> " . $th . "\n\n", FILE_APPEND);
    }
}