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
    <!--  Профиль -->
    <form>
        <h1><?= $_SESSION['user']['full_name'] ?></h1>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
    </form>
</body>
</html>