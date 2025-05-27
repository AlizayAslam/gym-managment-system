# Gym Management System

This is a PHP-based web application for managing gym operations, including member registration, trainer management, package details, and payment processing. It provides an admin interface to handle gym-related tasks efficiently.

## Features
- **Admin Login**: Secure login for administrators using username and password.
- **Member Management**: Add and view member details, including their assigned trainers.
- **Trainer Management**: Register and view trainer information.
- **Package Management**: View available gym packages and their prices.
- **Payment Processing**: Record and view payment details for members.
- **User Signup**: Register new users with validated inputs and hashed passwords.

## Technologies Used
- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS, Bootstrap 4
- **Database**: MySQL (via phpMyAdmin)
- **Libraries**: jQuery, Bootstrap JS

## Project Structure
- `gymlogin.sql`: Database schema and initial data.
- `func.php`: Core functions for handling login, registration, and data retrieval.
- `header.php`: Navigation bar with login/logout functionality.
- `dbh.inc.php`: Database connection script.
- `admin-panel.php`: Admin dashboard for managing gym operations.
- `login.php`: Handles admin login.
- `index.php`: Landing page with login form.
- `logout.inc.php`: Logs out the admin.
- `package.php`: Displays gym package details.
- `payment.php`: Manages payment records and new payments.
- `signup.php` & `signup.inc.php`: User signup form and logic.
- `trainer.php`: Manages trainer details and registration.
- `style.css`: Custom styles for the application.

## Prerequisites
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (e.g., Apache via XAMPP, WAMP, or PHP's built-in server)
- phpMyAdmin (optional, for database management)

## How to Run
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/AlizayAslam/gym-management-system.git