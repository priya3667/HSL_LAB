# HSL Labs | Operations Dashboard

A premium, high-fidelity operations dashboard for laboratory management, built with Laravel Blade and Tailwind CSS. This dashboard provides real-time analytics, task tracking, and administrative controls with a focus on mobile responsiveness and clean aesthetics.

![Dashboard Preview](https://img.shields.io/badge/Laravel-12.0-red?style=flat-square&logo=laravel) ![PHP](https://img.shields.io/badge/PHP-8.2+-blue?style=flat-square&logo=php) ![Tailwind CSS](https://img.shields.io/badge/Tailwind-4.1-38bdf8?style=flat-square&logo=tailwindcss)

## 🚀 Key Features

- **Dynamic Analytics**: Real-time data visualization using ApexCharts (Patient Flow, Task Distribution, Inventory Trends, Sales Performance)
- **Advanced Action Tracker**: High-density table with multi-select, searching, filtering, and bulk operations
- **Responsive Design**: Mobile-first approach with optimized layouts for all screen sizes
- **Interactive UI**: Clean, professional design with smooth transitions and premium typography
- **Date Management**: Integrated Flatpickr calendar for date filtering
- **Bulk Operations**: Edit and delete multiple entries with custom modals

## 🛠️ Technology Stack

- **Framework**: Laravel 12.0
- **Templating Engine**: Blade (Laravel's native templating engine)
- **PHP**: 8.2+
- **Styling**: Tailwind CSS 4.1
- **Charts**: ApexCharts.js
- **Date Picker**: Flatpickr.js
- **Build Tool**: Vite 7.0
- **Fonts**: Google Fonts (Plus Jakarta Sans, Mulish, Inter, Instrument Sans)

## 📋 Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP** >= 8.2 ([Download PHP](https://www.php.net/downloads))
- **Composer** ([Download Composer](https://getcomposer.org/download/))
- **Node.js** >= 18.x and npm ([Download Node.js](https://nodejs.org/))
- **Git** ([Download Git](https://git-scm.com/downloads))

### Verify Installation

```bash
php --version
composer --version
node --version
npm --version
git --version
```

## 💻 Installation & Setup

Follow these steps to get the HSL Labs Dashboard running on your local machine:

### 1. Clone the Repository

```bash
git clone <repository-url>
cd HSL_LAB
```

### 2. Install PHP Dependencies

```bash
composer install
```

This will install all Laravel and PHP dependencies defined in `composer.json`.

### 3. Install Node.js Dependencies

```bash
npm install
```

This will install Vite, Tailwind CSS, and other frontend dependencies.

### 4. Configure Environment

Create a `.env` file (if not exists):

```bash
# For Windows (PowerShell)
copy .env.example .env

# For macOS/Linux
cp .env.example .env
```

If `.env.example` doesn't exist, create a new `.env` file manually with the following content:

```env
APP_NAME="HSL Labs Dashboard"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost:8000

DB_CONNECTION=sqlite

SESSION_DRIVER=file
SESSION_LIFETIME=120

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

VITE_APP_NAME="${APP_NAME}"
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

This command will set the `APP_KEY` value in your `.env` file.

### 6. Create Database

This project uses SQLite by default. Create the database file:

```bash
# For Windows (PowerShell)
New-Item -Path database\database.sqlite -ItemType File

# For macOS/Linux
touch database/database.sqlite
```

### 7. Run Database Migrations

```bash
php artisan migrate
```

This will create all necessary database tables.

### 8. Create Storage Link (Optional)

If you plan to use file uploads:

```bash
php artisan storage:link
```

### 9. Start the Development Servers

You need to run **two separate commands** in **two different terminal windows**:

#### Terminal 1 - Laravel Development Server

```bash
php artisan serve
```

This will start the Laravel server at `http://localhost:8000`

#### Terminal 2 - Vite Development Server (for asset compilation)

```bash
npm run dev
```

This will start Vite for hot module replacement and asset compilation.

### 10. Access the Dashboard

Open your browser and navigate to:

```
http://localhost:8000
```

You should see the HSL Labs Operations Dashboard!

## 🎯 Quick Start (Alternative Method)

If you want to run both servers with a single command, you can use:

```bash
composer dev
```

This will run both `php artisan serve` and `npm run dev` concurrently using the configured script in `composer.json`.

## 📂 Project Structure

```
HSL_LAB/
├── app/                          # Application logic
├── database/                     # Database migrations and seeders
├── public/                       # Public assets
│   └── images/                   # SVG icons and images
├── resources/
│   └── views/
│       ├── dashboard.blade.php   # Main dashboard view
│       └── components/           # Blade components
│           ├── header.blade.php
│           ├── sidebar.blade.php
│           ├── kpi-card.blade.php
│           ├── analytics-card.blade.php
│           └── action-table.blade.php
├── routes/
│   └── web.php                   # Web routes
├── .env                          # Environment configuration
├── composer.json                 # PHP dependencies
├── package.json                  # Node.js dependencies
└── vite.config.js               # Vite configuration
```

## 🎨 Key Components

### Dashboard Components

- **Header**: Responsive header with search, date picker, notifications, and user profile
- **Sidebar**: Desktop navigation with icon-based menu items
- **KPI Cards**: Display key metrics (Patients Ready, Pending Disclosures, Open Tasks, Inventory Alerts)
- **Analytics Cards**: Container for charts (Patient Flow, Task Distribution, Inventory Usage, Sales Performance)
- **Action Table**: Advanced table with filtering, sorting, bulk operations, and pagination

### Charts

All charts are powered by **ApexCharts** and include:
- Patient Flow (Area Chart)
- Task Status Distribution (Donut Chart)
- Inventory Usage Trend (Bar Chart)
- Sales Performance (Mixed Chart)

## 🔧 Development

### Building for Production

```bash
npm run build
```

This will create optimized production assets in the `public/build` directory.

### Clearing Cache

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Running Tests

```bash
php artisan test
```
