<?php 
 /**
  * Display page banner 
  */
$show_banner = sparch_options('sparch_single_blog_banner_toggle', 'show');
$show_banner_in_page = sparch_page_meta('is_banner', get_the_ID(), 1);

$banner_url = sparch_options('sparch_single_blog_banner_upload');
$banner_url_page= sparch_page_meta('banner_background_image', get_the_ID());  

$how_title = sparch_options('sparch_single_blog_banner_title', 'show');
$show_breadcrumbs = sparch_options('sparch_single_blog_banner_breadcrumb', 'show');

$banner_background_url = SPARCH_IMAGES.'/blog/banner/blog_details_img.jpg';

if($banner_url_page && $banner_url_page != ''){
    $banner_background_url = $banner_url_page;
}elseif($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}
if(!class_exists('Redux')){
    $banner_background_url = '';
  }
if($show_banner == 'show') :
 if($show_banner_in_page):
?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
<?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>        
        <div class="container">
            <div class="breadcrumb_content text-center">
               <?php if($how_title == 'show') : ?>
                <h1 class="page-title page_title"><?php single_post_title(); ?></h1>
                <div class="post-meta">
                    <?php 
                    sparch_posted_on();
                    sparch_posted_by();
                    ?>
               </div>
               <?php endif; ?> 
            </div>
        </div>
</div>
<?php 
endif;
endif;
