<?php
    $conn = new mysqli('127.0.0.1:3306', 'root', '', 'new_datebase');
    if ($con->$connect_errno) {
        echo $conn->$connect_error;
        exit;
    }
    $usersTable = "CREATE TABLE IF NOT EXISTS users(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        name VARCHAR(225) NOT NULL,
        email VARCHAR(225) UNIQUE NOT NULL,
        password VARCHAR(225) NOT NULL
    );";

    $conn->query($usersTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }

    $messagesTable = "CREATE TABLE IF NOT EXISTS messages(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        sender_id INT NOT NULL,
        reciever_id INT NOT NULL,
        message TEXT NOT NULL,
        sent_id TIMESTAMP NOT NULL,
        FOREIGN KEY (sender_id) REFERENCES users(id),
        FOREIGN KEY (reciever_id) REFERENCES users(id)
        )";

    $conn->query($messagesTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    }    

    $authorTable = "CREATE TABLE IF NOT EXISTS author(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        author_id INT NOT NULL,
        name INT NOT NULL
    )";

    $conn->query($authorTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    } 

    $booksTable = "CREATE TABLE IF NOT EXISTS books(
        id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
        book_id INT NOT NULL,
        book_name TEXT NOT NULL
    )";

    $conn->query($booksTable);

    if ($conn->errno) {
        echo $conn->error;
        exit;
    } 

    echo "migration success!";
    $conn->close();

?>