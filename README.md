# Parking App API

A Laravel backend web API for Parking App.

The Client implementation for this API is available at [React Parking App](https://github.com/fuadmln/parking-app-react)

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
- Install package dependencies

    ```sh
    composer install
    ```

- Create database (in mysql, postgre) for later use in `.env`
- Setup environment variables

    Copy `.env.example` file and rename to `.env`, then set variables value (database settings).
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

### Running Test Case

```sh
php artisan test
```

### Testing Request

> Require `REST Client`, a VS Code Extension that allows you to send HTTP request and view the response in Visual Studio Code directly.
>
> For usage, please visit the [REST Client website](https://marketplace.visualstudio.com/items?itemName=humao.rest-client)

Open [client-req.http](_docs/client-req.http) file in _docs folder with VS Code. You will find some sample requests for some endpoints.
