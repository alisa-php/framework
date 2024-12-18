<?php

use Alisa\Alisa;
use Alisa\Config;
use App\Models\User;
use Illuminate\Container\Container;

if (!function_exists('project_path')) {
    function project_path(?string $path = ''): string
    {
        return rtrim(__DIR__ . '/../' . $path, '\/');
    }
}

if (!function_exists('storage_path')) {
    function storage_path(?string $path = ''): string
    {
        return rtrim(project_path('storage/' . $path), '\/');
    }
}

if (!function_exists('user')) {
    function user(): User
    {
        return Container::getInstance()->make('user');
    }
}

if (!function_exists('alisa')) {
    function alisa(): Alisa
    {
        return Container::getInstance()->make(Alisa::class);
    }
}

if (!function_exists('config')) {
    function config(string $key, mixed $default = null): mixed
    {
        return Config::get($key, $default);
    }
}
