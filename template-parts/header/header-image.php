<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<div class="custom-header-media">
		<?php
		// If a regular post or page, and not the front page, show the featured image.
		if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
			echo '<div class="single-featured-image-header">';
			the_post_thumbnail( 'twentyseventeen-featured-image' );
			echo '</div><!-- .single-featured-image-header -->';
		else :
			the_custom_header_markup();
		endif;
		?>
	</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
