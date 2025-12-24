Admission Management System
A web-based application designed to streamline the college/school enrollment process. This system allows students to apply for courses online while providing administrators with tools to manage applications, verify documents, and update admission statuses.

🚀 Features
Student Portal
Online Registration: Create an account to start the application process.

Application Form: Input personal, academic, and contact details.

Document Upload: Upload necessary certificates (PDF/JPG).

Status Tracking: Real-time updates on application approval or rejection.

Admin Dashboard
Applicant Overview: View a list of all submitted applications.

Review System: Approve or reject applications based on criteria.

User Management: Manage student accounts and system settings.

Reports: Export applicant data for offline processing.

🛠️ Tech Stack
Frontend: HTML5, CSS3, JavaScript (AJAX for form submission)

Backend: PHP 8.x

Database: MySQL

Server: XAMPP / WAMP / Apache

📋 Prerequisites
Before you begin, ensure you have the following installed:
XAMPP or any local PHP server.

A modern web browser (Chrome, Firefox, Edge).

🔧 Installation & Setup
Clone the Repository

Bash

git clone https://github.com/your-username/admission-management-system.git
Move to Web Directory Move the project folder to your local server directory (e.g., C:/xampp/htdocs/ or /var/www/html/).

Database Setup

Open phpMyAdmin in your browser (http://localhost/phpmyadmin).

Create a new database named admission_db.

Import the database.sql file provided in the /db folder of this project.

Configure Connection

Open config.php or db_connect.php.

Update the database credentials:

PHP

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "admission_db";
Run the App

Start Apache and MySQL in your XAMPP Control Panel.

Navigate to http://localhost/admission-management-system in your browser.



🤝 Contributing
Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are greatly appreciated.

Fork the Project.

Create your Feature Branch (git checkout -b feature/AmazingFeature).

Commit your Changes (git commit -m 'Add some AmazingFeature').

Push to the Branch (git push origin feature/AmazingFeature).

Open a Pull Request.

XAMPP or any local PHP server.

A modern web browser (Chrome, Firefox, Edge).
