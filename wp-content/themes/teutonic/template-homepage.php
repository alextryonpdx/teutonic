


<?php /* Template Name: Homepage */ get_header(); ?>


</head>
<body>
<?php if( have_rows('images') ): ?>
  <div class="slides">

  
    <?php while( have_rows('images') ): the_row(); 
      $image = get_sub_field('image');
      $caption = get_sub_field('caption')
      ?>
        <figure>
            <img src="<?php echo $image['url']; ?>" width="100%" alt="<?php echo $caption ?>"/>
        </figure>

    <?php endwhile; ?>
  </div>
<?php endif; ?>





<main role="main">

    <h1 class="page-title"><?php the_title(); ?></h1>

    <section id="content-section">

		  <?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<?php the_content(); ?>



		  <?php endwhile; ?>
		  <?php endif; ?>

	</main>

<?php get_footer(); ?>
</div>


<script>
var counter = 0;
var slideList = document.getElementsByTagName("figure");
var numSlides = (slideList.length - 1);
slideList[counter].classList.add("show");

function slideshow() {
  
    if (counter < numSlides) {
      counter += 1
    } else {
      counter = 0
    };

    if (counter == 0) {
    slideList[numSlides].classList.remove("show");
  } else {
    slideList[counter-1].classList.remove("show");
  };

    slideList[counter].classList.add("show");

  };




function autoplay(){
    setInterval(slideshow, 5000);
}
window.onload = autoplay;

</script>
