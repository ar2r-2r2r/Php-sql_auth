<!-- <?php
    session_start();
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Абитуриенты</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>   
    <!--  Профиль -->
    <table>
        <tr>
            <td>ФИО</td>
            <td>Логин</td>
            <td>Почта</td>
            <td>Рейтинг</td>
        </tr>

    <?php
    session_start();
    require_once 'connect.php';
    $sql="SELECT * FROM `users`";
    $result = mysqli_query($connect, $sql); 
    while ($row = mysqli_fetch_assoc($result)) {
        print("<tr><td>" . $row['full_name'] . "</td><td>" . $row['login'] ."</td><td>".$row['email']."</td><td>".$row['rating']."</td></tr>");
    }
    ?>
    </table>







    <form action="profile.php" target="_blank">
        
        <button id="profile">К своему профилю</button>
        
    </form>
</body>
</html>