# Parking App API

## Stacks

- PHP Laravel
- MySQL

## Docs

- [User Requirements](_docs/user-requirements.md)
- [Database ERD Design](_docs/database-erd.puml)
- [Requests Sample](_docs/client-req.http)
- [Test Cases](_docs/test-case.md)

## API End Point

| verb   | endpoint                      |
| ------ | ----------------------------- |
| POST   | /api/v1/auth/register         |
| POST   | /api/v1/auth/login            |
| POST   | /api/v1/auth/logout           |
| GET    | /api/v1/profile               |
| POST   | /api/v1/profile               |
| PUT    | /api/v1/password              |
| GET    | /api/v1/zones                 |
| GET    | /api/v1/vehicles              |
| GET    | /api/v1/vehicles/{vehicle_id} |
| POST   | /api/v1/vehicles              |
| PUT    | /api/v1/vehicles              |
| DELETE | /api/v1/vehicles              |
| GET    | /api/v1/parkings              |
| GET    | /api/v1/parkings/history      |
| POST   | /api/v1/parkings/{parking_id} |
| PUT    | /api/v1/parkings/{parking_id} |

## Features

- User regisration
- User login
- User view, update profile and password
- Manage user's vehicle
- Get prices for parking zones/areas
- Start/stop parking at a chosen zone
- View the current/total price of parking

## How to

### Install Locally

> Requirements:
>
> - PHP
> - Composer

- Download or clone repository

    ```sh
    git clone https://github.com/fuadmln/parking-app-api-laravel
    ```

- Open and locate project with terminal
- Install package

    ```sh
    composer install
    ```

- Setup environment variables <br>
    Copy `.env.example` to `.env` file and set variables value (databases).
- Generate application key

    ```sh
    php artisan key:generate
    ```

- Migrate database

    ```sh
    php artisan migrate
    ```

### Starting Local Development Server

```sh
php artisan serve
```

### Running Test

```sh
php artisan test
```
