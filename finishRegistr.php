<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="finishRegistr.css">
    <title>Document</title>
</head>
<body>
  
<?php
    include('config.php');
    $registrationSuccess = true;
    $registrationUserErrors = [];
    $mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'my_own_database');
    
    if ($mysqli->connect_errno) {
        $registrationSuccess = false;
        die("Ошибка подключения к базе данных: " . $mysqli->connect_errno . " " . $mysqli->connect_error);
    } else {
        $email = $_POST['email'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        
        if ($password !== $repassword) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Введёные пароли не совпадают!';
        }
        if (2 > strlen($email) || strlen($email) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Длина email должна быть от 2 до 32 симбволов';
        }
        if (6 > strlen($login) || strlen($login) > 32) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Длина логина должна быть от 6 до 32 симбволов';
        }
        if (6 > strlen($password) || strlen($password) > 20) {
            $registrationSuccess = false;
            $registrationUserErrors[] = 'Длина пароля должна быть от 6 до 20 симбволов';
        }
        $loginQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$loginSelect = $mysqli->query($loginQuery)) {
            $registrationSuccess = false;
            die('Ошибка запроса: '. $mysqli->error);
        } else {
            if ($loginSelect->num_rows) {
                $registrationSuccess = false;
                $registrationUserErrors[] = 'Введёный логин уже существует!';
            }
        }
        
        $hashPassword = hash('md5', $password);
        
        if ($registrationSuccess) {
            $query = "INSERT INTO `users` (`email`, `login`, `password`, `repassword`) VALUES ('$email','$login', '$hashPassword', '$repassword')";
            if (!$mysqli->query($query)) {
                die('Ошибка запроса: '. $mysqli->error);
            }
        } else {
            foreach ($registrationUserErrors as $error) {
?>
<div style="color: red;">
    <?php
        echo($error . '<br>');
    ?>
</div>
<?php
            }
            ?>
<a href="registration.php" class="turn_back">Вернуться</a>
<?php
        }

        if ($registrationSuccess) {
            ?>
<div class="text_finish_reg">
<h1>Вы успешно зарегестрировались!!!</h1><br><br>
<a href="index.php">Перейти на главную.</a></div>
<?php
        }
    }
    $mysqli->close();
?>

    
</body>
</html>