<?php
    $conn = new mysqli('127.0.0.1:3306', 'root', '', 'my_datebase');
    if ($con->$connect_errno) {
        echo $conn->connect_error;
        exit;
    }

    $usersTable = "CREATE TABLE IF NOT EXISTS users (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(225) NOT NULL,
        password VARCHAR(225) NOT NULL
    )";

    $conn->query($usersTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }

    $messagesTable = "CREATE TABLE IF NOT EXISTS messages (
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        useriId INT NOT NULL AUTO_INCREMENT,
        text VARCHAR(225) NOT NULL
    )";

    $conn->query($messagesTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }
?>