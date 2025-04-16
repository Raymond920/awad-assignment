<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# AWAD Assignment - Online Forum Application

## Project Overview
This project is an online discussion forum built with Laravel, inspired by Reddit. Users can create accounts, post content, comment on discussions, and participate in topic-based communities.

## Features
- User authentication and account management
- Discussion threads with a commenting system
- Community-based topic organization
- Minimalist and responsive UI design

## Technologies
- **Backend**: Laravel PHP framework
- **Frontend**: Laravel Blade, Tailwind CSS

## Setup Instructions

### Prerequisites
- WampServer
- Composer

### Installation Steps

1. Start WampServer

2. **Clone the repository**
   ```
   git clone https://github.com/Raymond920/awad-assignment.git
   cd awad-assignment
   ```

3. **Install dependencies**
   ```
   composer install
   ```

4. **Configure environment**
   Copy .env.example to .env, keep the configuration and credentials
   ```
   cp .env.example .env
   ```

5. **Generate application key**
    For CSRF
   ```
   php artisan key:generate
   ```

6. **Run database migrations**
   ```
   php artisan migrate
   ```
   or for fresh database with sample data (resets the database)
   ```
   php artisan migrate:fresh --seed
   ```

7. **Start the development server**
   ```
   php artisan serve
   ```

8. **Access the application**
   ```
   Visit http://localhost:8000 in your browser
   ```

## Development

### Database Seeding
To populate your database with test data:
```
php artisan db:seed
```

### Working with Models
The application uses Eloquent ORM for database interactions:
- `User` model for authentication and user management

### Adding New Features
1. Create migrations for database changes.
2. Add routes in `routes/web.php`.
3. Create controllers in `app/Http/Controllers`.
4. Implement view templates in `resources/views`.

## Contributing
1. Create a feature branch from `main`.
2. Implement your changes.
3. Submit a pull request for merge.

## License
This project is academic coursework for Advanced Web Application Development.
