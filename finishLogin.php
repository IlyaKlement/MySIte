<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

   


<?php
    if (isset($_POST['email']) && isset($_POST['password'])) {
        include('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];
        $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'my_own_database');
        $authQuery = "SELECT * FROM `users` WHERE `email` = '".$email."'";
        if (!$result = $mysqli->query($authQuery)) {
            die('Ошибка запроса: '. $mysqli->error);
        }
        if (!$result->num_rows) {
            echo('<p style="color: red;">Пользователи не найдены</p>');
        } else {
            $user = $result->fetch_assoc();
            if ($user['password'] !== md5($password)) {
                echo('<p style="color: red;">Неверный логин или пароль!</p>');
            } else {
                $_SESSION['user'] = $user;
                    echo("<h1>Добро пожаловать, " . $_SESSION['user']['email'] . "</h1>");
            }
        }
    }
?>

    <a href="index.php">Вернуться на главную</a>

    
</body>
</html>