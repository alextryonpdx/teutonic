
<?php /* Template Name: Cellar Page */ get_header(); ?>

	<main role="main">
		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>



			<?php
#				if(isset($_GET['style'])){$_SESSION['style'] = $_GET['style'];}
#				else {$_SESSION['style'] = "";}
#				query_posts(array(
#					'category_name=wine',
#					'meta_query' =>  array(
#				        'key'		=> 'style',
#				        'compare'	=> '=',
#				        'value'		=> $_SESSION['style'],))); 
			query_posts('post_type=wine');
				while (have_posts()) : the_post(); ?>	
					
					<a class="wine-link" href="<?php the_permalink(); ?>">
						<div class="wine">
							<div class="wine-image">
								<img src="<?php $image = get_field('image'); echo $image['url'] ?>">
							</div>

							<div class="overlay">
								<div class="wine-info">
								<?php the_field('name') ?><br />
								<?php the_field('vintage') ?><br />
								<?php the_field('location') ?><br />
								</div>
							</div>	
												
						</div>
					</a>
					
				<?php endwhile;
				wp_reset_query();?>


	</section>

	</main>


<?php get_footer(); ?>
 