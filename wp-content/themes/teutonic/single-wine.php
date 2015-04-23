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

	
	<div id="single-wine-image">
		<img src="<?php $image = get_field('image'); echo $image['url'] ?>">
	</div>




		<div class="wine-heading">
			<h1><?php the_field('vintage') ?>  <?php the_field('name') ?></h1>
			<h2><?php the_field('location') ?></h2>
			<?php if(get_field('inventory') > 0) { ?>
				<p>$ <?php echo number_format(get_field('price'), 2) ?></p>
			<?php } ?>
		</div>

		<div class="single-wine-info">


			<p><?php the_field('description') ?></p>
			
			<p><?php the_field('abv') ?>% Alcohol by volume</p>



				<?php if(get_field('inventory') > 0) { ?>
					<p>*10% off purchases of $250 or more. Use promo code "lotsofwine" when checking out.</p>

					<div class="add-to-cart">
						<form id="buy-wine-form"  style:"line-height: 1.5em; width: 40%;">
							<label for="quantity-input" id="quantity-label">Quantity:<br></label>
							<input type="number" id="quantity-input"><br><br>
							<button id='add-to-cart' type="submit">ADD TO CART</button>
						</form>
					</div>	

				<?php } else { ?>
					<p>Sorry, <?php the_field('vintage'); ?>  <?php the_field('name'); ?> is no longer available.</p>
			<?php } ?>
		</div>



	</section>
	<!-- /section -->
	</main>

<?php get_footer(); ?>

<!-- add classes to the elements to enable seperation of styles. 
	some whack spacing between page-title and content. -->