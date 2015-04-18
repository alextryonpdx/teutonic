<style>
.overlay {
	position: absolute;
	width: 100%;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	text-align: center;
	background: rgba(0, 0, 0, .6);
	opacity: 0;
	padding: 30% 10%;
	transition: opacity .5s, padding .75s;
	-webkit-transition: opacity .5s, padding .75s;
}
.overlay:hover {
	opacity: 1;
	padding: 50% 10%;
}
.wine-info{
	font-size: 2em;
	border-bottom:solid 2px  rgb(124, 217, 173);
	color: rgb(234, 232, 217);
	font-weight: bold;
	line-height: 1.5em;
	padding-bottom: .75em;
	margin: 0 1em;
}
.wine {
	display: inline-block;
	width: 100%;
	overflow: hidden;
}
.wine-link {
	display: inline-block;
	position: relative;
	width: 31.3333333333%;
	float: left;
	margin: 1%;
	padding: 0;
}
.wine-image img {
	position: relative;
	overflow: hidden;
	width: 100%
}

</style>


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
					
					<a class="wine-link" href="#">
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
 