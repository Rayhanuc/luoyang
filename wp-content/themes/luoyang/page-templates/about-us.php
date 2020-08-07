<?php

/* 
Template Name: About Us

 */
the_post();
get_header();

?>


<!--page title start-->
<section class="section-gap">
    <div class="container">
        <div class="row justify-content-md-start">
            <div class="col-md-8">
                <!-- heading -->
                <h1 class="mb-5">
                    <?php
                    the_title();
                    ?>
                </h1>

                <!-- subheading -->
                <!-- <p class="text-muted mb-4 font-size-20">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi fugiat labore libero molestias provident quae quaerat quis! Aspernatur at enim excepturi facere in non reiciendis soluta totam, voluptas voluptate!
                </p> -->

                <?php
                the_content();
                ?>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<div class="component-section pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php
                the_post_thumbnail('large');
                ?>
            </div>
        </div>
    </div>
</div>

<div class="section-gap pt-0">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-8 mb-lg-5 mb-4">
                <h6><?php echo esc_html(get_theme_mod('luoyang_sub_heading_1'))?></h6>
                <h2 class="mb-4"><?php echo esc_html(get_theme_mod('luoyang_sub_heading_2'))?></h2>
            </div>
            <div class="col-md-6">
                <h4><?php echo esc_html(get_theme_mod('luoyang_left_section_title'))?></h4>
                <?php echo apply_filters('the_content',get_theme_mod('luoyang_left_section_desc'));?>
                <?php
                if(get_theme_mod('luoyang_left_section_options')){
                    $lwhhl_options = explode("\n", get_theme_mod('luoyang_left_section_options'));
                ?>
                <ul class="list-unstyled text-muted">
                    <?php
                    foreach($lwhhl_options as $lwhhl_option){
                    ?>
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>
                    <?php echo esc_html($lwhhl_option);?>
                    </li>
                    <?php
                    }
                    ?>
                </ul>

                <?php } ?>


            </div>
            <div class="col-md-6">
            <h4><?php echo esc_html(get_theme_mod('luoyang_right_section_title'))?></h4>
                <?php echo apply_filters('the_content',get_theme_mod('luoyang_right_section_desc'));?>
                <?php
                if(get_theme_mod('luoyang_right_section_options')){
                    $lwhhl_options = explode("\n", get_theme_mod('luoyang_right_section_options'));
                ?>
                <ul class="list-unstyled text-muted">
                    <?php
                    foreach($lwhhl_options as $lwhhl_option){
                    ?>
                    <li><i class="vl-minus font-size-12 pr-3 pb-0"></i>
                    <?php echo esc_html($lwhhl_option);?>
                    </li>
                    <?php
                    }
                    ?>
                </ul>

                <?php } ?>
            </div>
        </div>
    </div>
</div>

<!--services start-->
<div class="component-section bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="blurb text-center">
                    <i class="vl-code text-muted"></i>
                    <h6 class="mb-3">Idea Generator</h6>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blurb text-center">
                    <i class="vl-device1 text-muted"></i>
                    <h6 class="mb-3">Responsive Layouts</h6>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="blurb text-center">
                    <i class="vl-finger-print text-muted"></i>
                    <h6 class="mb-3">Secure Code</h6>
                    <p>Lorem ipsum dolor sit amet, consect adipiscing elit, sed do eiusmod</p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--services end-->

<!--team start-->
<div class="section-gap border-bottom">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 mb-lg-5 mb-4">
                <h6><?php echo esc_html(get_theme_mod('luoyang_team_section_subheading'));?></h6>
                <h2 class="mb-4"><?php echo esc_html(get_theme_mod('luoyang_team_section_heading'));?> </h2>
            </div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme dot-style-2 nav-circle" data-items="[4,2]" data-margin="20" data-nav="true" data-dots="true">
                    <div class="item">
                        <div class="team-hover card border-0">
                            <img class="card-img rounded" src="assets/img/team/t-1.jpg" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Arnold Niditsch	</h6>
                                    <p>Chief Executive Officer</p>
                                </div>
                                <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-hover card border-0">
                            <img class="card-img rounded" src="assets/img/team/t-2.jpg" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Sharron Berry</h6>
                                    <p>Project Manager</p>
                                </div>
                                <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-hover card border-0">
                            <img class="card-img rounded" src="assets/img/team/t-3.jpg" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Thomas Johnson</h6>
                                    <p>HR Manager</p>
                                </div>
                                <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-hover card border-0">
                            <img class="card-img rounded" src="assets/img/team/t-4.jpg" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Juliana Lane</h6>
                                    <p>Lead Designer</p>
                                </div>
                                <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="team-hover card border-0">
                            <img class="card-img rounded" src="assets/img/team/t-2.jpg" alt="" />
                            <div class="team-info">
                                <div class="team-title">
                                    <h6>Jhone Doe</h6>
                                    <p>Business Developer</p>
                                </div>
                                <div class="team-social-links">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-dribbble"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!--team end-->




<?php
get_footer();
?>