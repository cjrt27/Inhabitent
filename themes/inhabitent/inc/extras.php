<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


// Change wordpress logo to inhabitent logo
function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		h1 a { background-image:url('.get_stylesheet_directory_uri().'../images/logos/inhabitent-logo-text-dark.svg) !important; 
		height: 40px !important; width: 310px !important; background-size: contain !important; }                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

// change url behind said logo
function the_url( $url ) {
    return get_bloginfo('url');
}
add_filter( 'login_headerurl', 'the_url' );

// Customize the title attribute on the WP login page

function inhabitent_login_logo_title(){
	return 'Inhabitent';
}

add_filter('login_headertitle', 'inhabitent_login_logo_title');


// Make hero image customizable through CFS field

	function about_hero(){
		if ( ! is_page_template('about.php' )){
			return;
		}
			$image= CFS()->get('header_image');

			if(! $image){
				return;
			}

			$about_hero_css = ".page-template-about .entry-header {
					background-image: url( '{$image}' );
					background-size: cover, cover;
			}";

			wp_add_inline_style( 'inhabitent-style', $about_hero_css );
				};
	add_action( 'wp_enqueue_scripts', 'about_hero' );

	//Changin titles 

	function title_change_shop($title){
		if(is_post_type_archive('products')){
			$title = 'SHOP STUFF';
		}elseif(is_tax('product_type')){
			$title = single_term_title();
		}
		return $title;
	}
	add_filter('get_the_archive_title', 'title_change_shop');