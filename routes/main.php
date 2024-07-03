<?php

/** @var \Alisa\Alisa $alisa */

$alisa->onStart([\App\Controllers\MainController::class, 'start']);
$alisa->onHelp([\App\Controllers\MainController::class, 'help']);
$alisa->onWhatCanYouDo([\App\Controllers\MainController::class, 'features']);
$alisa->onFallback([\App\Controllers\MainController::class, 'fallback']);
$alisa->onError([\App\Controllers\MainController::class, 'exception']);