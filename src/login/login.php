<?php
    session_start();

    $username = $_POST['user1'];
    $password = $_POST['password1'];

    $_SESSION[ "user_id" ] = "3";
    $_SESSION[ "username" ] = $username;
    $_SESSION[ "password" ] = $password;

?>
