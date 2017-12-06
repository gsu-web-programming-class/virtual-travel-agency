<?php
    session_start();

    require_once( realpath( dirname( __FILE__ ) ) . "/../php/DAL.php" );

    // print_r( $_POST );

    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    $dal      = new DAL();
    $user_id  = $dal->query( "SELECT id FROM User WHERE username='$username' and  `password`='$password'" );

    $_SESSION[ "user_id" ] = (int) $user_id[ 0 ]->id;
    //$_SESSION[ "username" ] = $username;
    //$_SESSION[ "password" ] = $password;

    // Redirecting is already handled on the client.
    header( "Location: /" );
    