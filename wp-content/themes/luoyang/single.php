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
                        <a href="#" class="badge badge-pill badge-dark">food</a>
                        <a href="#" class="badge badge-pill badge-dark">kids food</a>
                        <a href="#" class="badge badge-pill badge-dark">bakery</a>
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
                <!--comments area start-->
                <div class="comments">
                    <h2 class="comments-title"> Comments</h2>
                    <ul>
                        <li class="comment ">
                            <article class="comment-body">
                                <footer class="comment-meta">
                                    <div class="comment-author">
                                        <img alt="" src="assets/img/team/t-1.jpg" class="">
                                        <b class="fn">
                                            <a href="#" rel="external nofollow" class="url">
                                                Chris Ames
                                            </a>
                                        </b>
                                        <span class="says">says:</span>
                                    </div>
                                    <!-- .comment-author -->

                                    <div class="comment-metadata">
                                        <a href="#">
                                            <time datetime="2018-09-02T12:17:07+00:00">
                                                September 2, 2018 at 12:17 pm
                                            </time>
                                        </a>
                                    </div><!-- .comment-metadata -->

                                </footer><!-- .comment-meta -->

                                <div class="comment-content">
                                    <p>Hi, this is a comment.<br>
                                        To get started with moderating, editing, and deleting comments, please visit
                                        the Comments screen in the dashboard.<br>
                                        Commenter avatars come from <a href="#">Gravatar</a>.</p>
                                </div><!-- .comment-content -->

                                <div class="reply">
                                    <a rel="nofollow" class="comment-reply-link" href="#" >Reply</a>
                                </div>
                            </article><!-- .comment-body -->
                            <ul class="children">
                                <li class="comment ">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author ">
                                                <img alt="" src="assets/img/team/t-2.jpg" class="" >
                                                <b class="fn">
                                                    <a href="#" rel="external nofollow" class="url">Jones Brown</a>
                                                </b>
                                                <span class="says">says:</span>
                                            </div><!-- .comment-author -->

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time datetime="2018-10-16T13:13:25+00:00">
                                                        October 16, 2018 at 1:13 pm
                                                    </time>
                                                </a>
                                            </div><!-- .comment-metadata -->

                                        </footer><!-- .comment-meta -->

                                        <div class="comment-content">
                                            <p>Hi, this is a comment.<br>
                                                To get started with moderating, editing, and deleting comments,
                                                please visit the Comments screen in the dashboard.<br>
                                                Commenter avatars</p>
                                        </div><!-- .comment-content -->

                                        <div class="reply">
                                            <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                                        </div>
                                    </article><!-- .comment-body -->
                                </li><!-- #comment-## -->
                            </ul><!-- .children -->
                        </li><!-- #comment-## -->
                    </ul>
                </div>
                <!--comments area end-->

                <!--comment form start-->
                <div class="comment-respond">
                    <h3 class="comment-reply-title mb-lg-5 mb-4">
                        Leave a Comment
                    </h3>
                    <form role="form" class="comment-form">
                        <div class="row">
                            <div class=" col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name*" required="">
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="form-group ">
                                    <input type="email" class="form-control" placeholder="Email*" required="">
                                </div>
                            </div>
                            <div class=" col-md-4">
                                <div class="form-group ">
                                    <input type="text" class="form-control" placeholder="Website" required="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="controls">
                                <textarea id="message" rows="5" placeholder="Comments*" class="form-control" required=""></textarea>
                            </div>
                        </div>
                        <p class="text-muted">Your email address will not be published. Required fields are marked *</p>
                        <div class="text-center mt-md-5">
                            <button type="submit" class="btn btn-theme">Send</button>
                        </div>
                    </form>
                </div>
                <!--comment form end-->
            </div>
        </div>
    </div>
</section>
<section class="section-gap bg-gray">
    <div class="container">
        <div class="row mb-lg-5 mb-4">
            <div class="col-md-8">
                <h5>Similar Posts</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <a href="#"><img class="card-img-top" src="assets/img/cards/3a.jpg" alt="card image"></a>
                    <div class="card-body py-4">
                        <a href="#" class="mb-2 d-block">Travel</a>
                        <h6 class="mb-4"><a href="#">Summer mountain hike</a></h6>
                        <div class="mb-4">
                            <p>Best suite for your small startup business
                                lorem ipsum dolor sit amet consiquest.</p>
                        </div>
                        <a href="#" class="btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <a href="#"><img class="card-img-top" src="assets/img/cards/3b.jpg" alt="card image"></a>
                    <div class="card-body py-4">
                        <a href="#" class="mb-2 d-block">Art</a>
                        <h6 class="mb-4"><a href="#">Street painting contest</a></h6>
                        <div class="mb-4">
                            <p>Best suite for your small startup business
                                lorem ipsum dolor sit amet consiquest.</p>
                        </div>
                        <a href="#" class="btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 mb-4">
                    <a href="#"><img class="card-img-top" src="assets/img/cards/3c.jpg" alt="card image"></a>
                    <div class="card-body py-4">
                        <a href="#" class="mb-2 d-block">Laboratory</a>
                        <h6 class="mb-4"><a href="#">Science lab workout</a></h6>
                        <div class="mb-4">
                            <p>Best suite for your small startup business
                                lorem ipsum dolor sit amet consiquest.</p>
                        </div>
                        <a href="#" class="btn-read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--blog end-->

<?php
get_footer();
?>
