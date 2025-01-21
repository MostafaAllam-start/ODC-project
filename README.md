
# ODC Project

A robust PHP-based project for managing various roles such as lawyers, administrators, users, and articles. The ODC Project provides a modular structure, including authentication, administration dashboards, and shared components.

---

## Table of Contents

1. [Introduction](#introduction)
2. [Features](#features)
3. [Installation](#installation)
4. [Usage](#usage)
5. [File Structure](#file-structure)
6. [Dependencies](#dependencies)
7. [Configuration](#configuration)
8. [Testing](#testing)
9. [Contributors](#contributors)
10. [License](#license)

---

## Introduction

The ODC Project is designed to streamline content management and user interaction. With separate modules for lawyers, administrators, users, and articles, it provides an extensible framework to support a wide range of functionalities.

---

## Features

- **Role-Based Functionality**: Separate modules for lawyers, administrators, and users.
- **Article Management**: Create, view, and manage articles.
- **Authentication**: User login and session management.
- **Dashboard**: Administrative tools for managing content and users.
- **Shared Components**: Reusable navigation and layout elements.
- **Custom Uploads**: Support for image uploads across various modules.
- **Extensible Design**: Easily customizable for additional features.

---

## Installation

### Prerequisites

Ensure your environment meets the following requirements:
- **PHP**: Version 7.4 or higher
- **Composer**: Dependency manager for PHP
- **Web Server**: Apache or Nginx

### Steps

1. **Clone the Repository**:
   ```sh
   git clone https://github.com/YourRepository/ODC-Project.git
   ```

2. **Navigate to the Project Directory**:
   ```sh
   cd ODC-Project
   ```

3. **Install Dependencies**:
   ```sh
   composer install
   ```

4. **Set Up the Environment**:
   - Copy the `env.php` file to configure database credentials and other settings.
   - Ensure your server points to the `shared/home.php` or equivalent entry point.

5. **Run the Application**:
   Start a PHP server or configure your web server to point to the public directory:
   ```sh
   php -S localhost:8000 -t .
   ```

---

## Usage

### Modules

- **Lawyer**: Add and manage lawyer profiles.
- **Admin**: Administrative tools for managing users, articles, and site settings.
- **Articles**: Create, edit, and display articles.
- **Authentication**: Login and session management for users.

### Accessing the Application

Visit the site locally or on your server to access the respective modules.

---

## File Structure

```plaintext
ODC-Project/
├── Lawyer/              # Lawyer module files
├── admin/               # Administration tools
├── articale/            # Article management
├── assets/              # CSS, JavaScript, and other static assets
├── auth/                # Authentication logic
├── general/             # Configuration and helper functions
├── shared/              # Shared layout components
├── user/                # User management
├── README.md            # Project documentation
```

---

## Dependencies

This project uses Composer for dependency management. Make sure to run:
```sh
composer install
```

---

## Configuration

- **Database**:
  Configure the database connection in the `env.php` file:
  ```php
  define('DB_HOST', 'your-database-host');
  define('DB_USER', 'your-database-username');
  define('DB_PASS', 'your-database-password');
  define('DB_NAME', 'your-database-name');
  ```

- **Uploads**:
  Ensure the `upload/` directories are writable by the server.

---

## Testing

You can run basic functionality tests manually by interacting with the web interface. For automated testing, integrate a testing library like PHPUnit.

---

## Contributors

- **Mostafa Allam** - Developer and Maintainer

---

## License

This project is licensed under the MIT License. See the `LICENSE` file for details.

---

## Feedback

We welcome contributions and feedback! Please feel free to fork the repository and submit pull requests.

