# NexGen

A modern, responsive technology services landing page built with Laravel and Blade.

## Features

- Responsive layout for desktop, tablet, and mobile
- Services, About, Process, and Contact sections
- Custom CSS styling and small-screen navigation
- Laravel Blade-powered page and dynamic copyright year
- SQLite-friendly local configuration
- Git-ready structure with environment secrets excluded

## Requirements

- PHP 8.2 or later
- Composer
- Node.js and npm (optional for this CSS-only landing page; useful for Laravel asset workflows)

## Installation

```bash
composer install
```

Create your local environment file:

**Windows PowerShell**
```powershell
Copy-Item .env.example .env
```

**macOS/Linux**
```bash
cp .env.example .env
```

Generate the app key:

```bash
php artisan key:generate
```

Create the SQLite database file if it does not exist:

**Windows PowerShell**
```powershell
New-Item -ItemType File -Force database/database.sqlite
```

**macOS/Linux**
```bash
touch database/database.sqlite
```

Run migrations and start the server:

```bash
php artisan migrate
php artisan serve
```

Visit http://127.0.0.1:8000.

## Upload to GitHub

Create an empty repository named `NexGen` on GitHub, then run:

```bash
git init
git add .
git commit -m "Initial NexGen Laravel project"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/NexGen.git
git push -u origin main
```

Replace `YOUR_USERNAME` with your GitHub username. Never commit `.env`, passwords, or API secrets.
