# Parking App API

## Stacks

-   PHP Laravel
-   MySQL

## Docs

-   [User Requirements](_docs/user-requirements.md)
-   [Database ERD Design](_docs/database-erd.puml)
-   [Requests Sample](_docs/client-req.http)
-   [Test Cases](_docs/test-case.md)

## Features

-   User regisration
-   User login
-   User view, update profile/password
-   Manage user's vehicle
-   Get prices for parking zones/areas
-   Start/stop parking at a chosen zone
-   View the current/total price of parking

## How to

**Install Locally**

-   Download or clone repository

    ```sh
    git clone https://github.com/fuadmln/parking-app-api-laravel
    ```

-   Open and locate project with terminal
-   Install package
    ```sh
    composer install
    ```
-   Setup environment variables<br>
    Copy `.env.example` to `.env` file and set variables value (databases).
-   Generate application key
    ```sh
    php artisan key:generate
    ```
-   Migrate database
    ```sh
    php artisan migrate
    ```

**Starting Local Development Server**

```
php artisan serve
```

**Running Test**

```
php artisan test
```
