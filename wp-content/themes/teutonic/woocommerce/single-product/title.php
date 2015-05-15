<?php
/**
 * Single Product title
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
global $post;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<h1 itemprop="name" class="product_title entry-title"><?php echo $post->name; ?> - <?php echo $post->vintage; ?></h1><br /><br />
<h2 class="wine-subheading entry-title"><?php echo $post->location ?></h2>
		
