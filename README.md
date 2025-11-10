# student-management-system-
🎓 Student Management System

A Laravel-based Student Management System designed to manage student records efficiently.
This project demonstrates CRUD operations, authentication, validation, and clean UI design using Laravel framework.

🚀 Features

🧾 Student Registration — Add new students with details like name, email, phone, and course.

🔐 Authentication System — Secure login and registration using Laravel’s built-in auth.

🗂️ Manage Records — Update, view, and delete student information easily.

🖥️ Dashboard — View all registered students in a simple and responsive layout.

⚙️ Validation — Server-side form validation for all input fields.

🎨 Modern UI — Designed with Blade templates and Bootstrap for a clean, responsive interface.

🧩 Tech Stack

Framework: Laravel 10+

Language: PHP 8.1+

Database: MySQL

Frontend: HTML, CSS, Bootstrap, Blade Templates

Tool: Composer

🛠️ Installation Steps

Clone the repository

git clone https://github.com/your-username/student-management-system.git
cd student-management-system


Install dependencies

composer install


Set up environment file

cp .env.example .env
php artisan key:generate


Configure database
Open .env and update your database details:

DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password


Run migrations

php artisan migrate


Start the development server

php artisan serve


Open the app in your browser:
👉 http://127.0.0.1:8000
