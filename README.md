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
git clone https://github.com/Agil-Saputra/haventwined-company-profile.git
cd haventwined-company-profile
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

### 6. Run database seeder
```sh
php artisan db:seed
```

### 7. Install JavaScript dependencies
```sh
npm install
```

### 8. Build frontend assets
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

