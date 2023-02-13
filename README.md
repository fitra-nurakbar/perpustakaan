## Configuration to try my project
1. *composer install* && *composer update*
2. copy the configuration in **.env.example** to **.env** according to the database that was created
3. *php artisan migrate*
4. *php artisan key:generate* / *php artisan key:generate --show*
5. *php artisan db:seed* / *php artisan db:seed --class=UserSeeder*
