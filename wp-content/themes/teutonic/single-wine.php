<?php get_header(); ?>



	<main role="main">
		<!-- section -->

		<section id="content-section">			
<!-- 
<div class="single-wine-nav" style="display: block; margin: 1em 0 2em 2em;">
			<p class="wine-categories">Find Wines by Category: 
			<form class="wine-categories" method="GET">
				<input type="submit" name="sb" value="Red" />
				<input type="submit" name="sb" value="White" />
				<input type="submit" name="sb" value="Sparkling" />
				<input type="submit" name="sb" value="Import" />
				<input type="submit" name="sb" value="All Wines" />
			</form>	</p>
		<p class="wine-categories"><a href="shipping-policy/"> Read our Shipping Policy</a></p>
</div> -->

	
	<div style="width: 35%; margin: 0 3%; float: left; background: #fff; display: inline-block; overflow: hidden; max-height: 450px;">
		<img style="max-height: inherit; display: block; margin: 0 auto;" src="<?php $image = get_field('image'); echo $image['url'] ?>">
	</div>


	<div class="single-wine-info" style="width: 55%; margin: 0 4% 0 0; float: left; display: inline-block; padding: 0 4% 0 0;">
		<div class="wine-heading" style="margin: 0 20% 0 0; border-bottom: 2px solid rgba(157, 157, 157, .6);">
			<h1><?php the_field('vintage') ?>  <?php the_field('name') ?></h1>
			<h2><?php the_field('location') ?></h2>
		</div>

		<p><?php the_field('description') ?></p>
		
		<p><?php the_field('abv') ?>% Alcohol by volume</p>

	
			<?php if(get_field('inventory') > 0) { ?>
				<p>$ <?php echo number_format(get_field('price'), 2) ?></p>
				<p>*10% off purchases of $250 or more. Use promo code "lotsofwine" when checking out.</p>
			<?php } else { ?>
				<p>Sorry, <?php the_field('vintage'); ?>  <?php the_field('name'); ?> is no longer available.</p>
		<?php } ?>
	<div>

	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>

<!-- add classes to the elements to enable seperation of styles. 
	some whack spacing between page-title and content. -->