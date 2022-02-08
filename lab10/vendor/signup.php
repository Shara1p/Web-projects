<?php
    session_start();
    require_once "connect.php";
    

    $full_name = $_POST["full_name"];
    $login = $_POST["login"];
    $mail = $_POST["mail"];
    $pass = md5($_POST["pass"]);
    $pass_confirm = md5($_POST["pass_confirm"]);

    if($pass === $pass_confirm){
        mysqli_query($connect, "INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `pass`, `login`)
         VALUES (NULL, '$full_name', '$mail', '$pass', '$login') ");
         $_SESSION["message"] = "Регистрация успешна!";
         header("location: ../index.php");
    }
    else{
        $_SESSION["message"] = "Пароли не совпадают";
        header("location: ../reg.php");
    }

?>