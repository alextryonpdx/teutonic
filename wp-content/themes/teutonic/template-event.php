<?php /* Template Name: Event Page */ get_header(); ?>

	<main role="main">
		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<div class="events">

			<?php
				$args = array( 'category' => 'events' );
				$event_posts = get_posts( $args );
				foreach ( $event_posts as $post ) :
				  setup_postdata( $post ); ?>

					<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<h3 class="post-date"><?php the_date() ?></h3>

					<?php the_content(); ?>

			<?php endforeach; 
			wp_reset_postdata(); ?>

		</div>


			
			
	

	</section>

	</main>


<?php get_footer(); ?>