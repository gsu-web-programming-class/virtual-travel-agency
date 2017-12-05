<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            $page_name = "Profile";
            require( "../includes/head_template.php" );
        ?>

        <link rel="stylesheet" href="../material.css" />
        <script type="text/javascript" src="profile.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="profile.css" />
    </head>
    <body id="profile">
        <?php require( "../includes/main_layout_top.php" ) ?>
        <div id="profile-pre-content-padding" class="mdl-color--grey-100"></div>
        <div id="profile-card" class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell mdl-cell--10-col">
            <div class="mdl-card__title mdl-color--accent mdl-color-text--accent-contrast">
                <span class="mdl-card__title-text"><?php echo $user->getFirstName() . " " . $user->getLastName() ?></span>
            </div>
            <div class="mdl-card__media">

            </div>
            <div class="mdl-card__supporting-text">

            </div>
            <div class="mdl-card__actions">

            </div>
        </div>
        <div id="profile-content-parent">

        </div>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>