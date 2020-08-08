
<?php
use HasinHayder\WPHelper\Modules\SinglePost;
get_header();
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
           <div class="col-md-8">
               <div class="row justify-content-center">
                   <?php
                   while(have_posts()){
                        the_post();
                   ?>
                   <div class="col-md-6">
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
           <div class="col-md-4">
               <div class="blog-widget mb-4">
                   <form>
                       <div class="form-group">
                           <div class="icon-field">
                               <i class="vl-search"></i>
                               <input type="text" class="form-control" placeholder="Search">
                           </div>
                       </div>
                   </form>
               </div>
               <div class="blog-widget mb-4">
                   <h6 class="mb-4">Categories</h6>
                   <div class="list-group list-group-right-arrow">
                       <a href="#" class="list-group-item">Art (20)</a>
                       <a href="#" class="list-group-item">Food (32)</a>
                       <a href="#" class="list-group-item">Lifestyle (17)</a>
                       <a href="#" class="list-group-item">Travel (02)</a>
                   </div>
               </div>
               <div class="blog-widget mb-4">
                   <div class="card border-0 mb-md-0 mb-3">
                       <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/blog/blog-author.jpg" alt="card image" />
                       <div class="card-body py-4">
                           <h6 class="mb-2">Conal Cathelin</h6>
                           <div>
                               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, voluptate. Lorem ipsum dolor sit amet, adipisicing elit.</p>
                               <div class="p-0 social-links mb-0 mt-4">
                                   <a href="#"><i class="fab fa-facebook-f"></i></a>
                                   <a href="#"><i class="fab fa-twitter"></i></a>
                                   <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                   <a href="#"><i class="fab fa-dribbble"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="blog-widget mb-4">
                   <h6 class="mb-4">Latest Post</h6>
                   <div class="card border-0 mb-1">
                       <div class="card-body row align-items-center">
                           <div class="col-4">
                               <a href="#"><img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/blog/bt-1.jpg" alt=""></a>
                           </div>
                           <div class="col-8">
                               <h6 class="my-2 font-size-14"><a href="#">Thoughtful living in los Angeles</a></h6>
                               <span class="font-size-14 text-muted">03 Mar 2020</span>
                           </div>
                       </div>
                   </div>
                   <div class="card border-0 mb-1">
                       <div class="card-body row align-items-center">
                           <div class="col-4">
                               <a href="#"><img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/blog/bt-2.jpg" alt=""></a>
                           </div>
                           <div class="col-8">
                               <h6 class="my-2 font-size-14"><a href="#">Plan your next trip with Clab team</a></h6>
                               <span class="font-size-14 text-muted">03 Mar 2020</span>
                           </div>
                       </div>
                   </div>
                   <div class="card border-0 mb-1">
                       <div class="card-body row align-items-center">
                           <div class="col-4">
                               <a href="#"><img class="card-img" src="<?php echo get_stylesheet_directory_uri();?>/assets/img/blog/bt-3.jpg" alt=""></a>
                           </div>
                           <div class="col-8">
                               <h6 class="my-2 font-size-14"><a href="#">Explore the Beauty of North Amazon</a></h6>
                               <span class="font-size-14 text-muted">03 Mar 2020</span>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="blog-widget mb-4">
                   <div class="card card-body border-0">
                       <h6 class="mb-2">Subscribe</h6>
                       <p class="text-muted font-size-14">Sign Up and receive our newsletter</p>
                       <form>
                           <div class="form-group mb-0 mt-3">
                               <div class="icon-field-right">
                                   <i class="fa fa-paper-plane text-muted"></i>
                                   <input type="email" class="form-control" placeholder="Enter your email address">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>
<!--blog end-->

<?php
get_footer();
?>