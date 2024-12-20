# Фреймворк

Это базовый фреймворк построенный на [Alisa](https://github.com/alisa-php/alisa) для быстрого старта разработки навыка для Алисы.

## Особенности

Из коробки поддерживает работу с базой данных, логирование запросов и многое другое. Подход к разработке вдохновлен Laravel, но более упрощенный.

## Установка

```bash
composer create-project alisa/framework
```

## Команды

Вы можете воспользоваться волшебной командой `php alisa <command>` для организации проекта.

Ниже представлен список доступных команд:

```bash
  [Сервер]
      - php alisa serve <port?> .................. Запустить сервер
  [Создать]
      - php alisa make:component <name> .......... Создать компонент
      - php alisa make:controller <name> ......... Создать контроллер
      - php alisa make:middleware <name> ......... Создать мидлварь
      - php alisa make:migration <table> ......... Создать миграцию
  [Миграции]
      - php alisa migrate:up ..................... Накатить миграции
      - php alisa migrate:down ................... Откатить миграции
      - php alisa migrate:fresh .................. Перекатить все таблицы
```
