# Library Management System

A Library Management System developed using **PHP, MySQL and Bootstrap**. This project allows users to register, log in and manage library book records through basic CRUD operations.

## 🚀 Features

- User Registration
- User Login and Logout
- Session-based access to the home page
- Add new books
- Display book records
- Update book information
- Delete book records
- MySQL database connectivity
- Bootstrap-based user interface

## 🛠️ Technologies Used

- PHP
- MySQL / MariaDB
- HTML5
- Bootstrap 5
- CSS

## 📁 Project Structure

```text
library_management/
│
├── Register.php    # User registration
├── login.php       # User login
├── logout.php      # User logout
├── home.php        # Home page
├── db.php          # Database connection
├── insert.php      # Add book records
├── show.php        # Display book records
├── update.php      # Update book records
├── delete.php      # Delete book records
└── README.md       # Project documentation
```

## 📋 Book Information

The application manages the following book details:

- Book ID
- Book Title
- Author
- Category
- Price
- Quantity

## ⚙️ Installation and Setup

### 1. Clone the repository

```bash
git clone https://github.com/pawaryash994-prog/library_management.git
```

### 2. Move the project into XAMPP

Place the project folder inside:

```text
C:\xampp\htdocs\
```

### 3. Create the database

Open phpMyAdmin and create a MySQL database.

The project uses a book table named `library_manag1` with these fields:

- id
- booktitle
- author
- category
- price
- quantity

The registration code also uses an `emp` table with name, email and password fields.

### 4. Configure database connection

Open `db.php` and update the database host, username, password and database name according to your local setup.

### 5. Run the project

Start Apache and MySQL from XAMPP.

Open your browser:

```text
http://localhost/library_management/Register.php
```

Register an account, log in, and access the library management features.

## 📚 Learning Outcomes

- PHP and MySQL connectivity
- User registration and login
- PHP sessions
- Password hashing
- CRUD operations
- Prepared statements
- Database record management
- Bootstrap form design

## 👨‍💻 Author

**Yash Pawar**

GitHub: [pawaryash994-prog](https://github.com/pawaryash994-prog)

---

⭐ If you find this project useful, consider giving it a star!
