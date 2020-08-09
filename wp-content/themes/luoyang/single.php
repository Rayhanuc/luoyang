<?php
the_post();
get_header();
?>


<!--page title start-->
<section class="section-gap pt-5 pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php
                the_post_thumbnail('large',['class'=>'rounded img-fluid']);
                ?>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--blog start-->
<section class="section-gap pt-5 pb-0">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8">

                <div class="post-header">
                    <div class="post-meta">
                        <ul class="cat">
                            <?php
                            lwhhl_display_categories();
                            ?>
                        </ul>
                        <div class="separation"> / </div>
                        <div class="post-date"><a href="<?php the_permalink();?>"><?php the_date('dS M, Y');?></a></div>
                    </div>
                    <h2><?php the_title();?></h2>
                    <div class="post-meta">
                        <div class="post-author"><?php _e('By','lwhhl');?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a></div>
                    </div>
                </div>

                <div class="blog-post border-0 blog-single">
                    <?php
                    the_content();
                    ?>
                    <div class="mb-0">
                        <h6 class="d-inline-block">Tags:</h6>
                        <?php
                            lwhhl_display_tags();
                        
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
<section class="section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <?php
                comments_template();
                ?>
            </div>
        </div>
    </div>
</section>
<?php
$lwhhl_similar_posts = [];
for($i=1;$i<=3;$i++){
    $lwhhl_spost = get_post_meta(get_the_ID(),"wphelper_spost{$i}",true);
    if($lwhhl_spost>0){
        $lwhhl_similar_posts[] = $lwhhl_spost;
    }
}
if(count($lwhhl_similar_posts)>0){
?>
<section class="section-gap bg-gray">
    <div class="container">
        <div class="row mb-lg-5 mb-4">
            <div class="col-md-8">
                <h5>Similar Posts</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach($lwhhl_similar_posts as $lwhhl_spost){
                $lwhhl_spost_image = get_the_post_thumbnail_url($lwhhl_spost,'luoyang-portfolio');
            ?>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <a href="<?php echo get_the_permalink($lwhhl_spost);?>"><img class="card-img-top" src="<?php echo esc_url($lwhhl_spost_image);?>"></a>
                    <div class="card-body py-4">
                        <!-- <a href="#" class="mb-2 d-block">Travel</a> -->
                        <h6 class="mb-4"><a href="<?php echo get_the_permalink($lwhhl_spost);?>"><?php echo get_the_title($lwhhl_spost);?></a></h6>
                        <div class="mb-4">
                            <?php
                            echo apply_filters('the_content',get_the_excerpt($lwhhl_spost));
                            ?>
                        </div>
                        <a href="<?php echo get_the_permalink($lwhhl_spost);?>" class="btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<!--blog end-->

<?php
}
?>

<?php
get_footer();
