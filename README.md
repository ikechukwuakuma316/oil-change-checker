# Oil Change Checker

A Laravel 12 app that determines whether a car is due for an oil change based on odometer readings and the date of the last change.

## Rules

A car is due for an oil change if **either** condition is true:
- More than **5,000 km** have passed since the last oil change, or
- More than **6 months** have passed since the last oil change.

## Requirements

- PHP 8.2 or higher
- Composer
- SQLite (included with PHP — no separate install needed)

## Setup Instructions

### 1. Clone the repository
```bash
git clone https://github.com/ikechukwuakuma316/oil-change-checker.git
cd oil-change-checker


```

### 2. Install dependencies
```bash
composer install
```

### 3. Set up environment file
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Create the SQLite database file
```bash
touch database/database.sqlite
```

### 5. Run migrations
```bash
php artisan migrate
```

### 6. Start the app
```bash
php artisan serve
```

Visit **http://localhost:8000** in your browser.
