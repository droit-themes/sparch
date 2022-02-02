<?php 

$show_banner = sparch_options('sparch_arcive_banner_toggle', 'show');
  
$banner_url = sparch_options('sparch_archive_banner_upload');

$how_title = sparch_options('sparch_arcive_title', 'show');
$show_breadcrumbs = sparch_options('sparch_archive_banner_breadcrumb', 'show');
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
            <?php if(have_posts() && $how_title == 'show') {
                       the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
                    }
                if($show_breadcrumbs == 'show') {    
                sparch_breadcrumbs(); 
                } ?>
        </div>
    </div>
</div>