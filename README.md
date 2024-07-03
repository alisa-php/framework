# Framework

Это фреймворк для разработки навыков для голосового помощника Алисы.

Фреймворк содержит базовую структуру проекта для быстрого старта, а также работает с базой данных Eloquent из коробки.

## Роуты

Роуты позволяют разруливать входящие запросы от Диалогов.

Находятся в папке `routes`.

Регистрация дополнительных файлов происходит в файле `config/routes.php`.

> [!NOTE]
> При регистрации файлов помните о приоритетах событий.
>

```php
// config/routes.php

return [
    'main',
    'foo/bar/baz', // папка foo, подпапка bar и файл с роутами baz.php
];
```

```php
// routes/main.php

/** @var \Alisa\Alisa $alisa */

$alisa->onStart([\App\Controllers\HamsterController::class, 'start']);
$alisa->onAny([\App\Controllers\HamsterController::class, 'any']);
```

