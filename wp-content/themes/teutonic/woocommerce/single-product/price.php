<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
					
?>
<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
	<?php $availability = $product->get_availability();
	if ($availability['availability'] !== 'Out of stock'){ ?>
		<p class="price"><?php echo $product->get_price_html(); ?></p>
		<p>10% off purchases of $250 or more. Use promo code "lotsofwine" when checking out.</p>
	<?php } ?>
	<meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
	<meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
	<link itemprop="availability" href="http://schema.org/<?php echo $product->is_in_stock() ? 'InStock' : 'OutOfStock'; ?>" />

</div>
