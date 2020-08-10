<?php
if(!is_active_sidebar('blog-sidebar')){
    return;
}
?>

<div class="col-md-4">
    <?php
        dynamic_sidebar('blog-sidebar');
    ?>
</div>