<?php
    session_start();
    require_once 'connect.php';

    $login=$_POST['login'];
    $password=$_POST['password'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if(mysqli_num_rows($check_user)>0){

        $user=mysqli_fetch_assoc($check_user);
 
        $_SESSION['user']=[
            "id"=>$user['id'],
            "full_name" => $user['full_name'],
            "email" => $user['email']
        ];
        header('Location: profile.php');
    } else{
        $_SESSION['msg']='Не верный логин или пароль';
        header('Location: /authorisation.php');
    }

?>
<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
