<?php
/**
 * Template Name: Blockslider Single Page
 * Template Post Type: blockslider
 *
 * @package BlockSlider
 * @author zafarKamal
 * @since 1.0.0
 */

use \CakeWP\BlockSlider\Views\PreviewToolbar;

?>
<?php wp_head(); ?>

<style id="blockslider-page-template-inline-style">
	.block-slider {
		margin-top: 0px;
		margin-bottom: 0px;
	}

	html {
		margin-top: <?php echo is_admin_bar_showing() ? 'var( --wp-admin--admin-bar--height, 32px )' : '0px'; ?> !important;
	}
</style>

<?php PreviewToolbar::render(); ?>

<?php the_content(); ?>
<?php wp_footer(); ?>
