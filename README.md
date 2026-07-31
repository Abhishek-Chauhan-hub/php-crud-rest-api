# PHP CRUD REST API

A simple CRUD REST API built using Core PHP and MySQL. The API performs Create, Read, Update, and Delete operations and returns responses in JSON format.

## Features

* Create a new user
* Get all users
* Update user details
* Delete a user
* JSON request and response
* POST, GET, PUT, and DELETE HTTP methods
* Postman collection included

## Technologies Used

* Core PHP
* MySQL
* XAMPP
* Postman
* JSON

## API Endpoint

```text
http://localhost/api/api.php
```

## API Methods

| Method | Operation | Description              |
| ------ | --------- | ------------------------ |
| POST   | Create    | Creates a new user       |
| GET    | Read      | Retrieves all users      |
| PUT    | Update    | Updates an existing user |
| DELETE | Delete    | Deletes a user           |

## POST Request – Create User

```json
{
    "name": "Abhishek",
    "email": "abhishek@gmail.com",
    "password": "123456"
}
```

## GET Request – Read Users

No request body is required.

## PUT Request – Update User

```json
{
    "id": 1,
    "name": "Abhishek Chauhan",
    "email": "abhishek123@gmail.com"
}
```

## DELETE Request – Delete User

```json
{
    "id": 1
}
```

## How to Run the Project

1. Install XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder into the `htdocs` directory.
4. Create a MySQL database.
5. Create the `users` table.
6. Update the database details in `db.php`.
7. Open Postman.
8. Import the Postman collection.
9. Test the API using POST, GET, PUT, and DELETE methods.

## Author

Abhishek Chauhan
