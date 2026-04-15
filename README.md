# VitalPulse - Role-Based Fitness Movement Management System

<p align="center">
  <strong>A comprehensive role-based CRUD application for managing fitness exercises and users</strong>
</p>

---

## 📋 Table of Contents

- [About VitalPulse](#about-vitalpulse)
- [Features](#features)
- [System Requirements](#system-requirements)
- [Installation & Setup](#installation--setup)
- [Database Setup](#database-setup)
- [Test Credentials](#test-credentials)
- [User Roles & Permissions](#user-roles--permissions)
- [Project Structure](#project-structure)
- [Troubleshooting](#troubleshooting)

---

## 🏥 About VitalPulse

VitalPulse is a Laravel-based fitness management application that enables administrators to manage a comprehensive catalog of fitness movements while providing users with access to view available exercises. The application features robust role-based access control with two distinct user roles: **Admin** and **User**.

### Key Highlights:

- **Modern Tech Stack**: Built with Laravel 12 and MySQL
- **Secure Authentication**: Industry-standard password hashing and session management
- **Role-Based Access Control**: Admin and User roles with distinct permissions
- **Comprehensive Exercise Database**: 12+ pre-seeded fitness movements
- **Responsive Design**: Clean and intuitive user interface

---

## ✨ Features

### For Administrators

- **Dashboard**: Overview of system statistics and management options
- **Movement Management**: Full CRUD operations (Create, Read, Update, Delete)
    - Add new exercises/movements
    - Edit existing movements
    - Delete movements
    - Categorize movements (Upper Body, Lower Body, Core, Cardio, Full Body)
- **User Management**:
    - View all registered users
    - Edit user profiles
    - Change user roles
    - Delete user accounts
- **Complete Access**: Full control over the application

### For Regular Users

- **Dashboard**: Personal user interface
- **View Movements**: Browse all available exercises with detailed descriptions
- **Read-Only Access**: View movement details including instructions and categories
- **User Profile**: Access to account information

---

## 🖥️ System Requirements

Before installing VitalPulse, ensure your system has the following:

### Software Requirements

- **PHP**: 8.2 or higher
- **MySQL**: 5.7 or higher
- **Node.js**: 16.0 or higher (for frontend build tools)
- **Composer**: Latest version

### Required PHP Extensions

- `php-mysql` or `php-pdo_mysql`: For database connection
- `php-json`: For JSON operations
- `php-xml`: For XML processing
- `php-mbstring`: For multi-byte string support

### Local Development (XAMPP)

- **Apache** server running
- **MySQL** daemon running

---

## 🚀 Installation & Setup

### Option 1: Quick Setup Script (Recommended)

If the project includes a setup script, run:

```bash
composer setup
```

### Option 2: Manual Installation

Follow these sequential steps to set up VitalPulse on your local machine:

#### Step 1: Clone or Extract the Repository

```bash
# If cloning from a repository
git clone <repository-url> VitalPulse-Project
cd VitalPulse-Project

# Or extract the provided ZIP file
cd VitalPulse-Project
```

#### Step 2: Install PHP Dependencies

```bash
composer install
```

This command installs all required PHP packages and libraries specified in `composer.json`.

**Expected Output**: ✅ Dependencies installed successfully

#### Step 3: Set Environment Configuration

```bash
# Copy the example environment file
cp .env.example .env

# Or on Windows (PowerShell):
Copy-Item .env.example .env
```

Then edit the `.env` file with your database configuration:

```env
APP_NAME=VitalPulse
APP_ENV=local
APP_DEBUG=true
APP_KEY=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vitalpulse
DB_USERNAME=root
DB_PASSWORD=
```

**Note**: In XAMPP, the default MySQL username is `root` with an empty password.

#### Step 4: Generate Application Key

```bash
php artisan key:generate
```

**Expected Output**: `Application key set successfully.`

#### Step 5: Create the Database

Start XAMPP and ensure MySQL is running, then create the database:

```bash
# Create the database using MySQL
mysql -u root -e "CREATE DATABASE IF NOT EXISTS vitalpulse;"
```

Or use phpMyAdmin:

1. Open `http://localhost/phpmyadmin`
2. Create a new database named `vitalpulse`

#### Step 6: Run Migrations and Seeders

Execute the migration and seeding commands to set up the database schema and populate it with dummy data:

```bash
php artisan migrate --seed
```

**What this command does**:

- ✅ Creates all necessary database tables
- ✅ Populates the `users` table with admin and test user accounts
- ✅ Populates the `movements` table with 12 fitness exercises
- ✅ Creates cache and session tables

**Expected Output**:

```
Migrating: 2026_04_06_072854_create_sessions_table
Migrated:  2026_04_06_072854_create_sessions_table (0.01 seconds)
Migrating: 2026_04_06_074833_create_users_table
Migrated:  2026_04_06_074833_create_users_table (0.01 seconds)
Migrating: 2026_04_06_074840_create_movements_table
Migrated:  2026_04_06_074840_create_movements_table (0.01 seconds)
✓ Seeding: Database\Seeders\UserSeeder
✓ Seeding: Database\Seeders\MovementSeeder
```

#### Step 7: Install Frontend Dependencies (Optional)

```bash
npm install
npm run build
```

---

## 📊 Database Setup

### Database Schema

#### Users Table

- **id**: Unique identifier
- **name**: User's full name
- **email**: Email address (unique)
- **password**: Hashed password
- **role**: User role (ENUM: 'admin', 'user')
- **created_at**: Account creation timestamp
- **updated_at**: Last update timestamp

#### Movements Table

- **id**: Unique identifier
- **name**: Exercise/movement name
- **description**: Detailed description of the movement
- **category**: Movement category (Upper Body, Lower Body, Core, Cardio, Full Body)
- **instructions**: Step-by-step instructions for performing the movement
- **created_at**: Creation timestamp
- **updated_at**: Last update timestamp

### Pre-Seeded Data

The database is automatically populated with:

**Users (2 accounts)**:

1. Admin Account
2. Test User Account

**Movements (12 exercises)**:

1. Push-ups (Upper Body)
2. Squats (Lower Body)
3. Plank (Core)
4. Lunges (Lower Body)
5. Burpees (Full Body)
6. Mountain Climbers (Cardio)
7. Jumping Jacks (Cardio)
8. Bicycle Crunches (Core)
9. Deadlifts (Lower Body)
10. Dumbbell Rows (Upper Body)
11. Tricep Dips (Upper Body)
12. Glute Bridges (Lower Body)

---

## 🔐 Test Credentials

### Admin Account

Use this account to access all administrative features and management systems.

```
Email:    admin@vitalpulse.com
Password: admin123
```

**Access Level**: Full system access including user management and movement CRUD operations

### Regular User Account

Use this account to experience the user interface with limited permissions (read-only access to movements).

```
Email:    test1@example.com
Password: test123
```

**Access Level**: View-only access to movements; no administrative features

### Creating Additional Accounts

You can register new user accounts directly from the login page. New accounts are created as regular users by default.

---

## 👥 User Roles & Permissions

### Admin Role

**Dashboard Access**: ✅ Admin Dashboard
**Movement Management**: ✅ Full CRUD Operations

- ✅ Create new movements
- ✅ Edit existing movements
- ✅ Delete movements
- ✅ View movement list
- ✅ View movement details

**User Management**: ✅ Complete Control

- ✅ View all users
- ✅ View user details
- ✅ Edit user profiles and information
- ✅ Change user roles
- ✅ Delete user accounts

### User Role

**Dashboard Access**: ✅ User Dashboard
**Movement Access**: ✅ Read-Only

- ✅ View all movements
- ✅ View movement details
- ✅ Read instructions and descriptions
- ❌ Cannot create movements
- ❌ Cannot edit movements
- ❌ Cannot delete movements

**User Management**: ❌ No Access

- ❌ Cannot view other users
- ❌ Cannot edit other profiles
- ❌ Cannot manage roles

---

## 📁 Project Structure

```
VitalPulse-Project/
├── app/
│   ├── Http/
│   │   ├── Controllers/        # Application controllers
│   │   │   ├── AuthController.php
│   │   │   ├── AdminController.php
│   │   │   └── MovementController.php
│   │   └── Middleware/         # HTTP middleware
│   └── Models/                 # Database models
│       ├── User.php
│       └── Movement.php
├── database/
│   ├── migrations/             # Database schema definitions
│   └── seeders/                # Database population scripts
│       ├── DatabaseSeeder.php
│       ├── UserSeeder.php
│       └── MovementSeeder.php
├── resources/
│   └── views/                  # Blade template files
│       ├── login.blade.php
│       ├── dashboard.blade.php
│       ├── admin/              # Admin views
│       └── user/               # User views
├── routes/
│   └── web.php                 # Web route definitions
├── public/
│   ├── index.php               # Application entry point
│   └── login.css               # Login page styles
├── config/                     # Configuration files
├── storage/                    # Logs and cache
├── tests/                      # Unit and feature tests
├── composer.json               # PHP dependencies
├── package.json                # Node.js dependencies
├── .env.example                # Environment template
└── README.md                   # This file
```

---

## 🌐 Accessing the Application

### Via XAMPP (Local Development)

1. Ensure XAMPP is running:
    - Apache server: ON
    - MySQL database: ON

2. Open your web browser and navigate to:

    ```
    http://localhost/VitalPulse-Project/
    ```

3. You will be redirected to the login page

4. Login using the admin or test user credentials provided above

### Via PHP Development Server (Alternative)

```bash
php artisan serve
```

Then open your browser to: `http://127.0.0.1:8000`

---

## 🔧 Development Commands

### Run Migrations (Create Database Tables)

```bash
php artisan migrate
```

### Seed Database with Dummy Data

```bash
php artisan db:seed
```

Or seed specific seeders:

```bash
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=MovementSeeder
```

### Reset Database (Remove all data and tables)

```bash
php artisan migrate:reset
```

### Fresh Database (Reset and migrate again)

```bash
php artisan migrate:fresh --seed
```

### Run Tinker (Interactive Shell)

```bash
php artisan tinker
```

### Run Tests

```bash
php artisan test
```

---

## 🐛 Troubleshooting

### Common Issues and Solutions

#### Issue: "SQLSTATE[HY000]: General error: 1030 Got error"

**Solution**: Ensure MySQL is running and the `vitalpulse` database exists.

#### Issue: "No application key has been generated"

**Solution**: Run `php artisan key:generate` to create the application key.

#### Issue: "Class 'PDO' not found"

**Solution**: Enable the MySQL extension in your PHP configuration.

#### Issue: "Port 3306 refused connection"

**Solution**: Start MySQL service in XAMPP or verify the port in `.env` file.

#### Issue: Database migrations fail during `php artisan migrate --seed`

**Solution**:

1. Ensure the database exists: `CREATE DATABASE vitalpulse;`
2. Clear cache: `php artisan config:clear`
3. Run migrations with seed flag: `php artisan migrate --seed --force`

#### Issue: Session/Cache files permission denied

**Solution**:

```bash
# On Linux/Mac:
chmod -R 775 storage bootstrap/cache

# On Windows (PowerShell as Administrator):
icacls storage /grant %username%:F /t
icacls bootstrap/cache /grant %username%:F /t
```

#### Issue: "CSRF token mismatch" error during login

**Solution**: Clear session files and cache:

```bash
php artisan cache:clear
php artisan session:clear
```

---

## 📞 Support & Documentation

For detailed information about Laravel, visit:

- [Laravel Documentation](https://laravel.com/docs)
- [Eloquent ORM Guide](https://laravel.com/docs/eloquent)
- [Blade Templating](https://laravel.com/docs/blade)

---

## 📜 License

VitalPulse is open-source software licensed under the [MIT License](LICENSE).

---

## 🙏 Acknowledgments

Built with:

- [Laravel Framework](https://laravel.com)
- [MySQL Database](https://www.mysql.com)
- [Blade Templating Engine](https://laravel.com/docs/blade)

---

**Last Updated**: April 2026  
**Version**: 1.0.0
