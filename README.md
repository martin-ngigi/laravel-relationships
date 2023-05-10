# Installing this laravel project:
1. Clone your project
2. Go to the folder application using cd command on your cmd or terminal
3. Run composer install on your cmd or terminal:
```
composer install
```
4. Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
- on windows
```
copy .env.example .env
```
- on mac / linux
```
cp .env.example .env
```
5. Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
6. Run : 
```
php artisan key:generate
php artisan migrate
php artisan serve
```
7. Go to http://localhost:8000/