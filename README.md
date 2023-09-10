# Unlimted category selector

## Features :
- Unlimted categories and sub categories selectors
- Use infinity scroll and pagination to load as many categories as possible without any problem
- Search for categories and sub categories
- Secure request by csrf token
- Built with laravel

## Prview
![Image of unlimted category](https://www.twice-m.com/preview-unlimted-category.gif)



## How to install
1. Download the project
2. Install php,composer and mysql
3. Copy .env.examble to .env and add your database info
4. Run composer install
5. Run php artisan key:generate
6. Run php artisan migrate
6. run php artisan:serve



## Notes
To make the pagination show more records
change the $perPage attribute on [Category](https://github.com/MohamedOscar3/unlimted-category-selector/blob/master/app/Models/Category.php) model
