<?php
if ( ! is_active_sidebar( 'shop_sidebar' ) ) {
    return;
}
?>
<div class="col-lg-12">
    <div class="blog_sidebar">
    <?php dynamic_sidebar( 'shop_sidebar' ) ?>
    </div>
</div>