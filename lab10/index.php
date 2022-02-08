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

    <form action="vendor/signin.php" method ="post" >
        <input type="text" name = "login" placeholder="Введите логин">
        <input type="password" name = "pass" placeholder="Введите пароль">
        <input type="submit" value = "Войти">
        <p>
            У вас нет аккаунта? - <a href="reg.php">зарегистрируйтесь!</a>
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