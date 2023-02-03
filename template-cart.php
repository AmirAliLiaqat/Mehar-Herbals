<?php
/**
 * Template Name: Cart
 * 
 * @package meharHerbals
 */

get_header();
defined( 'ABSPATH' ) || exit;
?>

    <?php
        // this template code comes from template-parts/woocommerce-page-title
        get_template_part( 'template-parts/woocommerce-page', 'title' );
    ?>

    <!-- cart section start -->
    <section class="cart">
        <div class="container p-4">
            <div class="title text-center my-5">
                <h4 class="site_text display-6">Shopping</h4>
                <h3 class="display-4 py-2">Cart</h3>
            </div><!--title-->
            <div class="cart-inner text-white">
                <div class="row">
                    <?php
                        do_action( 'woocommerce_before_cart' );
                    ?>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <div class="table-responsive">
                            <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                                <?php do_action( 'woocommerce_before_cart_table' ); ?>
                                <table class="table table-bordered table-hover table-striped text-center fst-italic">
                                    <thead class="bg-dark site_text">
                                        <tr>
                                            <th class="product-remove"><?php esc_html_e( 'Sr#', 'woocommerce' ); ?></th>
                                            <th class="product-thumbnail"><?php esc_html_e( 'Image', 'woocommerce' ); ?></th>
                                            <th class="product-name"><?php esc_html_e( 'Name', 'woocommerce' ); ?></th>
                                            <th class="product-price"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
                                            <th class="product-quantity"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></th>
                                            <th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
                                            <th class="product-remove"><?php esc_html_e( 'Action', 'woocommerce' ); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                                        <?php
                                            $sr = 1;
                                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                                $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                                    ?>
                                                    <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
                                                        <td><?php echo $sr++; ?></td>

                                                        <td class="product-thumbnail">
                                                            <?php
                                                                $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                                                if ( ! $product_permalink ) {
                                                                    echo $thumbnail; // PHPCS: XSS ok.
                                                                } else {
                                                                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                                                }
                                                            ?>
                                                        </td>

                                                        <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                                            <?php
                                                                if ( ! $product_permalink ) {
                                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                                                } else {
                                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                                                }

                                                                do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                                                // Meta data.
                                                                echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                                                // Backorder notification.
                                                                if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                                                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                                                                }
                                                            ?>
                                                        </td>

                                                        <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                                                            <?php
                                                                echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                                            ?>
                                                        </td>

                                                        <td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>" style="width: 20%;">
                                                            <?php
                                                                if ( $_product->is_sold_individually() ) {
                                                                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                                                } else {
                                                                    $product_quantity = woocommerce_quantity_input(
                                                                        array(
                                                                            'input_name'   => "cart[{$cart_item_key}][qty]",
                                                                            'input_value'  => $cart_item['quantity'],
                                                                            'max_value'    => $_product->get_max_purchase_quantity(),
                                                                            'min_value'    => '0',
                                                                            'product_name' => $_product->get_name(),
                                                                        ),
                                                                        $_product,
                                                                        false
                                                                    );
                                                                }

                                                                echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                                            ?>
                                                        </td>

                                                        <td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                                                            <?php
                                                                echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                                            ?>
                                                        </td>

                                                        <td class="product-remove cart-actions">&nbsp;
                                                            <?php
                                                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                                    'woocommerce_cart_item_remove_link',
                                                                    sprintf(
                                                                        '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa-solid fa-trash"></i></a>',
                                                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                                        esc_html__( 'Remove this item', 'woocommerce' ),
                                                                        esc_attr( $product_id ),
                                                                        esc_attr( $_product->get_sku() )
                                                                    ),
                                                                    $cart_item_key
                                                                );
                                                            ?>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                } else { ?>
                                                    <tr>
                                                        No product is your cart...
                                                    </tr>
                                                <?php
                                                    }
                                            }
                                        ?>

                                        <?php do_action( 'woocommerce_cart_contents' ); ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="7" class="actions">
                                                <div class="cart-actions text-end p-3">
                                                    <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>
                                                </div><!--cart-actions-->

                                                <?php if ( wc_coupons_enabled() ) { ?>
                                                    <div class="coupon cart-actions d-flex justify-content-between border-top p-3">
                                                        <div class="form-group text-start" style="width: 80%;">
                                                            <label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> &nbsp;&nbsp;
                                                            <input type="text" name="coupon_code" class="contact-fields input-text w-50" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> 
                                                        </div><!--form-group-->
                                                        <button type="submit" class="border-0" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
                                                        <?php do_action( 'woocommerce_cart_coupon' ); ?>
                                                    </div>
                                                <?php } ?>

                                                <?php do_action( 'woocommerce_cart_actions' ); ?>

                                                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                                            </td>
                                        </tr>

                                        <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                                    </tfoot>
                                </table>
                                <?php do_action( 'woocommerce_after_cart_table' ); ?>
                            </form>
                            <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
                        </div><!--table-responsive-->
                    </div><!--col-lg-8-->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card text-dark p-3">
                            <?php
                                /**
                                 * Cart collaterals hook.
                                 *
                                 * @hooked woocommerce_cross_sell_display
                                 * @hooked woocommerce_cart_totals - 10
                                 */
                                do_action( 'woocommerce_cart_collaterals' );
                            ?>
                            <?php do_action( 'woocommerce_after_cart' ); ?>
                            <div class="cart-actions text-center pb-3">
                                <a href="<?php echo get_home_url(); ?>/shop" class="button" style="font-size: 1.25em; padding: 10px 50px;">Continue Shopping</a>
                            </div><!--cart-actions-->
                        </div><!--card-->
                    </div><!--col-lg-4-->
                </div><!--row-->
            </div><!--cart-inner-->
        </div><!--container-->
    </section>
    <!-- cart section end -->

<?php
get_footer();