<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<footer>

<?php

wp_nav_menu(array(
    'theme_location' => 'menu-footer-perso',
    'container' => 'nav',
    'fallback_cb' => false,
));
?>

</footer>

	
<?php
	
	wp_footer();
?>
	</body>
</html>
