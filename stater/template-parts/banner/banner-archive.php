<?php 

$show_banner = _themename_options('_themename_arcive_banner_toggle', 'show');
  
$banner_url = _themename_options('_themename_archive_banner_upload');

$how_title = _themename_options('_themename_arcive_title', 'show');
$show_breadcrumbs = _themename_options('_themename_archive_banner_breadcrumb', 'show');
$banner_background_url = _THEMENAME_IMAGES.'/blog/banner/blog_details_img.jpg';

if($banner_url && !empty($banner_url['url'])) {
    $banner_background_url = $banner_url['url'];
}

if(!class_exists('Redux')){
    $banner_background_url = '';
  }

?>

<?php if($banner_background_url != '') :  ?>
<div class="blog_breadcrumbs_area_two parallaxie" data-bg-img="<?php echo esc_url($banner_background_url); ?>">
<div class="overlay_bg"></div>
 <?php else: ?>
<div class="blog_breadcrumbs_area_two banner-with-color">
<?php endif; ?>
    <div class="container">
        <div class="breadcrumb_content text-white text-center">
            <?php if(have_posts() && $how_title == 'show') {
                        the_archive_title( '<h1 class="page-title page_title">', '</h1>' );
                    }
                if($show_breadcrumbs == 'show') {    
                _themename_breadcrumbs(); 
                } ?>
        </div>
    </div>
</div>