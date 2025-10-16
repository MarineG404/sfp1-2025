# PHP Web Application

## Overview
This project is a simple PHP web application that serves as a personal portfolio for developers. It includes a homepage, individual developer pages, and a page displaying PHP configuration information.

## Project Structure
```
php-web-app
├── public
│   ├── index.php               # Main entry point of the application
│   ├── phpinfo.php             # Displays PHP configuration
│   ├── developers               # Directory containing developer pages
│   │   ├── clement-kieu.php     # Clémant KIEU's page
│   │   ├── hieu-tran.php        # Hieu TRAN's page
│   │   ├── marine-gonnord.php    # Marine Gonnord's page
│   │   └── alexandre-iglesias.php # Alexandre IGLESIAS's page
│   ├── git-refresh.php          # Updates source code using Git
│   └── assets                   # Directory for assets
│       ├── css
│       │   └── style.css        # CSS styles for the application
│       └── js
│           └── main.js          # JavaScript code for the application
├── includes
│   ├── config.php               # Configuration settings
│   ├── functions.php            # Utility functions
│   └── version.php              # Application version
├── .htaccess                    # Server configuration
└── README.md                    # Project documentation
```

## Setup Instructions
1. Clone the repository from GitLab.
2. Navigate to the project directory.
3. Ensure you have a web server with PHP support (e.g., Apache, Nginx).
4. Place the `php-web-app` directory in the web server's document root.
5. Access the application via your web browser at `http://your-server-address/php-web-app/public/index.php`.

## Usage
- Visit the homepage to access links to the `phpinfo()` page and individual developer pages.
- Each developer page displays the developer's name, the current date/time, and a summary of their CV.
- The `git-refresh.php` page allows you to update the source code using Git.

## Notes
- Ensure that the server has the necessary permissions to execute PHP scripts.
- Modify the `includes/config.php` file for any environment-specific settings.