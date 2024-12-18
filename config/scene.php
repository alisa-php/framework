<?php

use Alisa\Sessions\Session;

return [
    /**
     * Сессия в которой будет храниться информация о текущекй сцене.
     *
     * Может быть Alisa\Sessions\Session, Alisa\Sessions\User или Alisa\Sessions\Application.
     */
    'driver' => Session::class,

    /**
     * Ключ в сессии где хранится идентификатор сцены.
     */
    'key' => '__scene__',
];