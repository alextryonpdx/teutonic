<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
global $post, $product;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$product_object = get_post($post);


?>
<h1 itemprop="name" class="entry-title"><?php echo $post->vintage; ?> <?php echo $post->post_title; ?> </h1>
<h2 class="wine-subheading entry-title"><?php echo $post->location ?></h2>

				<p><?php echo $post->description ?></p>
				
				<?php if ($post->abv){ ?>
					<p><?php echo $post->abv ?>% Alcohol by volume</p>
				<?php } ?>
		
