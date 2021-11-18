<?php 
  
$banner_url = sparch_options('sparch_search_banner_upload');

$banner_background_url = SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?> 
        <div class="container">
            <div class="breadcrumb_content text-center">
              
                <h1 class="page-title page_title">
                    <?php
                    /* translators: %s: search query. */
                    printf( esc_html__( 'Search Results for: %s', 'sparch' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                </h1>
               <?php   sparch_breadcrumbs();  ?>
            </div>
        </div>
</div>