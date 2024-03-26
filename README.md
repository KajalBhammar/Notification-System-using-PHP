# Notification System

This is a simple notification system implemented in PHP and MySQL. It allows users to view notification details and mark them as read.

## Features

- View notification details.
- Mark notifications as read.
- Secure database interaction using PDO.
- Timezone support.

## Requirements

- PHP
- MySQL
- Web server (e.g., Apache, xammp)

## Installation

1. Clone the repository or download the source files.
2. Set up a MySQL database and import the provided SQL schema (`notifications.sql`) to create the necessary table structure.
3. Update the `connect.php` file with your database credentials.
4. Place the source files in your web server's document root directory.

## Usage

1. Access the `index.php` file via a web browser.
2. Click on a notification to view its details.
3. The notification will be marked as read automatically upon viewing.

## Files

- `index.php`: Displays notification details and marks notifications as read.
- `connect.php`: Establishes a connection to the MySQL database.
- `notifications.sql`: SQL schema for creating the notifications table.

## Security

- Sanitize user inputs to prevent SQL injection and cross-site scripting (XSS) attacks.
- Use prepared statements and parameterized queries to interact with the database securely.

## Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).
