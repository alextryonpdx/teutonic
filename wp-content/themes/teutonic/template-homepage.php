


<?php /* Template Name: Homepage */ get_header(); ?>
 <style>
    /* Prevents slides from flashing */
    #slides {
      display:none;
    }
  </style>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="wp-content/themes/teutonic/js/jquery.slides.min.js"></script>

  <script>
    $(function(){
      $("#slides").slidesjs({
        width: 940,
        height: 528
      });
    });
  </script>
</head>
<body>




<div id="main">
	<div id="content">
		<div id="slides">
				<?php if( have_rows('images') ): ?>
	
					<?php while( have_rows('images') ): the_row(); 
						$image = get_sub_field('image');
					?>
				
							<img class="slide" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />


					<?php endwhile; ?>
		
				<?php endif; ?>

				


			</div>
		</div>
	</div>
</div>





	<main role="main">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<?php the_content(); ?>



		<?php endwhile; ?>
		<?php endif; ?>

	</main>


<script>

 $(function(){
  $("#slides").slidesjs({
    width: 1000,
    height: 500
  });
});
$(function(){
  $("#slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "fade",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
$(function(){
  $("#slides").slidesjs({
    effect: {
      slide: {
        // Slide effect settings.
        speed: 200
          // [number] Speed in milliseconds of the slide animation.
      },
      fade: {
        speed: 300,
          // [number] Speed in milliseconds of the fade animation.
        crossfade: true
          // [boolean] Cross-fade the transition.
      }
    }
  });
});
</script>
<?php get_footer(); ?>
