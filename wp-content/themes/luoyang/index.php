
<?php
use HasinHayder\WPHelper\Modules\SinglePost;
get_header();
$luoyang_sidebar_active = get_theme_mod('luoyang_sidebar_display','on');
$luoyang_content_class = $luoyang_sidebar_active =='on'?'col-md-8':'col-md-12';
$luoyang_post_class = $luoyang_sidebar_active =='on'?'col-md-6':'col-md-4';
?>

<!--page title start-->
<section class="section-gap">
    <div class="container">
        <div class="row justify-content-md-start  ">
            <div class="col-md-8">
                <!-- heading -->
                <h1 class="mb-5">
                    <?php
                    bloginfo('name');
                    ?>
                </h1>

                <!-- subheading -->
                <p class="text-muted mb-4 font-size-20">
                <?php
                    bloginfo('description');
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!--blog start-->
<div class="component-section bg-gray">
    <div class="container">
       <div class="row">
           <div class="<?php echo esc_attr($luoyang_content_class);?>">
               <div class="row justify-content-center">
                   <?php
                   while(have_posts()){
                        the_post();
                   ?>
                   <div class="<?php echo esc_attr($luoyang_post_class);?>">
                       <div class="card border-0 mb-4">
                           <a href="<?php the_permalink();?>">
                               <?php
                               the_post_thumbnail('large');
                               ?>
                            </a>
                           <div class="card-body py-4">
                               <a href="<?php the_permalink();?>" class="mb-2 d-block"><?php echo esc_html(SinglePost::get_single_category(get_the_ID()));?></a>
                               <h6 class="mb-4"><a href="<?php the_permalink();?>"><?php the_title();?></a></h6>
                               <div class="mb-4">
                                   <?php
                                   echo apply_filters('the_content', get_the_excerpt());
                                   ?>
                               </div>
                               <a href="<?php the_permalink();?>" class="btn-read-more"><?php _e('Read More','lwhhl');?></a>
                           </div>
                       </div>
                   </div>
                   <?php
                   }
                   ?>
                   
               </div>
               <!--pagination-->
               <nav aria-label="navigation" class="mt-5 mb-md-3 mb-5">
                   <ul class="pagination justify-content-center">
                       <?php
                       lwhhl_paginate_links();
                       ?>
                       <!-- <li class="page-item disabled">
                           <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                       </li>
                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                       <li class="page-item">
                           <a class="page-link" href="#">Next</a>
                       </li> -->

                   </ul>
               </nav>
           </div>
           <?php
           if($luoyang_sidebar_active =='on'){
               get_sidebar();
           }
           ?>
       </div>
    </div>
</div>
<!--blog end-->

<?php
get_footer();
?>