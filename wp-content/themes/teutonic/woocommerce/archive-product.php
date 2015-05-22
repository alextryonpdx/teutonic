
<?php /* Template Name: Cellar Page */ get_header(); ?>

	<main role="main">
		<section id="content-section">

		<h1 class="page-title">Wine Shop</h1>

		<p class="wine-categories">Find Wines by Category: </p>
			<form class="wine-categories" method="GET">
				<input type="submit" name="sb" value="Red" />
				<input type="submit" name="sb" value="White" />
				<input type="submit" name="sb" value="Sparkling" />
				<input type="submit" name="sb" value="Import" />
				<input type="submit" name="sb" value="All Wines" />
			</form>	
		<p class="wine-categories"><a href="shipping-policy/"> Read our Shipping Policy</a></p>

			<?php
			if(isset($_GET['sb'])) 
				if ($_GET['sb'] == "All Wines")
					$style = '';
				else
					$style = $_GET['sb'];
			else
				$style = '';
			?>
		
		<div>

			<?php
			global $product;

					if ($style == 'Import') {$posts = query_posts(array(
					'post_type' => 'product',
					'meta_query' => array(
						'relation' => 'OR',
        					array(
				            'key' => 'style', 
				            'value' => $style, 
				            'compare' => 'LIKE'
				        ),
				    )
									    ));} else {
				$posts = query_posts(array(
					'post_type' => 'product',
					'meta_query' => array(
						'relation' => 'AND',
        					array(
				            'key' => 'style', 
				            'value' => $style, 
				            'compare' => 'LIKE'
				        ),
        					array(
				            'key' => 'style', 
				            'value' => 'Import', 
				            'compare' => 'NOT LIKE'
				        )
				    )
									    ));}

				if( $posts ) {
					foreach( $posts as $post ) { 

									setup_postdata( $post ); ?>	
					<?php 
					$availability = $product->get_availability();
					if ($availability['availability'] !== 'Out of stock'){ ?>
					<a class="wine-link" href="<?php the_permalink(); ?>">
						<div class="wine">
							<div class="wine-image">
								<!-- <img src="<?php $image = get_field('image'); echo $image['url'] ?>"> -->
								<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
								<img src="<?php echo $url; ?>" />
								
							</div>

							<div class="overlay">
								<div class="wine-info">
								<?php if ($post->post_title) {echo $post->post_title;?><br /><?php }?>
								<?php if ($post->vintage) {echo $post->vintage; ?><br /><?php }?>
								<?php if ($post->location) {echo $post->location; ?><br /><?php }?>
								</div>
							</div>	
												
						</div>
					</a>
					
				<?php };
				wp_reset_query();
			}
}
			?>
		</div>

	</section>

	</main>


<?php get_footer(); ?>
