<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CaribbeanMathAcademy
 */

if ( ! is_active_sidebar( 'self-test' ) ) {
	return;
}
?>

<aside id="secondar" class="widget-area selftest-sidebar" style="border:2px solid red;">
	<?php dynamic_sidebar( 'self-test' ); ?>
</aside><!-- #secondary -->