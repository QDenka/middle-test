## Запуск с помощью Docker

Для быстрого запуска с помощью Docker, необходимо:
1. Запустить Docker
2. Перейти в папку с проектом и скопировать .env.example в .env
3. Прописать cd docker и make init
4. Сайт будет доступен по адресу localhost:8086

## Запуск без Docker

MySQL 5.7, PHP 8.0.2 - PHP 8.1

1. Настроить локальное окружение
2. Перейти в папку с проектом и скопировать .env.example в .env
3. Настроить файл .env
4. Прописать composer install
5. Прописать npm install и npm build
6. Прописать php artisan first:start
7. Прописать php artisan serve
8. Проект будет доступен по адресу localhost:8000
