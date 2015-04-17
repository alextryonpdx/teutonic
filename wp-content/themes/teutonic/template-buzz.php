<style>
	.col-5of8 {
		width: 62%;
		margin: 0 1% 0;
		padding: 0 1% 0 0;
		display: inline-block;
		float: left;
	}
	.col-5of8 img{
		width: 100%;
		height: auto;
	}
	.col-3of8 {
		width: 36%;
		margin: 0;
		padding: 0;
		display: inline-block;
		float: right;
	}

</style>


<?php /* Template Name: Buzz Page */ get_header(); ?>

	<main role="main">
		<section id="content-section">

		<h1 class="page-title"><?php the_title(); ?></h1>

		<div class="col-5of8">

			<?php
				query_posts('category_name=buzz');
				while (have_posts()) : the_post(); ?>	

					<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<h3 class="post-date"><?php the_date() ?></h3>

					<?php the_content(); ?>

				<?php endwhile?>

		</div>

		<div class="col-3of8">
			
			<img src="<?php echo get_template_directory_uri(); ?>/img/corkscrew_and_hands-web.png" alt="hands opening a bottle of wine with a corkscrew">

		</div>

	</section>

	</main>


<?php get_footer(); ?>
