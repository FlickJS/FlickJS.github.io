<?php
// CSS and JS
function adding_styles_scripts() {
wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');   
wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=News+Cycle&display=swap');       
  wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
    wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ),'',true ); 
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'adding_styles_scripts' );

// Adding Theme Support


function gt_init(){
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('html5', array('comment-list', 'comment-form', 'search-from'));
}
add_action('after_setup_theme', 'gt_init');

// Projects Post type

function gt_custom_post_type(){
    register_post_type('project',
                      array(
                          'rewrite' => array('slug' => 'projects'),
                          'labels' => array(
                          'name' => 'Projects',
                          'singular_name' => 'Project',
                          'add_new_item' => 'Add New Project',
                          'edit_item' => 'Edit Project'
                          ),
                          'menu-icon' => 'dashicons-clipboard',
                          'public' => true,
                          'has_archive' => true,
                          'supports' => array(
                          'title', 'thumbnail', 'editor', 'excerpt', 'comments'
                          )
                      )
     );
}

add_action('init', 'gt_custom_post_type');


// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {
	
	function wpex_pagination() {
		
		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';
		
		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}
	
}











