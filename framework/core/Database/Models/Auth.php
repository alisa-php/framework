<?php

namespace Framework\Database\Models;

use Alisa\Sessions\Application;
use Alisa\Sessions\User;
use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
    protected $fillable = [
        'user_id',
        'application_id',
    ];

    public static function createOrGetUser(): static
    {
        return once(function () {
            $userId = User::getId();
            $applicationId = Application::getId();

            return static::query()->createOrFirst([
                'user_id' => $userId,
                'application_id' => $applicationId,
            ]);
        });
    }
}