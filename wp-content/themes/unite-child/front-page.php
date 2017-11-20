<?php

get_header(); 
$query = new WP_Query( array( 'post_type' => 'films', 'posts_per_page' => '5' ) );
?>

	<div id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php while ( $query->have_posts() ) : $query->the_post(); ?>

			<?php get_template_part( 'content', 'film' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; wp_reset_postdata(); // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>