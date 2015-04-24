<?php get_header(); ?>

	<main role="main">
		<!-- section -->

		<section id="content-section">			
			<?php 
				$date = DateTime::createFromFormat('Ymdl', get_field('event_date'));
				$dow = $date->format('l');
				$day = $date->format('d');
				$month = strtoupper($date->format('M'));
				$longmonth = $date->format('F');
				$year = $date->format('Y');
				$image = get_field('event_image') 
				?>

							<div class="col1of10 left">

								<div class="date-time">
									<div class="big-date-time">
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


							</div>

							<div class="col col9of10 right">

								<div class="event-heading">
									<div class="small-date-time">
										<p><?php echo $dow ?>, <?php echo $longmonth ?> <?php echo $day ?></p>
									</div>

										<br>
										<p id="event-title"><?php the_title() ?></p>
										<p id="event-location"><?php the_field('event_location_name') ?></p>
										<p id="event-address"><?php the_field('event_address') ?></p>
									
								</div>								
									
								<div class="single-event-content">
									<img src="<?php echo $image['url']?>" alt="<?php echo $image['alt']?>">
									<p><?php the_field('description'); ?></p>
								</div>

								<div class="event-links">
									<p class="event-link prev"><?php previous_post_link();?></p>
									<p class="event-link next"><?php next_post_link();?></p>
								</div>

							</div>

								

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>


