# Leads Management System

A simple, clean, and modern Leads Management web application built with Laravel 12 and Tailwind CSS.

Full CRUD operations with strong validation and professional responsive UI.

## Features

- List all leads in a responsive table
- Add new leads
- Edit existing leads
- Delete leads with confirmation
- Advanced validation with English error messages
- Input rules:
  - Name: English letters and spaces only (no numbers or symbols)
  - Email: Valid format, English characters only, unique
  - Phone: Optional, exactly 11 digits (numbers only)
  - Status: New / Contacted / Closed
- Modern UI with Tailwind CSS and Font Awesome icons
- Success messages after every action
- Clean code using Form Requests

## Technologies

- Laravel 12
- Tailwind CSS (via Vite)
- MySQL
- Font Awesome 6 (CDN)

## Requirements

- PHP ≥ 8.2
- Composer
- Node.js & npm
- MySQL server running

## Installation

```bash
git clone https://github.com/yourusername/leads-manager.git
cd leads-manager

composer install

npm install
npm run build

cp .env.example .env
php artisan key:generate

Edit .env with your MySQL details:
envDB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=leads_manager
DB_USERNAME=root
DB_PASSWORD=

Create the database in MySQL:
SQLCREATE DATABASE leads_manager;
Then run:
php artisan migrate
composer run dev

Validation Rules

name: required, max:255, English letters & spaces only
email: required, valid email, ASCII only, unique
phone: nullable, exactly 11 digits, numbers only
status: required, one of: new, contacted, closed
