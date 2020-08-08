<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    wp_head();
    ?>

</head>

<body <?php body_class();?>>
<!--header start-->
<header class="mt-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <!--brand start-->
                <div class="navbar-brand float-left lwhh_logo">
                    <?php
                    the_custom_logo();
                    if(!has_custom_logo()) {
                    ?>
                    <a class="" href="<?php echo home_url();?>">
                        <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo.png" srcset="<?php echo get_stylesheet_directory_uri();?>/assets/img/logo@2x.png 2x" alt="OnePlus">
                    </a>
                    <?php
                    }
                    ?>
                </div>
                <!--brand end-->
                <!--overlay menu start-->
                <div class="overlay-nav">
                    <div class="toggle-wrap" id="nav_toggle"> <span class="top"></span> <span class="middle"></span> <span class="bottom"></span> </div>
                    <div class="overlay" id="nav_overlay">
                        <nav>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'primary'
                            ])
                            ?>
                            <div class="overlay-nav-social-link">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-dribbble"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
                <!--overlay menu end-->
            </div>
        </div>
    </div>
</header>
<!--header end-->