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
            $page_name = "About";
            require( "../includes/head_template.php" );
        ?>

        <link rel="stylesheet" href="../material.css" />
        <!--        <script type="text/javascript" src="cart.js"></script>-->
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="about.css" />
    </head>
    <body id="about">
        <?php require( "../includes/main_layout_top.php" ) ?>
        <main class="mdl-layout__content mdl-grid mdl-color--grey-100">
            <div id="main-about-parent" class="mdl-cell">
                <h4>Software designed by</h4>
                <ul class="demo-list-two mdl-list">
                    <li class="mdl-list__item mdl-list__item--two-line">
                        <span class="mdl-list__item-primary-content">
                          <i class="material-icons mdl-list__item-avatar">person</i>
                          <span>Hamel Patel</span>
                          <span class="mdl-list__item-sub-title">Software Developer</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                          <span class="mdl-list__item-secondary-info"></span>
                          <a class="mdl-list__item-secondary-action" href="#"></a>
                        </span>
                    </li>
                    <li class="mdl-list__item mdl-list__item--two-line">
                        <span class="mdl-list__item-primary-content">
                          <i class="material-icons mdl-list__item-avatar">person</i>
                          <span>Jo Ibarra</span>
                          <span class="mdl-list__item-sub-title">Software Developer</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                          <a class="mdl-list__item-secondary-action" href="#"></a>
                        </span>
                    </li>
                    <li class="mdl-list__item mdl-list__item--two-line">
                    <span class="mdl-list__item-primary-content">
                      <i class="material-icons mdl-list__item-avatar">person</i>
                      <span>Joshua King</span>
                      <span class="mdl-list__item-sub-title">Software Developer</span>
                    </span>
                        <span class="mdl-list__item-secondary-content">
                      <a class="mdl-list__item-secondary-action" href="#"></a>
                    </span>
                    </li>
                </ul>
                <p>&copy; Web Programming Back Row, LLC</p>
            </div>
        </main>
        <?php require( "../includes/main_layout_bottom.php" ) ?>
    </body>
</html>