<?php // Desativa o Gutemberg para posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// Desativa o Gutemberg para tipos de post personalizados
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Desativa galeria nativa
add_filter( 'use_default_gallery_style', '__return_false' );

// Ativa os thumbnails e o menu
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/ferramentas/bootstrap-wp-menu/class-wp-bootstrap-navwalker.php';

// Galeria Bootstrap
add_filter( 'post_gallery', 'lucidity_bootstrap_gallery', 10, 2);
function lucidity_bootstrap_gallery( $output = '', $atts ) {
    if (strlen($atts['columns']) < 1) $columns = 2;
    else $columns = $atts['columns'];
    $images = explode(',', $atts['ids']);
    
    // Set the # of columns you would like
    if ( $columns < 1 || $columns > 12 ) $columns == 2;
    
    $col_class = 'col-lg-' . 12/$columns;
    
    $output = '<div class="row text-center text-lg-left gallery">';
    $i = 0;
    
    foreach ( $images as $key => $value ) {
       
        $image_attributes = wp_get_attachment_image_src( $value, 'medium');
		$image_attributes_full = wp_get_attachment_image_src( $value, 'full');
        $output .= '
            <div class="'.$col_class.'">
              <a data-gallery="gallery" href="'.esc_url($image_attributes_full[0]).'" class="d-block mb-4 h-100">
                    <img src="'.esc_url($image_attributes[0]).'" alt="" class="img-fluid img-thumbnail">
                </a>
            </div>';
        $i++;
    }
    
    $output .= '</div>';
    
    return $output;
}

// Galeria Bootstrap
function bootstrap_gallery( $output = '', $atts, $instance )
{
    if (empty($atts['size'])) {
        $gallery_size = 'thumbnail';
    }
    else {
        $gallery_size = $atts['size'];
    }
    if (strlen($atts['columns']) < 1) {
        $columns = 3;
    }
    else {
        $columns = $atts['columns'];
    }
    
    $images = explode(',', $atts['ids']);
    if ($columns < 1 || $columns > 12) {
        $columns == 3;
    }
    
    $col_class = 'col-lg-' . 12/$columns;
    
    $return = '<div class="row gallery">';
    $i = 0;
    foreach ($images as $key => $value) {
        if ($i%$columns == 0 && $i > 0) {
            $return .= '</div><div class="row gallery">';
        }
        $image_attributes_full = wp_get_attachment_image_src($value, 'full');
        $image_attributes_custom = wp_get_attachment_image_src($value, $gallery_size);
        $return .= '
            <div class="'.$col_class.'">
                <a data-gallery="gallery" href="'.$image_attributes_full[0].'" class="d-block mb-4 h-100">
                    <img src="'.$image_attributes_custom[0].'" alt="" class="img-fluid img-thumbnail">
                 </a>
            </div>';
        $i++;
    }
    $return .= '</div>';
    return $return;
}
add_filter( 'post_gallery', 'bootstrap_gallery', 10, 4);

function crunchify_embed_defaults($embed_size){
    $embed_size['width'] = 640;
    $embed_size['height'] = 360;
    return $embed_size;
}
add_filter('embed_defaults', 'crunchify_embed_defaults');