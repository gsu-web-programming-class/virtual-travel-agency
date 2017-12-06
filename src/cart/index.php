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
            $page_name = "Cart";
            require( "../includes/head_template.php" );
        ?>

        <link rel="stylesheet" href="../material.css" />
        <script type="text/javascript" src="cart.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="cart.css" />
    </head>
    <body id="cart">
        <?php require( "../includes/main_layout_top.php" ) ?>
        <main class="mdl-layout__content mdl-grid mdl-color--grey-100">
            <div id="cart-card" class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell mdl-cell--3-col">
                <div class="mdl-card__title mdl-card--expand mdl-color--accent mdl-color-text--accent-contrast">
                    <span class="mdl-card__title-text">
                        <i class="material-icons">flight</i>
                        ATL &rarr; CLO
                    </span>
                </div>
                <div class="mdl-card__media">

                </div>
                <div class="mdl-card__supporting-text">
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Cost:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                $284
                            </span>
                        </span>
                    </div>
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Departure:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                09:54
                            </span>
                        </span>
                    </div>
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Arrival:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                13:02
                            </span>
                        </span>
                    </div>
                    <div class="row-with-chip">
                        <span class="row-with-chip__title">Flight No.:</span>
                        <span class="mdl-chip">
                            <span class="mdl-chip__text">
                                AA 934
                            </span>
                        </span>
                    </div>
                </div>
                <div class="mdl-card__actions">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                       href="/parking">
                        <i class="material-icons">local_parking</i>
                        Reserve Parking
                    </a>
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                       href="/checkout">
                        <i class="material-icons">attach_money</i>
                        Checkout
                    </a>
                </div>
            </div>
        </main>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>