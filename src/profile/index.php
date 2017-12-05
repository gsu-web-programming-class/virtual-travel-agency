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
            <div class="mdl-card__title mdl-card--expand mdl-color--accent mdl-color-text--accent-contrast">
                <span class="mdl-card__title-text"><?php echo $user->getFirstName() . " " . $user->getLastName() ?></span>
            </div>
            <div class="mdl-card__media">

            </div>
            <div class="mdl-card__supporting-text">
                <?php
                    $user_address = $user->getAddress();
                    $user_email   = $user->getEmail();
                    $user_phone   = $user->getPhone();
                ?>
                <?php if ( ! empty( $user_address ) ) { ?>
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Address:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                <?php echo $user_address ?>
                            </span>
                        </span>
                    </div>
                <?php } ?>
                <?php if ( ! empty( $user_email ) ) { ?>
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Email:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                <?php echo $user_email ?>
                            </span>
                        </span>
                    </div>
                <?php } ?>
                <?php if ( ! empty( $user_phone ) ) { ?>
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Phone:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                <?php echo $user_phone ?>
                            </span>
                        </span>
                    </div>
                <?php } ?>
            </div>
            <div class="mdl-card__actions">
                <?php if ( ! empty( $user_email ) ) { ?>
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                       href="mailto:<?php echo $user_email ?>">
                        <i class="material-icons">email</i>
                        Email
                    </a>
                <?php } ?>
                <?php if ( ! empty( $user_phone ) ) { ?>
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                       href="tel:<?php echo $user_phone ?>">
                        <i class="material-icons">call</i>
                        Call
                    </a>
                <?php } ?>
            </div>
        </div>
        <div id="profile-content-parent">

        </div>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>