<?php
    session_start();
    require_once 'connect.php';
    
    
    $full_name= $_POST['full_name'];
    $login= $_POST['login'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $password_confirm= $_POST['password_confirm'];
    $rating=$_POST['rating'];

    if($password == $password_confirm){
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `rating`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$rating')");
        $_SESSION['msg']='Регистрация прошла успешно';
        header('Location: /authorisation.php');
    }
    else{
        $_SESSION['msg']='Пароли не совпадают';
        header('Location: /registration.php');
    }



  
  
?>
