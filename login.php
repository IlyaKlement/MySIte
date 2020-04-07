<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="finishLogin.php">
    <title>Document</title>
</head>
<body>
    <div class="form_login">

<a href="index.php">Вернуться на главную</a>

<h1>Вход</h1>
<form class="form_Login" action="finishLogin.php" method="POST">
    <input id="elem" class="input_login" type="text" onchange="validateText(this)" name="email" placeholder="Email">
    <br>
    <input id="elem" class="input_login" type="password" onchange="validateText(this)" name="password" placeholder="Пароль">
    <br>
    <input id="sub" class="input_login_form" type="submit" disabled>
</form>

<div id="text-error"></div>

<p>Если вы ещё не зарегистрированны, перейдите по ссылке: <a href="registration.php">Зарегестрироваться</a></p>

</div>

<script>
    function validateText(element) {
        let errorBlock = document.getElementById('text-error');
        let button = document.getElementById('sub');
        if (element.value.length < 6) {
            element.className = 'error-border';
            errorBlock.innerHTML = 'Email и Пароль должны быть длиннее 6 симбволов!<br>Проверьте, пожайлуста ещё раз!';
            button.setAttribute('disabled', '');
        } else {
            errorBlock.innerHTML = '';
            element.className = 'success-border';
            button.removeAttribute('disabled');
        }
    }
</script>

</body>
</html>