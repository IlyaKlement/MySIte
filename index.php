<?php session_start();
$mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'my_own_database');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Supermercado+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="carousel_slide.php">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Site</title>
</head>

<body>
    <header>
       <?php
            echo ($_SESSION['user']['email']);
        ?>
        <div class="registr_content">
            <a class="form_registr" href="login.php">Вход/Регистрация</a>
            <?php
                $query = "SELECT * FROM 'users' WHERE `login` = '{$_SESSION['user']['login']}'";
                if ($mysqli->query($query)) echo "sadsad";
                /*$check_row = mysqli_fetch_assoc($check);
                if ($check_row !=0) {
                    $user = $check_row['login'];
                }*/
                print_r($check);
                
            ?>
        </div>
        <div id="header_content">
            <p>This's site by <br> Klementev Ilya</p>
            <a href="#article"><img src="arrow.png" alt="down" height="70px" width="70px"></a>
        </div>

    </header>
    
    <div class="container">
        <div class="article" id="article">
            <div class="line2"></div>

            <h2>This's my personal site <br>Any info you can find below</h2>
        </div>
        <div class="line2"></div>
        <div class="menu">
            <a href="index.php">Главная</a>
            <a href="AboutMe.php">О себе</a>
            <a href="Blog.php">Блог</a>
            <a href="Gallery.php">Галерея</a>
            <a href="Game.php">Игра</a>
        </div>
        
    </div>    

    

<script type="text/javascript">
    $(document).ready(function() {
        $("#header_content").on("click", "a", function(event) {
            event.preventDefault();
            var id = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({
                scrollTop: top
            }, 1200);
        });
    });

</script>
</body>
</html>
<?php
    if($_SESSION['user'] = $user){
        echo($_SESSION['user']['login'] . "</h1>");
}
?>