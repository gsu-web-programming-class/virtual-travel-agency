<?php

    // require_once( "php/model/User.php" );
    require_once( "php/DAL.php" );
    require_once( "php/controller/UserController.php" );

    $dal = new DAL();
    $dal->drop_table( "User" );

    $user_controller->create_table();

    $new_user = new User( "Jo", "Ibarra", "jibarra12345", "1234", "jibarra12345@student.gsu.edu" );
    $user_controller->save( $new_user );

    $new_user = new User( "Hamel", "Patel", "hpatel12345", "1234", "hpatel12345@student.gsu.edu" );
    $user_controller->save( $new_user );

    $new_user = new User( "Josh",
                          "King",
                          "jking82",
                          "1234",
                          "jking82@student.gsu.edu",
                          "678.435.2887",
                          "6330 Lake Oak Landing, Cumming, GA" );
    $user_controller->save( $new_user );
