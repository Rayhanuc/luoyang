
<!--footer start-->
<footer class="app-footer border-top-0 text-md-left text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-md-0 mb-4">
                <div class="lwhh_logo">
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
                <br>
                <p class="font-size-14"><span class="text-muted">© 2019-2020. All right reserved.</span></p>
            </div>
            <div class="col-md-5 mb-md-0 mb-4">
                <ul class="social-media-list two-col-link">
                    <li><a href="#">About</a></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                </ul>
            </div>
            <div class="col-md-1">
                <a href="#" class="go-up-link">
                    <i class="vl-arrow-up fa-2x"></i>
                </a>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->
<?php
$lwhhl_social_links = get_theme_mod('luoyang_socials',[]);

if(count($lwhhl_social_links)>0) {
?>
<!--supportive links start-->
<div class="floating-social-link">
    <span><?php echo esc_html(get_theme_mod('social_heading','Follow')); ?></span>
    <?php
    foreach($lwhhl_social_links as $lwhhl_sl){
    ?>
    <a target="_blank" href="<?php echo esc_url($lwhhl_sl['url']) ;?>">
        <?php echo esc_html($lwhhl_sl['label']) ;?>
    </a>
    .
    <?php
    }
    ?>
</div>
<!--supportive links end-->
<?php
}
?>
<!--basic scripts-->
<?php 
wp_footer();
?>

</body>
</html>
