<?php
/**
 * Loop Add to Cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $product;
if ( ! $product->is_in_stock() ) : ?>
    <span class="onsale out-of-stock-button"><?php echo apply_filters( 'out_of_stock_add_to_cart_text', __( 'Out of stock', 'woocommerce' ) ); ?></span>
<?php else :
echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<span class="add-to-cart-button-outer"><span class="add-to-cart-button-inner"><a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="qbutton add-to-cart-button button %s product_type_%s">%s</a></span></span>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		$product->is_purchasable() ? 'add_to_cart_button' : '',
		esc_attr( $product->product_type ),
		esc_html( $product->add_to_cart_text() )
	),
$product );

endif; 
?>