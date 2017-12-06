<?php
    session_start();

    require_once( "../php/controller/UserController.php" );
    require_once( "../php/model/User.php" );

    $user_id = (int) $_SESSION[ "user_id" ];
    if ( ! isset( $user_id ) ) {
        header( 'Location: ../logout' );
        exit();
    }
    $user = $user_controller->find_by_id( $user_id );
    if ( ! isset( $user ) ) {
        header( 'Location: ../logout' );
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $page_name = "Flights";
            require( "../includes/head_template.php" );
        ?>

        <link rel="stylesheet" href="../material.css" />
        <script type="text/javascript" src="flights.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="flights.css" />
    </head>
    <body id="flights">
        <?php require( "../includes/main_layout_top.php" ) ?>
        <main class="mdl-layout__content mdl-grid mdl-color--grey-100">
            <h1>Under Construction</h1>
        </main>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>