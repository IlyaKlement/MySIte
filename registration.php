<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="registration.css">
    <title>Document</title>
</head>

<body>

<div class="form_registration">
    <h1>Регистрация</h1>
    <form class="form_Registr" action="finishRegistr.php" method="POST">
        <input id="element" class="input_registr" type="text" onchange="validateText(this)" name="email" placeholder="email"><br>
        <input id="element" class="input_registr" type="text" onchange="validateText(this)" name="login" placeholder="login"><br>
        <input id="element" class="input_registr" type="password" onchange="validateText(this)" name="password" placeholder="password"><br>
        <input id="element" class="input_registr" type="password" onchange="validateText(this)" name="repassword" placeholder="repassword"><br>
        <input id="sub" class="input_registr_1" type="submit" disabled><br>
    </form>
    <br><br><br>
    <a href="index.php">На главную</a>

    <div id="text-error"></div>

</div>

<script>
    function validateText(element) {
        let errorBlock1 = document.getElementById('text-error');
        let errorBlock2 = document.getElementById('input_registr');
        let button = document.getElementById('sub');
        if (element.value.length < 6) {
            element.className = 'error-border';
            errorBlock1.innerHTML = 'Пожалуйста, проверьте ведённые данные еще раз!';
            button.setAttribute('disabled', '');
        } else {
            errorBlock1.innerHTML = '';
            element.className = 'success-border';
            button.removeAttribute('disabled');
        }
        if (element.value.length < 6) {
            element.className = 'error-border';
            errorBlock2.innerHTML = 'Пожалуйста, проверьте ведённые данные еще раз!!';
            button.setAttribute('disabled', '');
        } else {
            errorBlock2.innerHTML = '';
            element.className = 'success-border';
            button.removeAttribute('disabled');
        }
        while (element.className.lenght <6) {
            button.setAttribute('disabled');
        }
    }
</script>
</body>

</html>
