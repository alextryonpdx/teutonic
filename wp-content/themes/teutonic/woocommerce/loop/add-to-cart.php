<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button %s product_type_%s">%s</a>',
		esc_url( $post->add_to_cart_url() ),
		esc_attr( $post->id ),
		esc_attr( $post->get_sku() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		$post->is_purchasable() && $post->is_in_stock() ? 'add_to_cart_button' : '',
		esc_attr( $post->product_type ),
		esc_html( $post->add_to_cart_text() )
	),
$post );
