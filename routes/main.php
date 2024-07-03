<?php

/** @var \Alisa\Alisa $alisa */

$alisa->onStart([\App\Controllers\HamsterController::class, 'start']);
$alisa->onAny([\App\Controllers\HamsterController::class, 'any']);