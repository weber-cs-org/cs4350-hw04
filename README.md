# Homework 04 - Points **145**

## Instructions

This assignment contains code from `Homework 03` so do not be surprised. It picks up where `Homework 03` left off.  In this assignment you will be learning about using the Eloquent database package for connecting to MySQL databases.  You will also be learning about [database migrations](https://en.wikipedia.org/wiki/Data_migration#Database_migration) and how to use the dependency injection container with data storage options.

### 00 - Connect to a MySQL Database on my DigitalOcean DEV box

- Use these credentials to connect to a database on my DigitalOcean DEV box:
    - **adapter**: mysql
    - **host**: 67.205.183.11
    - **name**: users
    - **username**: student
    - **password**: letmein
    - **port**: 3306
- Use either the command-line or an application to test the connection to the database.

### 01 - Perform database migrations

- We will be using `phinx` to handle our migrations.  Read about it [here](https://phinx.org).
- Update the `phinx.yml` file with your database connection information.
- Change the table name to `users_<github_username>` in `20171011222734_users.php`.
- Change the table name to `users_<github_username>` in `UsersSeeder.php`.
- Change the table name to `users_<github_username>` in `UsersTruncator.php`.
- Change the table name to `users_<github_username>` in `dependencies.php`.
- Execute these commands after running `composer install`:
    - `vendor/bin/phinx migrate` to create the table schema.
    - `vendor/bin/phinx seed:run -s UsersSeeder` to seed the database with test data.
    - `vendor/bin/phinx seed:run -s UsersTruncator` to remove test data from database.

### 02 - Make Settings, Routing and Dependency Modifications

- Add database connection information to `settings.php` file.
- Modify `routes.php` file to contain only **2** routes `/` and `/profile`.
- Add the new actions to the dependency injection container.

### 03 - Adjust Twig Templates

- Modify the Twig templates in the `templates/` directory, if needed.

