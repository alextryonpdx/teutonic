


<?php /* Template Name: CONTACT */ get_header(); ?>
<style>
	#col-1of2 {
		width: 48%;
		margin: -2% 1% 0;
		padding: 2% 1% 0 0;
		display: inline-block;
		float: left;
	}
	#col-2of2 {
		width: 48%;
		margin: 0 1% 0 0;
		padding: 0;
		display: inline-block;
		float: right;
	}

	.row {
		height: 100%;
		width: 100%;
		display: block;
	}

	.wpcf7 {
		line-height: .75em;
		font-size: 1.1em;
	}

	.wpcf7-form-control {
		border-radius: 5px;
		margin: .5em auto;
		width: 100%;
		background-color: #faf0f0;
	}

	.wpcf7-submit {
		display: inline-block;
		width: auto;
		height: auto;
		padding: 1em 2.5em;
		margin: -1em 0 0 0;
		color: #fff;
		background-color: #565656;
		border-width: 0;
		font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		font-size: 12px;
		line-height: 1em;
		font-weight: normal;
		font-style: normal;
		text-transform: uppercase;
		letter-spacing: 0px;
		text-align: center;
		text-decoration: none;
		cursor: pointer;
		outline: none;
		font-size: 14px;
		text-transform: none;
	}

	.wpcf7-textarea {
		max-height: 6em;
	}

</style>

	<main role="main">
		<!-- section -->

					
		<section id="content-section">


				<h1 class="page-title"><?php the_title(); ?></h1>

				<div id="col-1of2">

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

					<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<div id="col-2of2">

					<?php echo do_shortcode( '[contact-form-7 id="1234" title="Contact form 1"]' ); ?>

				</div>

			

		
		</section>

	</main>




<?php get_footer(); ?>
