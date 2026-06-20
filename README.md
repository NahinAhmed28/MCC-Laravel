# MCC Laravel

MCC Laravel is a Laravel-based web application repository.

## Features

- Laravel routing, controller, and model structure
- Database-backed workflow foundation
- Blade/Vite front-end asset workflow
- Environment-based local and production configuration

## Modules

- Authentication module: user access and protected routes when enabled
- Core application module: business records and workflows
- Admin module: management screens and settings
- Data module: migrations, models, seeders, and persistence
- Presentation module: Blade views, CSS, JavaScript, and assets

## System Architecture

The project follows Laravel MVC architecture. Routes map requests to controllers, controllers coordinate business logic, models persist data in the database, and views/assets render the user interface. Environment variables configure database, mail, app URL, and deployment-specific settings.

## Getting Started

```bash
git clone https://github.com/NahinAhmed28/MCC-Laravel.git
cd MCC-Laravel
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve
```
