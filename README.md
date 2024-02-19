Welcome to the Kody Common package! This package is designed to provide you with built-in migrations and models for various functionalities such as SMS verification, settings management, and email verifications. It also includes a GUI for basic Laravel commands like migration, cache clearing, optimization, and more.

Installation
To install the Kody Common package, you can use Composer. Simply run the following command:

composer require kody/common
After installing the package, you need to publish the package's assets using the following command:

php artisan vendor:publish --provider="Kody\Common\CommonServiceProvider"
This command will publish necessary configuration files and assets to your Laravel application.

Features
Built-in Migrations and Models
This package comes with pre-built migrations and models for the following functionalities:

SMS Verification: Easily implement SMS verification in your Laravel application.
Settings Management: Manage application settings efficiently using the provided model.
Email Verifications: Implement email verification functionality seamlessly.
GUI for Laravel Basic Commands
The package includes a GUI interface for executing basic Laravel commands. These commands include:

Migration: Run migrations directly from the GUI.
Cache Clear: Clear the application cache with a single click.
Optimize: Optimize your Laravel application for better performance.
Run All Commands: Execute all available commands conveniently from the GUI.
To access the GUI pages, simply navigate to /route/gui in your Laravel application.

Usage
After installing the package and publishing its assets, you can start using its features right away. Here are some common tasks you might perform:

Running Migrations: Execute migrations using Laravel's migration command or through the provided GUI.
Implementing SMS Verification: Utilize the provided SMS verification model and migrations to add SMS verification to your application.
Managing Settings: Use the settings model to store and manage various application settings.
Implementing Email Verifications: Easily integrate email verification functionality into your Laravel application using the provided model and migrations.
Contribution
If you encounter any issues or have suggestions for improvements, please feel free to contribute to the package by opening issues or pull requests on the GitHub repository.

Thank you for choosing the Kody Common package! Happy coding!
 
 
