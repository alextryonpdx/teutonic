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
					<div class="row">
							<div class="event">
								<?php
									setup_postdata( $post );
									$date = DateTime::createFromFormat('Ymdl', get_field('event_date'));
									$dow = $date->format('l');
									$day = $date->format('d');
									$month = strtoupper($date->format('M'));
									$year = $date->format('Y');
									$image = get_field('event_image') ?>

							<div class="col 1of10 left">

								<div class="date-time">

									<div class="event-date">
										<!--<p class="dow"><?php echo $dow ?></p>-->
										<p class="month"><?php echo $month ?></p>
										<p class="day"><?php echo $day ?></p>
									</div>

									<div class="time">
										<p><?php the_field('event_start')?></p>
									</div>

								</div>

							</div>

							<div class="col col9of10 right">
								<div class="event-heading">
									<h3><?php the_title() ?></h3>
									<h2><?php the_field('event_location_name') ?></h2>
									<h3><?php the_field('event_address') ?></h3>
								</div>								
									<img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">

									<div class="event-content" >
										<?php the_content(); ?>
									</div>

									<!--<?php the_field('event_map')?>    Need to implement some jquery to use maps-->
							</div>
						</div>
					</div>
				

<style>
	.event-heading {
		border-bottom: 2px solid rgba(157, 157, 157, .6);
		border-width: 80%;
		line-height: .25em;
		font-weight: bold;
		margin-bottom: 2em;
	}

	.date-time {
		text-align: center;
		text-transform: uppercase;
		line-height: 0;
		margin: 0 -100% 0 0;
	}
	.event-date {
		margin-bottom: 1em !important;
		border-bottom: 2px solid rgba(157, 157, 157, .6);
	}
	.dow {
		font-size: 1em !important;
	}
	.month {
		font-size: 1.25em !important;
	}
	.day {
		font-size: 2em !important;
	}
	.row {
		display: table;
		width: 100%;
		clear: both;
		margin-bottom: 100px;
	}
	.time {
		font-size: .5em !important;
	}
	.event {
		margin: inherit auto 5em !important;
	}
	.left {
		float: left;
		clear: left;
	}
	.right {
		float: right;
		clear: right;
	}
	.col {
		margin: 0 .5% auto;
	}
	.col1of10 {
		width: 8%;
	}
	.col9of10 {
		width: 88%;
	}
</style>

								<?php 
					} 

							wp_reset_postdata(); 
				}
				?>

			
	

	</section>

	</main>


<?php get_footer(); ?>