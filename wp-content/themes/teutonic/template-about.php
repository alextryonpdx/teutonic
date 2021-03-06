


<?php /* Template Name: ABOUT */ get_header(); ?>


<h1 class="page-title">Meet the Winemakers</h1>

	<main role="main">
		<!-- section -->

					
		<section id="content-section">



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				

				<br class="clear">

						</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	
	</main>



<?php get_footer(); ?>
