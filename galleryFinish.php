<?php
    $conn = new mysqli('127.0.0.1:3306', 'root', '', 'my_datebase');
    if ($con->$connect_errno) {
        echo $conn->connect_error;
        exit;
    }
?>