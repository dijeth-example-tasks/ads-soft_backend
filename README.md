## Тестовое задание для АДС-Софт. Бекенд часть.

[Фронтенд часть](https://github.com/dijeth-example-tasks/ads-soft_frontend)

## Установка

```bash
composer install
php artisan key:generate
php artisan migrate
```

## Подготовка

```bash
php artisan db:seed
```

После сидирования БД нужно открыть логи (`storage/logs/laravel.log`) и скопировать токен`.

Этот токен нужно указать в файле `.env` фронтенд-приложения.

## Запуск

```bash
php artisan serve
```
