<?php
    session_start();

    if ( isset( $_SESSION[ "user_id" ] ) ) {
        header( 'Location: profile' );
    } else {
        header( 'Location: logout' );
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Virtual Travel Agency</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
        <link rel="stylesheet" href="main.css" />
    </head>
    <body>

        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </body>
</html>