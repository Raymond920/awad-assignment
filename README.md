![image](https://github.com/user-attachments/assets/2a355538-c62b-4e0c-b1ae-055f3acae4b8)

> [!NOTE]
> This project is academic coursework for UECS3294 Advanced Web Application Development module.

# InterKnot Forum
![image](https://github.com/user-attachments/assets/8bba53de-efca-4fbc-922f-67ca97178f71)

## Project Overview
This project is a feature-rich online discussion forum built with Laravel, drawing inspiration from modern social platforms like Reddit. It serves as a community space where users can create accounts, share posts, engage in discussions through comments, and participate in specialized topic-based communities.

![image](https://github.com/user-attachments/assets/02378de1-5af3-4b64-904a-97bd687152eb)

## Features
- **User Management**
  - Registration and authentication system
  - User profiles with customization options
  - Account settings and preferences

- **Content Management**
  - Create, edit, and delete posts
  - Rich text formatting for discussions
  - Image uploads and embedding
  - Sorting and filtering options

- **Community Engagement**
  - Threaded commenting system
  - Topic-based communities
  - Content rating and popularity metrics
  - Activity feed and notifications

- **UI/UX**
  - Responsive design for all device types
  - Dark/light mode themes
  - Intuitive navigation system
  - Accessibility-focused interface

## Technologies Used

### Backend
- **Laravel 12** - PHP framework providing the application foundation
- **MySQL** - Relational database for data storage
- **Eloquent ORM** - Database interaction layer
- **Laravel Sanctum** - API token authentication

### Frontend
- **Blade Templates** - Laravel's templating engine
- **Tailwind CSS** - Utility-first CSS framework
- **Custom CSS** - Specialized styling with animations

## Setup Instructions

### Prerequisites
- PHP 8.1 or higher
- Composer
- WampServer, XAMPP, or similar local development environment
- Node.js and NPM (for frontend assets)
- Git

### Installation Steps

1. **Start your local server environment**
   - Launch WampServer or equivalent

2. **Clone the repository**
   ```bash
   git clone https://github.com/Raymond920/awad-assignment.git
   cd awad-assignment
   ```

3. **Install PHP dependencies**
   ```bash
   composer install
   ```

4. **Install Frontend dependencies**
   ```bash
   npm install
   npm run dev
   ```

5. **Configure environment**
   ```bash
   cp .env.example .env
   ```
   
   Then edit the `.env` file with your database credentials and other configuration settings.

6. **Generate application key**
   ```bash
   php artisan key:generate
   ```

7. **Run database migrations**
   ```bash
   php artisan migrate
   ```
   
   For a fresh database with sample data:
   ```bash
   php artisan migrate:fresh --seed
   ```

8. **Create storage link for public assets**
   ```bash
   php artisan storage:link
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

10. **Access the application**
    - Visit `http://localhost:8000` in your browser

## Development Guide

### Environment Setup
- Configure `.env` file with appropriate settings
- Use `php artisan config:cache` after making configuration changes

### Database Management
- Create migrations: `php artisan make:migration create_your_table_name`
- Create models: `php artisan make:model ModelName`
- Run specific seeders: `php artisan db:seed --class=UserSeeder`

### Controller Development
- Create controllers: `php artisan make:controller ControllerName`
- Create resource controllers: `php artisan make:controller PostController --resource`

### Testing
- Run tests: `php artisan test`
- Create test: `php artisan make:test FeatureNameTest`

### Common Commands
- Clear cache: `php artisan cache:clear`
- Clear config: `php artisan config:clear`
- List routes: `php artisan route:list`

## Project Structure

```
app/
├── Console/          # Custom commands
├── Http/             # Controllers, Middleware, Requests
├── Models/           # Eloquent models
├── Providers/        # Service providers
database/
├── factories/        # Model factories for testing/seeding
├── migrations/       # Database migrations
├── seeders/          # Database seeders
public/               # Publicly accessible files
├── css/              # Compiled CSS
├── js/               # Compiled JavaScript
├── images/           # Public images
resources/
├── css/              # CSS source files
├── js/               # JavaScript source files
├── views/            # Blade templates
routes/               # Application routes
tests/                # Automated tests
```

## Contributing

1. Fork the repository
2. Create your feature branch: `git checkout -b feature/amazing-feature`
3. Commit your changes: `git commit -m 'Add some amazing feature'`
4. Push to the branch: `git push origin feature/amazing-feature`
5. Submit a pull request

## License

This project is academic coursework for Advanced Web Application Development module.

## Acknowledgments

- Laravel Team for the amazing framework
- All open-source contributors whose libraries make this project possible
