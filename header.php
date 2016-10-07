<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- Style Sheets -->
        <!-- MOTION UI -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css" />-->
        <!-- Scripts -->
        <!-- Google Fonts -->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div class="row">
                <div class="columns medium-6 hide-for-small-only">
                    <div id="logo">
                        <?php _e( 'Course', 'courseplanner' ); ?>
                        <span><?php _e( 'Planner', 'courseplanner' ); ?></span>
                        <?php _e( 'WP', 'courseplanner' ); ?>
                    </div>
                </div>
                <div class="medium-6 columns">
                    <div class="title-bar hide-for-medium" data-responsive-toggle="main-menu" data-hide-for="medium">
                        <div id="logo">
                            <?php _e( 'Course', 'courseplanner' ); ?>
                            <span><?php _e( 'Planner', 'courseplanner' ); ?></span>
                            <?php _e( 'WP', 'courseplanner' ); ?>
                        </div>
                        <button class="menu-icon" type="button" data-toggle></button>
                    </div>
                    <nav id="main-menu" class="top-bar" data-topbar role="navigation">
                        <ul class="dropdown menu align-right vertical medium-horizontal" data-responsive-menu="" data-dropdown-menu>
                            <li>
                                <a href="#"><?php _e( 'how it works', 'courseplanner' ); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'FAQ', 'courseplanner' ); ?></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'CONTACT US', 'courseplanner' ); ?></a>
                            </li>
                            <!-- A dropdown in case we need it -->
                            <!-- <li class="is-dropdown-submenu-parent opens-right" data-pg-collapsed>
                                <a href="#" tabindex="0">dropdown</a>
                                <ul class="menu vertical submenu is-dropdown-submenu first-sub">
                                    <li class="is-submenu-item is-dropdown-submenu-item">
                                        <a href="#">One</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item">
                                        <a href="#">Two</a>
                                    </li>
                                    <li class="is-submenu-item is-dropdown-submenu-item">
                                        <a href="#">Three</a>
                                    </li>
                                </ul>
                            </li>-->
                            <!-- dropdown end -->
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <main>