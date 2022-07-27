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
    <form action="info.php" target="_blank">
        <h2><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <button id="abitur">Список всех зарегистрированных абитуриентов</button>
        
    </form>
</body>
</html>