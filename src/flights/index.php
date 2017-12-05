<?php
    session_start();
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
    <body id="profile">
        <?php require( "../includes/main_layout_top.php" ) ?>
        
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>