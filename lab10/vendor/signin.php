<?php

    session_start();
    require_once "connect.php";
    $login = $_POST["login"];
    $pass = md5($_POST["pass"]);

    $checkUser = mysqli_query($connect, "SELECT * FROM customers WHERE login = '$login' AND pass = '$pass'");

    if(mysqli_num_rows($checkUser) > 0 ){
        $user = mysqli_fetch_assoc($checkUser);
        $_SESSION["user"] = [
            "id" => $user["cust_id"],
            "name" => $user["cust_name"],
            "email" => $user["cust_email"]
        ];
        header("location: ../14.php");
    }
    else{
        $_SESSION["message"] = "Неправильный логин или пароль";
         header("location: ../index.php");
    }
?>