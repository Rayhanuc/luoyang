<?php

/* 
Template Name: Homepage

 */

use HasinHayder\WPHelper\Modules\CustomPosts;
use HasinHayder\WPHelper\Modules\SinglePost;
use HasinHayder\WPHelper\Modules\Taxonomy;
use HasinHayder\WPHelper\WPHelper;

?>

 
<?php
the_post();
get_header();
?>

<!--page title start-->
<section class="section-gap">
    <div class="container">
        <div class="row justify-content-md-center align-items-center text-center">
            <div class="col-md-6">
                <!-- heading -->
                <h1 class="mb-5">
                    <?php
                    the_title();
                    ?>
                </h1>

                <!-- subheading -->
                <?php
                    the_content();
                ?>
                <!-- <p class="text-muted mb-4 font-size-20">
                    Creativity doesn't wait for that perfect moment. It fashions its own perfect moments out of ordinary ones.
                </p> -->
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<div class="component-section pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="text-center">
                    <?php
                    $lwhhl_terms = Taxonomy::get_all_terms('ptag',true,'name','desc',WPHELPER_TAXONOMY_ARRAY);
                    if (count($lwhhl_terms)>0) {
                    ?>
                    <ul class="portfolio-filter">
                        <li class="active"><a href="#" data-filter="*"> All</a></li>
                        <?php
                        foreach($lwhhl_terms as $lwhhl_term) {
                        ?>
                        <li>
                            <a href="#" data-filter=".<?php echo esc_attr($lwhhl_term['slug']) ; ?>">
                            <?php echo esc_html($lwhhl_term['name']) ; ?>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                    <?php } ?>
                </div>

                <div class="portfolio-grid portfolio-masonry portfolio-gallery grid-3 gutter">
                    <div class="portfolio-item cat1 cat3 cat5">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/1.jpg" class="portfolio-image popup-gallery" title="OnePlus Product">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/1.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>OnePlus Product</h6>
                                    <div class="portfolio-category">
                                        <span>Trusted</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat2 cat3 cat4">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/2.jpg" class="portfolio-image popup-gallery" title="Multipurpose Template">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/2.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Multipurpose Template</h6>
                                    <div class="portfolio-category">
                                        <span>For all categories</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat1 cat2 cat3">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/3.jpg" class="portfolio-image popup-gallery" title="Gulp Task">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/3.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Gulp Task</h6>
                                    <div class="portfolio-category">
                                        <span>JavaScript toolkit</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat1 cat4">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/4.jpg" class="portfolio-image popup-gallery" title="Sky is the limit">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/4.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Sky is the limit</h6>
                                    <div class="portfolio-category">
                                        <span>All web</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat3 cat5">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/5.jpg" class="portfolio-image popup-gallery" title="Huge Components">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/5.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Huge Components</h6>
                                    <div class="portfolio-category">
                                        <span>160 + components</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat4 cat5">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/6.jpg" class="portfolio-image popup-gallery" title="Full Responsive">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/6.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Full Responsive</h6>
                                    <div class="portfolio-category">
                                        <span>All Devices</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat2 cat3">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/19.jpg" class="portfolio-image popup-gallery" title="Clean Code">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/19.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Clean Code</h6>
                                    <div class="portfolio-category">
                                        <span>w3c validate</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item cat3 cat4 cat5">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/8.jpg" class="portfolio-image popup-gallery" title="Component Based">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/8.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>Component Based</h6>
                                    <div class="portfolio-category">
                                        <span>Block UI</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="portfolio-item cat1 cat2 cat3">
                        <a href="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/11.jpg" class="portfolio-image popup-gallery" title="UI Design">
                            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/portfolio/masonry/11.jpg" alt=""/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6>UI Design</h6>
                                    <div class="portfolio-category">
                                        <span>Multipurpose</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
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


<?php
get_footer();
?>
