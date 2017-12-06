<?php
    require_once( "../php/controller/CartController.php" );
    require_once( "../php/controller/UserController.php" );
    require_once( "../php/model/User.php" );

    $cart_item_count = $cart_controller->get_cart_item_count();
?>
<div id="main-parent-layout"
     class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <!--    mdl-layout__header--transparent-->
    <header class="mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title"><?php echo $page_name; ?></span>
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link mdl-color-text--black" id="view-profile-btn" href="/profile">View
                                                                                                            Profile</a>
            </nav>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-badge"
                    id="overflow-menu-button" <?php echo $cart_item_count > 0
                ? "data-badge=\"$cart_item_count\"" : "" ?>>
                <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right"
                for="overflow-menu-button">
                <li class="mdl-menu__item">
                    <a href="/cart" class="mdl-badge" <?php echo $cart_item_count > 0
                        ? "data-badge=\"$cart_item_count\"" : "" ?>>View Cart</a>
                </li>
                <li class="mdl-menu__item">
                    <a href="/about">About VTA</a>
                </li>
                <li class="mdl-menu__item">
                    <a href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <header>
            <span class="mdl-layout-title"><?php echo $user->getFirstName() ?></span>
        </header>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="/parking">Reserve Parking</a>
            <a class="mdl-navigation__link" href="/cart">View Cart (<?php echo $cart_item_count > 0
                    ? $cart_item_count : "" ?>)</a>
        </nav>
    </div>