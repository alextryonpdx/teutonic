<?php /* Template Name: CONTACT */ get_header(); ?>


	<main role="main">
		<!-- section -->

					
		<section id="content-section">


				<h1 class="page-title"><?php the_title(); ?></h1>

				<div id="col-1of2">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

					<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<div id="col-2of2">

					<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>

				</div>

			

		
		</section>

	</main>




<?php get_footer(); ?>
