<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <form action="vendor/signup.php" method ="post"  >
        <input type="text" name = "full_name" placeholder="Имя">
        <input type="text" name = "login" placeholder="Логин">
        <input type="email" name = "mail" placeholder="Почта">
        <input type="password" name="pass" placeholder="Введите пароль">
        <input type="password" name ="pass_confirm" placeholder="Подтвердите пароль">
        <input type="submit" value = "Зарегистрироваться!">
        <p>
            У вас уже есть аккаунт? - <a href="index.php">войдите!</a>
        </p>
            <?php
                if(isset($_SESSION["message"])){
                    echo '<p class = "msg">'.$_SESSION["message"].'</p>';
                }               
                unset($_SESSION["message"]);
            ?>
    </form>
    
</body>
</html>