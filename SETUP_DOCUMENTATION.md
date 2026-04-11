# VitalPulse Role-Based CRUD Application - Setup Complete! ✅

## Overview

Your role-based CRUD application has been successfully set up with complete authentication, authorization, and management systems.

---

## 📚 Database Schema

### Users Table

- **Columns**: id, name, email, password, role (ENUM: 'user', 'admin'), created_at, updated_at
- **Features**: Role-based access control with two primary roles

### Movements Table

- **Columns**: id, name, description, category, instructions, created_at, updated_at
- **Features**: Complete exercise/movement catalog for admin management

---

## 🔑 Test Credentials

### Admin Account

- **Email**: `admin@vitalpulse.com`
- **Password**: `admin123`
- **Role**: admin
- **Access**: Full CRUD, user management, admin dashboard

### Sample User Accounts

- **Email**: `test1@example.com`
- **Password**: `test123`
- **Role**: user

---

## 👥 User Roles & Permissions

### Admin Role

✅ **Permissions**:

- Create new movements
- Edit existing movements
- Delete movements
- View all users
- Edit user profiles and roles
- Delete user accounts
- Access admin dashboard
- View application statistics

✅ **Admin Routes**:

- `/admin/dashboard` - Admin dashboard with stats
- `/admin/movements` - List all movements
- `/admin/movements/create` - Create new movement
- `/admin/movements/{id}/edit` - Edit movement
- `/admin/movements/{id}/delete` - Delete movement
- `/admin/users` - List all users
- `/admin/users/{id}/edit` - Edit user (name, email, role)
- `/admin/users/{id}/delete` - Delete user

### User Role (Participant)

✅ **Permissions**:

- View movement library (read-only)
- View movement details
- NO creation rights
- NO edit rights
- NO delete rights

✅ **User Routes**:

- `/user/dashboard` - User dashboard
- `/movements` - View movement library
- `/movements/{id}` - View movement details
- **"Add New Movement" button intentionally removed from library header**

---

## 🏗️ Architecture

### Models

- **User**: Extended with `isAdmin()` and `isUser()` helper methods
- **Movement**: Full CRUD model with fillable fields

### Controllers

- **AuthController**: Handles registration, login, logout
    - Auto-login after registration
    - Role-based dashboard redirect
- **AdminController**: Complete CRUD and user management
- **MovementController**: Read-only access for users

### Middleware

- **CheckRole**: Role-based access control middleware
    - Verifies user authentication
    - Validates role authorization
    - Denies access with 403 error for unauthorized roles

### Routing

- Protected routes using `middleware('auth')`
- Role-specific routes using `middleware('role:admin')`
- User-specific routes in `/user/*` namespace
- Admin-specific routes in `/admin/*` namespace

---

## 🎨 UI Features

### Admin Dashboard

- Welcome message for admin
- Statistics cards (total users, regular users, admins, total movements)
- Quick access cards to movements and user management
- Responsive grid layout

### Admin Movement Management

- Paginated list of all movements
- Create new movement with form
- Edit existing movements
- Delete movements with confirmation
- Clean, professional UI with gradient colors

### Admin User Management

- List all registered users
- Edit user details (name, email, role)
- Change user roles from user to admin or vice versa
- Delete user accounts
- Role badges (admin/user)

### User Dashboard

- Welcome message with user's name
- Feature cards for browsing movements and learning
- Links to movement library
- Clean, participant-focused layout

### User Movement Library

- Grid view of all movements
- NO "Add New Movement" button (permission restricted)
- Movement cards with name, category, description
- View details button for each movement
- Search bar (structure ready for implementation)
- Read-only access

### Movement Detail Page

- Full movement information
- Description section
- Instructions section
- Back navigation

---

## 🔐 Security Features

1. **Role-Based Access Control (RBAC)**
    - Middleware validates user role on every protected route
    - 403 Forbidden response for unauthorized access

2. **Authentication**
    - Session-based authentication
    - Auto-login after successful registration
    - Secure password hashing (bcrypt)

3. **Authorization**
    - Admin-only routes prevent user access
    - UI elements (buttons) removed based on role
    - Backend route protection with middleware

4. **Form Validation**
    - All forms validate input
    - Email uniqueness check
    - Password confirmation
    - Custom validation error messages

---

## 📁 File Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── AdminController.php
│   │   └── MovementController.php
│   └── Middleware/
│       └── CheckRole.php
├── Models/
│   ├── User.php (updated)
│   └── Movement.php (new)

database/
├── migrations/
│   ├── 2026_04_06_074833_create_users_table.php
│   ├── 2026_04_06_074840_create_movements_table.php
│   └── 2026_04_06_072854_create_sessions_table.php
└── seeders/
    └── UserSeeder.php

resources/views/
├── admin/
│   ├── dashboard.blade.php
│   ├── movements/
│   │   ├── index.blade.php
│   │   ├── create.blade.php
│   │   └── edit.blade.php
│   └── users/
│       ├── index.blade.php
│       └── edit.blade.php
├── user/
│   ├── dashboard.blade.php
│   └── movements/
│       ├── library.blade.php
│       └── show.blade.php
├── login.blade.php (existing)
└── welcome.blade.php (existing)

routes/
└── web.php (updated)

bootstrap/
└── app.php (updated with middleware registration)
```

---

## 🚀 How to Use

### For Testing as Admin:

1. Go to login page: `http://localhost/VitalPulse-Project/`
2. Login with: `admin@vitalpulse.com` / `admin123`
3. You'll be redirected to `/admin/dashboard`
4. Manage movements and users from the dashboard

### For Testing as User:

1. Go to login page: `http://localhost/VitalPulse-Project/`
2. Login with: `john@example.com` / `password123`
3. You'll be redirected to `/user/dashboard`
4. Access movement library at `/movements`
5. Note: "Add New Movement" button is not visible

### To Register a New User:

1. Fill out the registration form on login page
2. Submit registration
3. You'll be automatically logged in as a regular user
4. Redirected to `/user/dashboard`

---

## ✨ Key Features Implemented

✅ **Authentication**

- User registration with auto-login
- Role-based login redirection
- Secure logout functionality

✅ **Database**

- Users table with role enumeration
- Movements table with complete exercise data
- Proper timestamps on all tables

✅ **User Dashboard**

- Welcome message with user's name
- Navigation to movement library
- Role-appropriate interface

✅ **Admin Dashboard**

- Statistics display (users, movements)
- Quick access to management sections
- Professional admin interface

✅ **Movement Management (Admin Only)**

- Create new movements
- Edit existing movements
- Delete movements
- List view with all details

✅ **User Management (Admin Only)**

- View all registered users
- Edit user details
- Change user roles
- Delete user accounts

✅ **Movement Library (User Only)**

- Read-only access
- Browse all movements
- View detailed instructions
- NO creation capability
- "Add New Movement" button removed

✅ **Security**

- Row-level middleware for role validation
- 403 Forbidden for unauthorized access
- Secure password hashing
- Session management

---

## 🔄 Workflow Examples

### Admin Creating a Movement:

1. Login as admin
2. Click "Movements" in navbar
3. Click "+ Add New Movement"
4. Fill in: Name, Category, Description, Instructions
5. Submit form
6. Movement appears in library for all users

### User Viewing Movements:

1. Login as user
2. Click "Movement Library" in navbar
3. See all available movements
4. Click "View Details" on any movement
5. Read full description and instructions
6. No option to create, edit, or delete

### Admin Changing User Role:

1. Login as admin
2. Click "Users" in navbar
3. Click "Edit" on any user
4. Change role from "user" to "admin"
5. Click "Update User"
6. User can now access admin dashboard

---

## 🎯 Next Steps (Optional Enhancements)

Consider these additions:

- Add movement images/videos
- Implement user profiles with profile pictures
- Add movement favorites/saved list for users
- Implement workout plans/routines
- Add search and filter functionality
- Email notifications for new movements
- User activity logging
- Two-factor authentication
- API endpoints for mobile apps
- User ratings/reviews for movements

---

## 🌍 Deploying VitalPulse to Other Units - Windows Guide

This is a **simple, step-by-step guide** for deploying VitalPulse on Windows. Just follow the steps in order!

### What You Need Before Starting

1. **A Windows computer** (Windows 10 or 11)
2. **XAMPP installed** - includes Apache, MySQL, and PHP
3. **The VitalPulse project files** - copy from your working installation
4. **Admin access** to the computer
5. **Node.js installed** - for building the application

---

### STEP 1: Set Up the Folder

**What you're doing:** Create a new copy of VitalPulse for this unit.

1. Go to: `C:\xampp\htdocs`
2. Right-click → New Folder
3. Name it: `VitalPulse-Unit-[YourUnitName]`
    - Example: `VitalPulse-Unit-ER` or `VitalPulse-Unit-Cardio`
4. Copy all VitalPulse files into this new folder

---

### STEP 2: Open Command Prompt and Install Dependencies

**What you're doing:** Download and set up all the required code packages.

1. Press `Windows Key + R`
2. Type: `cmd`
3. Press Enter
4. In the command window, type:

```
cd C:\xampp\htdocs\VitalPulse-Unit-[YourUnitName]
```

5. Then type:

```
composer install
```

This downloads all PHP packages. **Wait for it to finish** ⏳

6. Then type:

```
npm install
```

This downloads all JavaScript packages. **Wait for it to finish** ⏳

---

### STEP 3: Create the Database

**What you're doing:** Create a storage place for the application data.

1. Open a web browser and go to: `http://localhost/phpmyadmin`
2. Leave **User** and **Password** blank, click **Go**
3. Click on **SQL** tab at the top
4. Copy and paste this code:

```sql
CREATE DATABASE vitalpulse_unit_[yourunitname] CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'vitalpulse_user'@'localhost' IDENTIFIED BY 'VitalPulse@2026';
GRANT ALL PRIVILEGES ON vitalpulse_unit_[yourunitname].* TO 'vitalpulse_user'@'localhost';
FLUSH PRIVILEGES;
```

**Replace `[yourunitname]` with your unit name** (use lowercase, no spaces)  
Example: `vitalpulse_unit_cardiology`

5. Click **Go** (blue button)
6. Wait for it to complete ✅

---

### STEP 4: Set Up the Environment File

**What you're doing:** Tell the application where to find the database.

1. Go to your folder: `C:\xampp\htdocs\VitalPulse-Unit-[YourUnitName]`
2. Find `.env.example` file
3. Right-click → Copy
4. Right-click in the same folder → Paste
5. Right-click the new file → Rename to: `.env`
6. Right-click `.env` → Open with → Notepad

**Find and change these lines:**

```
DB_DATABASE=vitalpulse_unit_[yourunitname]
DB_USERNAME=vitalpulse_user
DB_PASSWORD=VitalPulse@2026
APP_NAME=VitalPulse-[YourUnitName]
APP_URL=http://localhost/VitalPulse-Unit-[YourUnitName]
```

7. **Save the file** (Ctrl + S)
8. **Close Notepad**

---

### STEP 5: Generate Application Key & Set Up Database

**What you're doing:** Initialize the application and create all tables.

1. Open Command Prompt again (Windows Key + R → cmd)
2. Go to your folder:

```
cd C:\xampp\htdocs\VitalPulse-Unit-[YourUnitName]
```

3. Type and press Enter:

```
php artisan key:generate
```

4. Wait for it to finish ✅

5. Type and press Enter:

```
php artisan migrate
```

This creates all the database tables. **Wait for it to finish** ⏳

6. Type and press Enter:

```
php artisan db:seed
```

This adds sample admin and user accounts. **Wait for it to finish** ⏳

---

### STEP 6: Build the Application Design

**What you're doing:** Prepare the website's appearance.

In the same Command Prompt window, type:

```
npm run build
```

**Wait for it to finish** ⏳

---

### STEP 7: Test It Works

**What you're doing:** Make sure everything is running correctly.

1. **Make sure XAMPP is running:**
    - Click XAMPP Control Panel icon
    - Click **Start** for Apache and MySQL (if not running)
    - They should show in **green**

2. **Open a web browser**

3. **Go to:** `http://localhost/VitalPulse-Unit-[YourUnitName]`

4. **You should see the Login page!** ✅

---

### STEP 8: Test Login With Default Accounts

**What you're doing:** Make sure users can log in.

**Test Account 1 - Admin:**

- Email: `admin@vitalpulse.com`
- Password: `admin123`
- What to check: Should see Dashboard with "Movements" and "Users" buttons

**Test Account 2 - Regular User:**

- Email: `test1@example.com`
- Password: `test123`
- What to check: Should see Dashboard with Movement Library link only

---

### STEP 9: Quick Testing Checklist

✅ Verify these work:

- [ ] Can login as Admin
- [ ] Can login as User
- [ ] Admin can see admin dashboard with stats
- [ ] Admin can see Movements menu
- [ ] Admin can see Users menu
- [ ] User can see Movement Library link
- [ ] User CANNOT see Movements menu (it's hidden)
- [ ] User CANNOT see Users menu (it's hidden)
- [ ] Can logout successfully

If ALL boxes are checked ✅, **deployment is successful!**

---

### STEP 10: Change Admin Password (IMPORTANT!)

**What you're doing:** Secure the system by removing default credentials.

1. **Open your app** and **login as admin** (admin@vitalpulse.com / admin123)
2. Look for your **user menu** (top right corner)
3. Find **Profile** or **Settings** option
4. **Change password** to something secure
5. **Log out** and **log back in** with new password
6. Make sure the new password works ✅

---

### What If Something Goes Wrong?

#### **Error: "XAMPP not running"**

- Click XAMPP Control Panel
- Click **Start** buttons for Apache and MySQL

#### **Error: "Cannot connect to database"**

- Check you created the database in PhpMyAdmin
- Check `.env` file has correct database name
- Make sure MySQL is running (green in XAMPP)

#### **Error: "The application has encountered an error"**

- Open file: `C:\xampp\htdocs\VitalPulse-Unit-[YourUnitName]\storage\logs\laravel.log`
- Look for red error messages (last few lines)
- Contact support with the error message

#### **Error: "White blank page"**

- Check XAMPP is running
- Check if Apache shows in green
- Restart Apache: XAMPP Control Panel → Stop Apache → Start Apache

#### **Can't see the website**

- Make sure you typed the correct URL: `http://localhost/VitalPulse-Unit-[YourUnitName]`
- Check folder name matches exactly (including capitals)

---

### Summary

You just deployed VitalPulse to a new unit! Here's what happened:

1. ✅ Set up a new folder
2. ✅ Installed all packages
3. ✅ Created a database
4. ✅ Configured the application
5. ✅ Built the application
6. ✅ Tested that it works
7. ✅ Changed the admin password

The application is **ready to use!** 🎉

---

## 📞 Support

If you encounter any issues:

1. Check database migrations: `php artisan migrate:status`
2. Clear cache: `php artisan cache:clear`
3. View database: Access via PhpMyAdmin on `localhost/phpmyadmin`
4. Check logs: `storage/logs/laravel.log`

---

**Setup completed on April 6, 2026** ✅
**Your VitalPulse application is ready for testing!**
