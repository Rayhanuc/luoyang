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

                <?php
                CustomPosts::set_post_type('portfolio');
                $lwhh_portfolio_posts = CustomPosts::get_latest_posts(10);
                if(count($lwhh_portfolio_posts)>0){
                ?>

                <div class="portfolio-grid portfolio-masonry portfolio-gallery grid-3 gutter">
                    <?php
                    foreach($lwhh_portfolio_posts as $lwhh_portfolio_post){
                        $lwhh_portfolio_image = get_the_post_thumbnail_url($lwhh_portfolio_post->ID, 'luoyang-portfolio');
                        $lwhh_portfolio_tags = SinglePost::get_terms('ptag',$lwhh_portfolio_post->ID,0,WPHELPER_TAXONOMY_ARRAY);
                        $lwhh_portfolio_tags = join(' ',array_column($lwhh_portfolio_tags,'slug'));
                        // WPHelper::dump($lwhh_portfolio_tags);

                    ?>
                    <div class="portfolio-item <?php echo esc_attr($lwhh_portfolio_tags);?>">
                        <a href="<?php echo esc_url($lwhh_portfolio_image);?>" class="portfolio-image popup-gallery" title="OnePlus Product">
                            <img src="<?php echo esc_url($lwhh_portfolio_image);?>" alt="<?php echo get_the_title($lwhh_portfolio_post->ID);?>"/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6><?php echo get_the_title($lwhh_portfolio_post->ID);?></h6>
                                    <div class="portfolio-category">
                                        <span>T<?php echo get_the_excerpt($lwhh_portfolio_post->ID);?></span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <?php } ?>

                </div>
                <?php 
                }
                ?>
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
