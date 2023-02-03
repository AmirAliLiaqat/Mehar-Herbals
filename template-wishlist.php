<?php
/**
 * Template Name: Wishlist
 * 
 * @package meharHerbals
 */

get_header();
?>

    <?php
        // this template code comes from template-parts/content-page
        get_template_part( 'template-parts/content', 'page' );
    ?>

    <!-- wishlist section start -->
    <section class="wishlist">
        <div class="container mb-5">
            <div class="title text-center my-5">
                <h4 class="site_text display-6">Shopping</h4>
                <h3 class="display-4 py-2">Wishlist</h3>
            </div><!--title-->
            <div class="row my-3">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="shop-inner my-2">
                        <div class="shop-inner-most text-center py-5">
                            <div class="action text-end">
                                <a href="whishlist.php?action=remove_from_wishlist" class="site_text"><i class="fa-solid far fa-heart fa-2x"></i></a>
                            </div><!--shop-actions-->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="wishlist.php?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                    </div><!--shop-inner-->
                </div><!--col-lg-4-->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="shop-inner my-2">
                        <div class="shop-inner-most text-center py-5">
                            <div class="action text-end">
                                <a href="whishlist.php?action=remove_from_wishlist" class="site_text"><i class="fa-solid far fa-heart fa-2x"></i></a>
                            </div><!--shop-actions-->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="wishlist.php?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                    </div><!--shop-inner-->
                </div><!--col-lg-4-->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="shop-inner my-2">
                        <div class="shop-inner-most text-center py-5">
                            <div class="action text-end">
                                <a href="whishlist.php?action=remove_from_wishlist" class="site_text"><i class="fa-solid far fa-heart fa-2x"></i></a>
                            </div><!--shop-actions-->
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="wishlist.php?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                    </div><!--shop-inner-->
                </div><!--col-lg-4-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- wishlist section end -->

<?php
get_footer();