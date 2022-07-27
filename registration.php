<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--  Авторизация -->
    <form action="/signup.php" method="post">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите своё полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите свою почту">
        <label>Рейтинг</label>
        <input type="rating" name="rating" placeholder="Введите ваш рейтинг">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Введите пароль">
        <button>Войти</button>
        <p>
            Уже есть аккаунт? ---> <a href="/authorisation.php">Страница входа</a>
        </p>
        <?php
                if($_SESSION['msg']){
                    echo '<p class="msg">'. $_SESSION['msg'] . '</p>';
                }
                unset($_SESSION['msg']);
        ?>    
    </form>

</body>
</html>