<?php 
get_header();
$opt = get_option('sparch');

$defult_blog_format  = isset( $opt['defult_blog_format']) ? $opt['defult_blog_format'] : '';
$post_title_length   = isset( $opt['post_title_length']) ? $opt['post_title_length'] : '';
$is_post_author      = isset( $opt['is_post_author']) ? $opt['is_post_author'] : '';
$is_post_date        = isset( $opt['is_post_date']) ? $opt['is_post_date'] : '';
?>


<div class="dl_col_lg_6 dl_col_sm_ blog_grid">
    <div class="droit-post__area blog_grid_masonory style_5 zoom_in_effect">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" class="post_thumb">
                <div class="droit-post__thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
            </a>
        <?php
            $category = get_the_category();
        ?>
        <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>" class="dl_tag droit-post__category"><?php echo  esc_html( $category[0]->cat_name ); ?></a>
        <?php endif; ?>
        <div class="blog_grid_masonory_content">		
            <div class="entry-content media_blog_content">
                <?php
                    if(is_sticky()) {
                        printf('<span class="featured_post">%s</span>', esc_html__('Featured', 'carspa'));
                    }
                ?>
                <div class="post-title entry-title">
                    <div class="post-meta">
                    <?php 
                    if($is_post_date == 1):  sparch_posted_on(); endif;
                    if($is_post_author == 1):  sparch_posted_by(); endif;
                    ?>
                    </div>
                    <h2 class="entry-title blog_title"><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), $post_title_length); ?></a></h2>
                </div>


                <?php get_template_part( 'template-parts/blog/excerpt/excerpt', get_post_format() ); ?>
                <div class="post-footer">
                <?php sparch_entry_meta_footer(); ?>  
                </div>
            </div>
        </div>
    </div>
</div>