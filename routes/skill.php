<?php

// Main
alisa()->onStart([\App\Controllers\MainController::class, 'onStart']);
alisa()->onHelp([\App\Controllers\MainController::class, 'onHelp']);
alisa()->onWhatCanYouDo([\App\Controllers\MainController::class, 'onWhatCanYouDo']);
alisa()->onFallback([\App\Controllers\MainController::class, 'onFallback']);
alisa()->onRepeat([\App\Controllers\MainController::class, 'onRepeat']);
alisa()->onAny([\App\Controllers\MainController::class, 'onAny']);
alisa()->onConfirm([\App\Controllers\MainController::class, 'onConfirm']);
alisa()->onReject([\App\Controllers\MainController::class, 'onReject']);
alisa()->onDangerous([\App\Controllers\MainController::class, 'onDangerous']);
alisa()->onPurchaseConfirmation([\App\Controllers\MainController::class, 'onFallback']);
alisa()->onShowPull([\App\Controllers\MainController::class, 'onFallback']);

// AudioPlayer
alisa()->onAudioPlayerPlaybackStarted([\App\Controllers\AudioPlayerController::class, 'onPlaybackStarted']);
alisa()->onAudioPlayerPlaybackFinished([\App\Controllers\AudioPlayerController::class, 'onPlaybackFinished']);
alisa()->onAudioPlayerPlaybackNearlyFinished([\App\Controllers\AudioPlayerController::class, 'onPlaybackNearlyFinished']);
alisa()->onAudioPlayerPlaybackStopped([\App\Controllers\AudioPlayerController::class, 'onPlaybackStopped']);
alisa()->onAudioPlayerPlaybackFailed([\App\Controllers\AudioPlayerController::class, 'onPlaybackFailed']);

// Exception
alisa()->onError(\Framework\Controllers\ExceptionLogController::class);