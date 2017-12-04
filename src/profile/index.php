<?php
    require_once( "../cart/cart.db.php" );

    if ( $_SESSION[ "user_id" ] == null ) {
        http_redirect( "../logout" );
    }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>VTA - Profile</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-orange.min.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="profile.js"></script>
        <link rel="stylesheet" href="../main.css" />
        <link rel="stylesheet" href="profile.css" />
    </head>
    <body id="profile">
        <div id="main-parent-layout"
             class="mdl-layout mdl-js-layout  mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <header class="mdl-layout__header mdl-layout__header--transparent">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title">Profile</span>
                    <div class="mdl-layout-spacer"></div>
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="">Edit Profile</a>
                    </nav>
                    <?php
                        $cart_item_count = get_cart_item_count_as_number();
                    ?>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-badge"
                            id="overflow-menu-button" <?php echo $cart_item_count > 0
                        ? "data-badge=\"$cart_item_count\"" : "" ?>>
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right"
                        for="overflow-menu-button">
                        <li class="mdl-menu__item">
                            <a href="../cart" class="mdl-badge" <?php echo $cart_item_count > 0
                                ? "data-badge=\"$cart_item_count\"" : "" ?>>View Cart</a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="../about">About VTA</a>
                        </li>
                        <li class="mdl-menu__item">
                            <a href="../logout">Logout</a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <header>
                    <span class="mdl-layout-title"><?php echo $_SESSION[ "user_first_name" ] ?></span>
                </header>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="">Find Flights</a>
                    <a class="mdl-navigation__link" href="">Cart</a>
                </nav>
            </div>
            <main class="mdl-layout__content">

            </main>
        </div>
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    </body>
</html>