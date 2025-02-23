# Setup Guide

## Prerequisites
Make sure you have the following installed:
- PHP (>= 8.0)
- Composer
- Node.js & npm
- Laravel CLI
- MySQL or any database of your choice

## Installation

### 1. Clone the repository
```sh
git clone <your-repo-url>
cd <your-project-folder>
```

### 2. Install PHP dependencies
```sh
composer install
```

### 3. Copy the environment file and configure it
```sh
cp .env.example .env
```
- Update `.env` file with your database credentials and other necessary configurations.

### 4. Generate application key
```sh
php artisan key:generate
```

### 5. Run database migrations
```sh
php artisan migrate
```

### 6. Install JavaScript dependencies
```sh
npm install
```

### 7. Build frontend assets
```sh
npm run dev
```

## Running the Application
### Start the Laravel development server
```sh
php artisan serve
```
### Start Vite for hot module reloading
```sh
npm run dev
```

## Authentication (Optional)
If you want to use Laravel Breeze with Inertia and Vue.js for authentication:
```sh
composer require laravel/breeze --dev
php artisan breeze:install vue --inertia
npm install
npm run dev
php artisan migrate
```

