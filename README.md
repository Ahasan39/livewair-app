# Livewair App

A modern Laravel web application built with Livewire and Filament Admin Panel for content management.

## About Livewair App

Livewair App is a full-featured content management system built on Laravel 10, featuring a powerful admin panel powered by Filament and dynamic frontend components using Livewire. The application provides a complete solution for managing and displaying various types of content including articles, services, team members, FAQs, and custom pages.

## Features

- **Filament Admin Panel** - Modern and intuitive admin interface for content management
- **Livewire Components** - Dynamic, reactive frontend without writing JavaScript
- **Content Management**
  - Articles & Blog posts with categories
  - Services showcase
  - Team members profiles
  - FAQ management
  - Custom pages
- **Contact Form** - Email-based contact system
- **Responsive Design** - Mobile-friendly Bootstrap-based frontend
- **Authentication** - Secure user authentication with Laravel Sanctum

## Tech Stack

- **Framework:** Laravel 10.x
- **Admin Panel:** Filament 3.x
- **Frontend:** Livewire 3.x
- **Database:** MySQL
- **CSS Framework:** Bootstrap
- **Icons:** Font Awesome, Heroicons

## Requirements

- PHP >= 8.1
- Composer
- MySQL >= 5.7 or MariaDB
- Node.js & NPM (for asset compilation)

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Ahasan39/livewair-app.git
   cd livewair-app
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install NPM dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database**
   
   Edit `.env` file and set your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=livewair_app
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Create admin user**
   ```bash
   php artisan make:filament-user
   ```

8. **Compile assets**
   ```bash
   npm run dev
   ```

9. **Start the development server**
   ```bash
   php artisan serve
   ```

Visit `http://localhost:8000` to view the application.

## Admin Panel

Access the admin panel at `http://localhost:8000/admin`

The admin panel provides management interfaces for:
- Articles & Categories
- Services
- Team Members
- FAQs
- Custom Pages

## Project Structure

```
app/
├── Filament/Resources/    # Filament admin resources
├── Livewire/              # Livewire components
├── Models/                # Eloquent models
└── Mail/                  # Mail classes

resources/
├── views/
│   ├── livewire/         # Livewire blade templates
│   └── components/       # Reusable blade components
└── css/                  # Stylesheets

public/
└── front/                # Frontend assets (CSS, JS, images)
```

## Database Schema

The application includes the following main tables:
- `users` - User authentication
- `articles` - Blog posts and articles
- `categories` - Article categories
- `services` - Service offerings
- `members` - Team members
- `faqs` - Frequently asked questions
- `pages` - Custom pages

## Configuration

### Mail Configuration

Configure your mail settings in `.env`:
```
MAIL_MAILER=smtp
MAIL_HOST=your_smtp_host
MAIL_PORT=587
MAIL_USERNAME=your_email
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Livewire Configuration

Livewire settings can be adjusted in `config/livewire.php`

## Development

### Running Tests
```bash
php artisan test
```

### Code Style
Follow PSR-12 coding standards

### Building for Production
```bash
npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## Security

If you discover any security-related issues, please email the maintainer instead of using the issue tracker.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Credits

Built with:
- [Laravel](https://laravel.com)
- [Filament](https://filamentphp.com)
- [Livewire](https://livewire.laravel.com)
- [Bootstrap](https://getbootstrap.com)

## Support

For support, please open an issue in the GitHub repository.

---

**Developed by Ahasan** | [GitHub](https://github.com/Ahasan39)
