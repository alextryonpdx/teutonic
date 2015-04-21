


<?php /* Template Name: STRIPPED DOWN */ get_header(); ?>

	<main role="main">
		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<?php the_content(); ?>



		<?php endwhile; ?>
		<?php endif; ?>

	</main>


<?php get_footer(); ?>
