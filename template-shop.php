<?php
/**
 * Template Name: Shop
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

    <!-- shop section start -->
    <section class="shop">
        <div class="container py-5">
            <div class="row py-5">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php get_template_part( 'template-parts/sidebar', 'shop' ); ?>
                </div><!--col-lg-4-->

                <div class="col-lg-8 col-md-8 col-sm-12">

                    <div class="row px-3 my-2">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <form action="" method="post">
                                <select name="filter" class="select">
                                    <option value="1">Sort By</option>
                                    <option value="2">Price</option>
                                    <option value="3">Latest</option>
                                    <option value="4">Rating</option>
                                </select>
                            </form>
                        </div><!--col-lg-4-->
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <p>Showing all 12 results</p>
                        </div><!--col-lg-4-->
                    </div><!--row-->

                    <div class="row my-3">
                        <?php
                            if(isset($_POST['add-to-cart'])) {

                                $product_id = $_POST['add-to-cart'];
                                $product = wc_get_product($product_id);
                                $product_name = $product->get_name();

                                echo '<div class="woocommerce-notices-wrapper">
                                    <div class="woocommerce-message" role="alert">
                                        <a href="cart" tabindex="1" class="button wc-forward wp-element-button">View cart</a> 
                                        '.$product_name.' have been added to your cart.
                                    </div><!--woocommerce-message-->
                                </div><!--woocommerce-notices-wrapper-->';
                            }

                            $shop_product = new WP_Query( array(
                                'post_type' => 'product',
                                'posts_per_page' => 12,
                                'order' => 'ASC'
                                )
                            ); 
                            if($shop_product->have_posts()) :
                                while($shop_product->have_posts()) :
                                    $shop_product->the_post();
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="shop-inner my-2">
                                <div class="shop-inner-most text-center py-5">
                                    <?php the_post_thumbnail('small'); ?>
                                    <h4 class="my-3">
                                        <?php the_title(); ?>
                                    </h4>
                                    <p class="site_text mb-2">
                                        <?php 
                                            $product_id = get_the_ID();
                                            $product = wc_get_product($product_id);
                                            echo $product->get_price_html();
                                        ?>
                                    </p>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="quantity">
                                            <label class="screen-reader-text" for="quantity_6380bf878747c"><?php echo $product->get_name(); ?></label>
                                            <div class="counter text-center">
                                                <span class="down" onclick="decreaseCount(event, this)">-</span>
                                                <input type="text" id="quantity_6380bf878747c" class="" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                                <span class="up" onclick="increaseCount(event, this)">+</span>
                                            </div><!--counter-->
                                        </div><!--quantity-->
                                        <button type="submit" name="add-to-cart" value="<?php echo get_the_ID(); ?>" class="shop_btn mt-2">Add to cart</button>
                                    </form>
                                </div><!--shop-inner-most-->
                                <div class="shop-actions">
                                    <a href="<?php echo get_permalink(); ?>"><i class="fa-solid fa-eye"></i></a>
                                    <a href="<?php echo get_home_url(); ?>/shop?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                                </div><!--shop-actions-->
                            </div><!--shop-inner-->
                        </div><!--col-lg-4-->
                        <?php endwhile; endif; ?>
                        <?php wp_reset_postdata(); ?>
                        <div class="pagination_wrap mt-5">
                            <div class="pagination justify-content-center">
                                <?php 
                                    echo paginate_links( array(
                                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                        'total'        => $shop_product->max_num_pages,
                                        'current'      => max( 1, get_query_var( 'paged' ) ),
                                        'format'       => '?paged=%#%',
                                        'show_all'     => false,
                                        'type'         => 'plain',
                                        'end_size'     => 2,
                                        'mid_size'     => 1,
                                        'prev_next'    => true,
                                        'prev_text'    => sprintf( '<i></i> %1$s', __( '« Previous', 'meharHerbals' ) ),
                                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Next »', 'meharHerbals' ) ),
                                        'add_args'     => false,
                                        'add_fragment' => '',
                                    ) );
                                ?>
                            </div><!--pagination-->
                        </div><!--pagination_wrap-->
                    </div><!--row-->
                </div><!--col-lg-8-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- shop section end -->
    
    <!-- featured products start -->
    <section class="featured-products change_bg">
        <div class="container text-center py-5">
            <h4 class="site_text display-6 mb-5">Featured Products</h4>
            <div class="row slick-slider">
                <?php
                    $shop_product = new WP_Query( array(
                        'post_type' => 'product',
                        'posts_per_page' => 12,
                        'order' => 'ASC'
                        )
                    ); 
                    if($shop_product->have_posts()) :
                        while($shop_product->have_posts()) :
                            $shop_product->the_post();

                            $product_id = get_the_ID();
                            $_product = wc_get_product($product_id);
                ?>
                <div class="col-md-12 m-3">
                    <div class="shop-inner">
                        <div class="shop-inner-most text-center bg-white py-5">
                            <?php the_post_thumbnail('small'); ?>
                            <h4 class="my-3"><?php echo $_product->get_name(); ?></h4>
                            <p class="site_text mb-2">
                                <?php
                                    echo $_product->get_price_html();
                                ?>
                            </p>
                            <form method="post" enctype="multipart/form-data">
                                <div class="quantity">
                                    <label class="screen-reader-text" for="quantity_6380bf878747c"><?php echo $product->get_name(); ?></label>
                                    <div class="counter text-center">
                                        <span class="down" onclick="decreaseCount(event, this)">-</span>
                                        <input type="text" id="quantity_6380bf878747c" class="" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric" autocomplete="off">
                                        <span class="up" onclick="increaseCount(event, this)">+</span>
                                    </div><!--counter-->
                                </div><!--quantity-->
                                <button type="submit" name="add-to-cart" value="<?php echo get_the_ID(); ?>" class="shop_btn mt-2">Add to cart</button>
                            </form>
                        </div><!--shop-inner-most-->
                        <div class="shop-actions">
                            <a href="<?php echo get_permalink(); ?>"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?php echo get_home_url(); ?>/shop?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                        </div><!--shop-actions-->
                    </div><!--shop-inner-->
                </div><!--col-lg-12-->
                <?php endwhile; endif; ?>
                <?php wp_reset_postdata(); ?>
            </div><!--row-->
        </div><!--container-->            
    </section>
    <!-- featured products end -->

<?php
get_footer();