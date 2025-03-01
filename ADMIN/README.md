# Student Grade Management System

## Description
This project is a PHP-based web application designed for teachers to enter student grades and information, store them in a database, and allow students to check their grades online by entering their details.

## How It Works
1. The teacher enters student information and grades through the web interface.
2. The system saves the data in a MySQL database via `db.php`.
3. Students can access the website and enter their details to retrieve their grades.
4. The system verifies student details and fetches the corresponding grades.
5. The result is displayed on the website, indicating whether the student has passed or failed.

## Folder Structure
```
/project-root
│── /assets       # Contains stylesheets and static assets
│    ├── style.css
│    ├── scripts  # Contains JavaScript files
│    │   ├── formHandler.js  # Handles form input and module fields
│    │   ├── displayHandler.js  # Handles output display logic
│── /config       # Contains database configuration
│    └── db.php
│── /public       # Contains the main public-facing PHP file
│    └── index.php
│── README.md     # Project documentation
```

## Installation
1. Clone or download the project.
2. Place the project files in your local web server directory (e.g., `htdocs` for XAMPP).
3. Set up a MySQL database and import the necessary table for student records.
4. Ensure `db.php` contains the correct database connection details.

## Usage
- Teachers can enter student details and grades.
- Students can enter their information to check their grades.
- The system retrieves and displays the results.
- Modify `style.css` for UI customization if needed.

## Preview
![Project Preview](https://github.com/3boudi/progress-ADMIN/blob/main/ADMIN/assets/Screenshot%202025-03-01%20012540.png?raw=true)

## Author
- amin (3boudi)

## License
This project is open-source and available under the MIT License.


