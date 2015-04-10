<?php /* Template Name: Event Page */ get_header(); ?>



	<main role="main">

		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<div class="events">

			<?php

				$today = date('Ymd');
				$posts = query_posts(array(
					'meta_key' => 'event_date', // name of custom field
					'orderby' => 'meta_value_num',
					'order' => 'ASC',
					'category_name=events',
					'meta_query' =>  array(
				        'key'		=> 'event_date',
				        'compare'	=> '>=',
				        'value'		=> $today,
					    )));

				if( $posts ) {
					foreach( $posts as $post ) {
						?>
						<div class="event">
							<?php
								setup_postdata( $post );

								$image = get_field('event_image') ?>
								<img style="float: right"src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
								<h3><?php the_title() ?></h3>
								<h2><?php the_field('event_location_name') ?></h2>
								<h3><?php the_field('event_address') ?></h3>

								
								<h4><?php the_field('event_start') ?> - <?php the_field('event_end') ?></h4>

			

								<?php the_content(); ?>
								<!--<?php the_field('event_map')?>    Need to implement some jquery to use maps-->
						</div>
								<?php 
					} 

							wp_reset_postdata(); 
				}?>

			</div>
	

	</section>

	</main>


<?php get_footer(); ?>