<?php

namespace Framework\Middlewares;

use Alisa\Context;

class RequestToLog
{
    public function __invoke(Context $ctx, $next)
    {
        $next($ctx);

        $dir = storage_path('logs/requests/' . date('Y-m-d'));

        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }

        $file = $dir . '/requests.log';

        if (file_exists($file) && filesize($file) > 1e+7) {
            $timestamp = date('H_i_s');
            rename($file, $dir . "/requests-{$timestamp}.log");
        }

        $date = date('d.m.Y H:i:s');

        file_put_contents($file, "[$date] " . $ctx . "\n\n", FILE_APPEND | LOCK_EX);
    }
}