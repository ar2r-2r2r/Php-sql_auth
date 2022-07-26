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
    <form action="signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            Нет аккаунта? ---> <a href="/registration.php">Регистрация</a>
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