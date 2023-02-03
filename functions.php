<?php
/**
 * meharHerbals functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package meharHerbals
 */

ob_clean();
ob_start();

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
* Change excerpt read more [] into ... 
*/
function change_excerpt_dots( $more ) {
	return ' ...';
}
add_filter('excerpt_more', 'change_excerpt_dots');

/**
* Halt the main query in the case of an empty search 
*/
add_filter( 'posts_search', function( $search, \WP_Query $q ) {
	if( ! is_admin() && empty( $search ) && $q->is_search() && $q->is_main_query() )
	$search .=" AND 0=1 ";
	return $search;
}, 10, 2 );

/**
* Disable the woocommerce default styles
*/
// if (class_exists('Woocommerce')){
//     add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
// }

/**
 * Add theme supports for our theme
 */
require_once get_template_directory() . '/inc/add-theme-supports.php';

/**
 * Add theme supports for woocommerce
 */
// require_once get_template_directory() . '/inc/woocommerce-theme-supports.php';

/**
 * Adding new custom post types
 */
require_once get_template_directory() . '/inc/custom-post-types.php';

/**
 * Register widget area
 */
require_once get_template_directory() . '/inc/widgets-area.php';

/**
 * Enqueue scripts and styles.
 */
require_once get_template_directory() . '/inc/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}