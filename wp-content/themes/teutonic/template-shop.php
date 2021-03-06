
<?php /* Template Name: Wine Shop Page */ get_header(); ?>

	<main role="main">
		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<p class="wine-categories">Find Wines by Category: 
			<form class="wine-categories" method="GET">
				<input type="submit" name="sb" value="Red" />
				<input type="submit" name="sb" value="White" />
				<input type="submit" name="sb" value="Sparkling" />
				<input type="submit" name="sb" value="Import" />
				<input type="submit" name="sb" value="All Wines" />
			</form>	</p>
		<p class="wine-categories"><a href="shipping-policy/"> Read our Shipping Policy</a></p>

			<?php
			if(isset($_GET['sb'])) 
				if ($_GET['sb'] == "All Wines")
					$style = array('Red', 'White', 'Sparkling', 'Import');
				else
					$style = $_GET['sb'];
			else
				$style = '';
			?>
			<div class="row">

				<div class="event">

			<?php
				$posts = query_posts(array(
					'post_type' => 'product',
					'meta_query' => array(
        					array(
				            'key' => 'inventory', 
				            'value' => 0, 
				            'compare' => '>'
				        ),
					'meta_query' => array(
        					array(
				            'key' => 'style', 
				            'value' => $style, 
				            'compare' => 'IN'
				        )
				    )
									    )));

				if( $posts ) {
					foreach( $posts as $post ) { 

									setup_postdata( $post ); ?>	
					
					<a class="wine-link" href="<?php the_permalink(); ?>">
						<div class="wine-container">
							<div class="wine-image">
<!-- 								<img src="<?php $image = get_field('image'); echo $image['url'] ?>"> -->
								<?php echo get_the_post_thumbnail() ?>
							</div>

							<div class="overlay">
								<div class="wine-info">
								<?php the_field('name') ?><br />
								<?php the_field('vintage') ?><br />
								<?php the_field('location') ?><br />
								<?php the_field('style')?>
								</div>
							</div>	
												
						</div>
					</a>
					
				<?php };
				wp_reset_query();
			}

			?>


	</section>

	</main>


<?php get_footer(); ?>
