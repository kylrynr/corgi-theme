<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php wp_title(); ?></title>

        <?php wp_head(); ?>

    </head>
    <body>

        <!-- Navbar Section -->
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php home_url( '/' ); echo esc_url( $url ); ?>"><?php bloginfo(); ?></a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <?php

                        $args = array(
                            'menu'          =>  'header-menu',
                            'menu_class'    =>  'nav navbar-nav navbar-right',
                            'container'     =>  false
                        );
                        wp_nav_menu( $args );

                    ?>

                </div>
            </div>
        </nav>