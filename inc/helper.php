<?php 

/**
 * helper function for sparch 
 */

 /**
  * sparch return 
  */

 if(!function_exists('sparch_return')){

    function sparch_return( $html ){
        return $html;
    }

 }
/**
 * Get editor data 
 */
if(!function_exists('sparch_editor_data')){

    function sparch_editor_data( $data ) {
        return wp_kses_post( $data );
    }

}


/*
 * Resize media image 
 * To get instant resize 
 */

if(!function_exists('sparch_get_image')){

    function sparch_get_image( $id, $size = 'full', $icon= false,  $attr = '') {
       
       echo  wp_get_attachment_image($id, $size, $icon, $attr);

    }
    
}
/**
 * sparch kses
 */
if(!function_exists('sparch_kses')){

    function sparch_kses ( $data ) {

        $allowed_tags = array(
            'a'								 => array(
                'class'	 => array(),
                'href'	 => array(),
                'rel'	 => array(),
                'title'	 => array(),
            ),
            'abbr'							 => array(
                'title' => array(),
            ),
            'b'								 => array(),
            'blockquote'					 => array(
                'cite' => array(),
            ),
            'cite'							 => array(
                'title' => array(),
            ),
            'code'							 => array(),
            'del'							 => array(
                'datetime'	 => array(),
                'title'		 => array(),
            ),
            'dd'							 => array(),
            'div'							 => array(
                'class'	 => array(),
                'title'	 => array(),
                'style'	 => array(),
            ),
            'dl'							 => array(),
            'dt'							 => array(),
            'em'							 => array(),
            'h1'							 => array(),
            'h2'							 => array(),
            'h3'							 => array(),
            'h4'							 => array(),
            'h5'							 => array(),
            'h6'							 => array(),
            'i'								 => array(
                'class' => array(),
            ),
            'img'							 => array(
                'alt'	 => array(),
                'class'	 => array(),
                'height' => array(),
                'src'	 => array(),
                'width'	 => array(),
            ),
            'li'							 => array(
                'class' => array(),
            ),
            'ol'							 => array(
                'class' => array(),
            ),
            'p'								 => array(
                'class' => array(),
            ),
            'q'								 => array(
                'cite'	 => array(),
                'title'	 => array(),
            ),
            'span'							 => array(
                'class'	 => array(),
                'title'	 => array(),
                'style'	 => array(),
            ),
            'strike'						 => array(),
            'br'							 => array(),
            'strong'						 => array(),
            'data-wow-duration'				 => array(),
            'data-wow-delay'				 => array(),
            'data-wallpaper-options'		 => array(),
            'data-stellar-background-ratio'	 => array(),
            'ul'							 => array(
                'class' => array(),
            ),
        );
       
        return wp_kses($data, $allowed_tags);
    }
}

/**
 * get sparch option 
 */

 if(!function_exists('sparch_options')){

    function sparch_options ( $section_id, $default = '' ) {

        $option_data = $default;

        if ( class_exists( 'Redux' ) ) {

            global $sparch;
            $option_data = (isset($sparch[$section_id]) && (!empty($sparch[$section_id]))) ? $sparch[$section_id] : $default;
           
        }

        return $option_data;

    }

 }

 /**
 * get sparch option 
 */

if(!function_exists('sparch_page_meta')){

    function sparch_page_meta ( $meta_id, $id, $default = '' ) {

       $metadata =  $default; 

       if(function_exists('get_field')) {
         $metadata = (get_field($meta_id, $id) != '') ? get_field($meta_id, $id): $default;
       }
      
       return $metadata;

    }

 }

 function wp_body_classes( $classes ) {
     if(is_front_page()) {
        $classes[] = 'sparch-front-page';
     }
    return $classes;
}
add_filter( 'body_class','wp_body_classes' );