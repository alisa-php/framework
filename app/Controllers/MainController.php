<?php

namespace App\Controllers;

use Alisa\Context;
use Throwable;

class MainController
{
    public function start(Context $context)
    {
        //
    }

    public function help(Context $context)
    {
        //
    }

    public function features(Context $context)
    {
        //
    }

    public function fallback(Context $context)
    {
        //
    }

    public function exception(Context $context, Throwable $exception)
    {
        $dir = storage_path('logs/exceptions/' . date('Y-m-d'));

        if (!file_exists($dir)) {
            mkdir($dir, 0776, true);
        }

        $file = $dir . '/exceptions.log';

        file_put_contents($file, '[' . date('d.m.Y H:i:s') . "] \n[context] -> " . $context . "\n[exception] -> " . $exception . "\n\n", FILE_APPEND);
    }
}