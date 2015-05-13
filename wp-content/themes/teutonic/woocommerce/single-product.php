<?php get_header(); ?>

	<main role="main">
		<!-- section -->

		<section id="content-section">			


			<div class="single-wine-nav wine-categories" style="display: block; margin: 0 2em 2em">
				<a href="javascript:history.go(-1)">Go Back</a>
			</div>
				

			<div id="single-wine-image">
				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
				<img src="<?php echo $url; ?>" longdesc="URL_2" alt="Text_2" />
			</div>


			<div class="wine-heading">
				<h1><?php echo $post->vintage ?>  <?php echo $post->name ?></h1>
				<h2><?php echo $post->location ?></h2>
				<?php if( $post->inventory > 0) { ?>
					<p>$ <?php echo number_format($post->price, 2) ?></p>
				<?php } ?>
			</div>

			<div class="single-wine-info">
				<p><?php echo $post->description ?></p>
				<p><?php echo $post->abv ?>% Alcohol by volume</p>


				<?php if($post->inventory > 0) { ?>
					<p>*10% off purchases of $250 or more. Use promo code "lotsofwine" when checking out.</p>
					<div class="single-wine-nav wine-categories" style="display: block; margin: 1em 0">
						<a href="/shipping-policy">Read our Shipping Policy</a><br /><br />
					</div>
					<div class="add-to-cart">
						<form id="buy-wine-form"  style:"line-height: 1.5em; width: 40%;">
							<label for="quantity-input" id="quantity-label">Quantity:<br></label>
							<input type="number" id="quantity-input"><br><br>
							<button id='add-to-cart' type="submit">ADD TO CART</button>
						</form>

					</div>	

				<?php } else { ?>
					<p>Sorry, <?php echo $post->vintage; ?>  <?php echo $post->name; ?> is no longer available.</p>
				<?php } ?>
			</div>
							
			
	</section>
	<?php the_content(); ?>
	<!-- /section -->
	</main>

<?php get_footer(); ?>

<!-- add classes to the elements to enable seperation of styles. 
	some whack spacing between page-title and content. -->