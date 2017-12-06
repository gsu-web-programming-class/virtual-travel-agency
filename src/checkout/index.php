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
            $page_name = "Checkout";
            require( "../includes/head_template.php" );
        ?>

        <link rel="stylesheet" href="../material.css" />
        <script type="text/javascript" src="checkout.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="checkout.css" />
    </head>
    <body id="cart">
        <?php require( "../includes/main_layout_top.php" ) ?>
        <main class="mdl-layout__content mdl-grid mdl-color--grey-100">
            <div id="cart-card" class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell mdl-cell--6-col">
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
                <hr>
                <form action="#" class="mdl-grid">
                    <div class="mdl-cell mdl-cell--8-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input"
                               type="text"
                               pattern="[0-9]{4}(-[0-9]{4}){3}"
                               id="card_number">
                        <label class="mdl-textfield__label" for="card_number">Credit Card Number</label>
                        <span class="mdl-textfield__error">Please provide a valid card number</span>
                    </div>
                    <div class="mdl-cell mdl-cell--4-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[0-9]{4}" id="card_cvc">
                        <label class="mdl-textfield__label" for="card_cvc">CVC</label>
                        <span class="mdl-textfield__error">Please provide a CVC</span>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-z]+" id="card_name">
                        <label class="mdl-textfield__label" for="card_name">Name on card</label>
                        <span class="mdl-textfield__error">Please provide a Name</span>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-grid--no-spacing no-margin">
                        <div class="mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="[0-1]?[1-9]" id="card_exp_month">
                            <label class="mdl-textfield__label" for="card_exp_month">Exp. Month</label>
                            <span class="mdl-textfield__error">Please provide a Month</span>
                        </div>
                        <span class="mdl-cell mdl-cell--1-col"> / </span>
                        <div class="mdl-cell mdl-cell--5-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="20[1-3][0-9]" id="card_exp_year">
                            <label class="mdl-textfield__label" for="card_exp_year">Exp. Year</label>
                            <span class="mdl-textfield__error">Please provide a Year</span>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="mdl-card__actions">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"
                       href="/checkout">
                        <i class="material-icons">attach_money</i>
                        Submit Payment
                    </a>
                </div>
            </div>
        </main>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>