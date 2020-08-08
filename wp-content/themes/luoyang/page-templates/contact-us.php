<?php
/* 
Template Name: Contact Us

 */
the_post();
get_header();
if(isset($_POST['submit'])){
    if(wp_verify_nonce($_POST['lwhh-contact-nonce'],'lwhh-contact')){
        $lwhh_sender_name = sanitize_text_field($_POST['contact_name']);
        $lwhh_sender_email = sanitize_text_field($_POST['contact_email']);
        $lwhh_sender_message = sanitize_text_field($_POST['contact_message']);
        $lwhh_subject = sanitize_text_field($_POST['contact_subject']);
        $_lwhh_message = sprintf("Sender Name: %s\nSender Email: %s\n%s",$lwhh_sender_name,$lwhh_sender_email,$lwhh_sender_message);
        wp_mail(get_option('admin_email'),'Luoyang -'.$lwhh_subject,$_lwhh_message);
        wp_redirect(get_the_permalink());
    }
}
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
            <div class="col-md-6">
                <form action="<?php echo esc_url(get_the_permalink()); ?>" class="mb-5 mb-md-0">
                    <?php
                    wp_nonce_field('lwhh-contact','lwhh-contact-nonce');
                    ?>
                    <div class="form-group">
                        <input id="contact_name" name="contact_name" type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input id="contact_email" name="contact_email" type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input  id="contact_subject" name="contact_subject" type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea  id="contact_message" name="contact_message" class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <button name="submit" type="submit" class="btn btn-pill btn-theme">Submit</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-6">
                        <div class="blurb blurb-border mb-4 p-md-5">
                            <i class="<?php echo esc_attr(get_theme_mod('luoyang_cleft_section_icon'));?> text-muted"></i>
                            <h6 class="mb-3"><?php echo esc_html(get_theme_mod('luoyang_cleft_section_title'));?></h6>
                            <?php echo apply_filters('the_content',get_theme_mod('luoyang_cleft_section_desc'));?>
                        </div>
                    </div>
                    <div class="col-6">
                    <div class="blurb blurb-border mb-4 p-md-5">
                            <i class="<?php echo esc_attr(get_theme_mod('luoyang_cright_section_icon'));?> text-muted"></i>
                            <h6 class="mb-3"><?php echo esc_html(get_theme_mod('luoyang_cright_section_title'));?></h6>
                            <?php echo apply_filters('the_content',get_theme_mod('luoyang_cright_section_desc'));?>
                        </div>
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
get_footer()
?>