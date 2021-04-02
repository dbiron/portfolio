<?php

/*
Template Name: Page Portfolio
*/

get_header();

?>

<div class="main-content clear-fix<?php echo esc_attr(ashe_options( 'general_content_width' )) === 'boxed' ? ' boxed-wrapper': ''; ?>" data-sidebar-sticky="<?php echo esc_attr( ashe_options( 'general_sidebar_sticky' )  ); ?>">
	
	<!-- Main Container -->
	<div class="main-container">
	<?php the_title('<h1 class="page-title">', '</h1>'); ?>
	<?php the_content(); ?>

	</div><!-- .main-container -->

</div><!-- .page-content -->

<?php get_footer(); ?>