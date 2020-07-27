<?php

/* 
Template Name: Homepage

 */

use HasinHayder\WPHelper\Modules\CustomPosts;
use HasinHayder\WPHelper\Modules\SinglePost;
use HasinHayder\WPHelper\Modules\Taxonomy;
use HasinHayder\WPHelper\WPHelper;

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
                        foreach($lwhhl_terms as $lwhhl_term){
                        ?>
                            <li>
                                <a href="#" data-filter=".<?php echo esc_attr($lwhhl_term['slug']) ;?>">
                                    <?php echo esc_html($lwhhl_term['name']) ;?>
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
                        $lwhh_portfolio_image = get_the_post_thumbnail_url($lwhh_portfolio_post->ID,'luoyang-portfolio');
                        $lwhh_portfolio_tags = SinglePost::get_terms('ptag',$lwhh_portfolio_post->ID,0,WPHELPER_TAXONOMY_ARRAY);
                        $lwhh_portfolio_tags = join(' ',array_column($lwhh_portfolio_tags,'slug'));
                  ?>
                    <div class="portfolio-item <?php echo esc_attr($lwhh_portfolio_tags);?>">
                        <a href="<?php echo esc_url($lwhh_portfolio_image);?>" class="portfolio-image popup-gallery" title="OnePlus Product">
                            <img src="<?php echo esc_url($lwhh_portfolio_image);?>" alt="<?php echo get_the_title($lwhh_portfolio_post->ID);?>"/>
                            <div class="portfolio-hover-title">
                                <div class="portfolio-content">
                                    <h6><?php echo get_the_title($lwhh_portfolio_post->ID);?></h6>
                                    <div class="portfolio-category">
                                        <span><?php echo get_the_excerpt($lwhh_portfolio_post->ID);?></span>
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
<?php
$lwhhl_services = get_theme_mod('luoyang_services',[]);
if(count($lwhhl_services)){
?>
<!--services start-->
<div class="component-section bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <?php
            foreach($lwhhl_services as $lwhhl_service){
            ?>
            <div class="col-md-4">
                <div class="blurb text-center">
                    <i class="<?php echo esc_attr($lwhhl_service['icon']);?> text-muted"></i>
                    <h6 class="mb-3">
                    <?php echo esc_html($lwhhl_service['heading']);?>
                    </h6>
                    <?php echo apply_filters('the_content',$lwhhl_service['description']);?>
                </div>
            </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>
<!--services end-->

<?php
}
?>


<?php
get_footer();
?>
