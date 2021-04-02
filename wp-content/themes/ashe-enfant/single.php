<?php get_header(); ?>

<!-- Page Content -->
<div class="main-content clear-fix<?php echo ( ashe_options( 'general_single_width' ) === 'boxed'  ) ? ' boxed-wrapper': ''; ?>" data-sidebar-sticky="<?php echo esc_attr( ashe_options( 'general_sidebar_sticky' )  ); ?>">

	<!-- Main Container -->
	<div class="main-container">
        <?php if(have_posts()): ?>
            <?php while(have_posts()):the_post(); ?>
                <div id="text-titre">
                    <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
                    <?php the_post_thumbnail(); ?>
                    <div class="post-content"><?php the_content(); ?></div>
                    </div>
            <?php endwhile; ?>
        <?php endif; ?>    

	</div><!-- .main-container -->

</div><!-- .page-content -->

<?php get_footer(); ?>