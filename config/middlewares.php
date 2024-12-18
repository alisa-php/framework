<?php

return [
    'global' => [
        'log',
    ],

    'alias' => [
        'log' => \Framework\Middlewares\RequestToLog::class,
    ],
];