<?php
/**
 * Template Name: View Product
 * 
 * @package meharHerbals
 */

get_header();
?>

    <?php
        // this template code comes from template-parts/content-page
        get_template_part( 'template-parts/content', 'page' );
    ?>

    <!-- view product section start -->
    <section class="view-product">
        <div class="container">
            <div class="row border-bottom py-5">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="product-image-section slider-for">
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                        </div><!--product-image-->
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                        </div><!--product-image-->
                        <div class="product-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                        </div><!--product-image-->
                    </div><!--product-image-section-->
                    <div class="product-image-section slider-nav m-3">
                        <div class="product-image border m-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%; padding: 10px;">
                        </div><!--product-image-->
                        <div class="product-image border m-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%; padding: 10px;">
                        </div><!--product-image-->
                        <div class="product-image border m-2">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%; padding: 10px;">
                        </div><!--product-image-->
                    </div><!--product-image-section-->
                </div><!--col-lg-5-->
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="product-meta p-3">
                        <div class="review-ratings">
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                            <i class="fa fa-star active"></i>
                        </div><!--review-ratings-->
                        <span class="site_text">5K Reviews</span>
                        <h3 class="display-4 site_font mb-3">Amla Oil</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        <div class="product-meta-content d-flex justify-content-between">
                            <div class="product-stock mx-2">
                                <p class="site_font">Avability:</p>
                                <p class="site_text">In Stock</p>
                            </div><!--product-stock-->
                            <div class="product-price mx-2">
                                <p class="site_font">Price:</p>
                                <p class="site_text">500 Rs</p>
                            </div><!--product-price-->
                            <div class="product-qty mx-2">
                                <p class="site_font">Quantity</p>
                                <div class="counter text-center">
                                    <span class="down" onclick="decreaseCount(event, this)">-</span>
                                    <input type="text" value="1">
                                    <span class="up" onclick="increaseCount(event, this)">+</span>
                                </div><!--counter-->
                            </div><!--product-qty-->
                        </div><!--product-meta-content-->
                        <div class="action my-5">
                            <a href="view-product?action=add_to_cart" class="site_btn" name="add_to_cart" tabindex="0"><i class="fa-solid fa-cart-shopping"></i> Add to cart</a>
                        </div><!--action-->
                        <div class="product-meta-tags">
                            <span>
                                <strong>Tags:</strong>
                                <a href="#" class="site_text">oils,</a>
                                <a href="#" class="site_text">Amla oils,</a>
                            </span>
                        </div><!--product-meta-tags-->
                        <div class="product-meta-category">
                            <span>
                                <strong>Categroy:</strong>
                                <a href="#" class="site_text">oils,</a>
                                <a href="#" class="site_text">Amla oils,</a>
                            </span>
                        </div><!--product-meta-category-->
                    </div><!--product-meta-->
                </div><!--col-lg-7-->
            </div><!--row-->

            <div class="row my-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                Description
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Specifications
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Reviews (3)
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content bg-light" id="pills-tabContent">
                        <div class="tab-pane fade p-4 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <h6 class="site_font mb-3">Description:</h6>
                            <p class="mb-0">
                                Amla oil is a natural remedy prepared from the fruit of the gooseberry tree, Phyllanthus emblica. Amla Oil enriches your hair, making them strong from inside and beautiful outside to keep you looking absolutely gorgeous all day long.
                                Is pollution and constant use of hair products making your hair dull? You need Dabur Amla Hair Oil. It strengthens your hair from within, encourages fresh growth and controls pre-mature greying. Dabur Amla Hair Oil nourishes the scalp and strengthens the hair strands, from root to tip, to give you thick, long & shiny tresses.
                            </p>
                            <h6 class="site_font my-3">Why Dabur Amla Hair Oil?</h6>
                            <ul>
                                <li>Moisturises your scalp</li>
                                <li>Prevents from any hair damage</li>
                                <li>Controls pre-mature greying of hair</li>
                                <li>Gives you glowing & healthy tresses</li>
                                <li>Enhances healthy hair growth</li>
                            </ul>
                            <h6 class="site_font mb-3">Ingredients:</h6>
                            <p>Paraffinum Liquidum, Canola Oil, Elaeis Guineensis Oil, Parfum, Phyllanthus Emblica Fruit Extract, BHT, Amyl Cinnamal, Benzyl Alcohol, Citral, Citronellol, Coumarin, Eugenol, Geraniol, Isoeugenol, Linalool, Limonene, Ci 47000, Ci 61565, Ci 26100</p>
                            <h6 class="site_font my-3">Benefits of Amla Oil:</h6>
                            <p>Potential hair and scalp benefits of amla oil include:</p>
                            <ul>
                                <li>strengthen the scalp and hair</li>
                                <li>reduce premature pigment loss from hair, or greying</li>
                                <li>stimulate hair growth</li>
                                <li>reduce hair loss</li>
                                <li>prevent or treat dandruff and dry scalp</li>
                                <li>prevent or treat parasitic hair and scalp infections, like lice infections</li>
                                <li>prevent or treat fungal and bacterial hair and scalp infections</li>
                                <li>improve overall appearance of hair</li>
                            </ul>
                        </div><!--tab-pane-->
                        <div class="tab-pane fade p-4" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <h6 class="site_font mb-3">Specifications of Dabur Amla Hair Oil -100ml</h6>
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td>SKU</td>
                                        <td>139384102_PK-1299328859</td>
                                    </tr>
                                    <tr>
                                        <td>Hair Type</td>
                                        <td>Not Specified</td>
                                    </tr>
                                    <tr>
                                        <td>Pack Type</td>
                                        <td>Single Item</td>
                                    </tr>
                                    <tr>
                                        <td>Country of origin</td>
                                        <td>Pakistan</td>
                                    </tr>
                                    <tr>
                                        <td>Express delivery</td>
                                        <td>Lahore</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!--tab-pane-->
                        <div class="tab-pane fade p-4" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <h6 class="site_font border-bottom pb-4">There are 3 reviews.</h6>
                            <div class="customier-review my-3">
                                <ul class="list-unstyled commentlist">
                                    <li class="comment">
                                        <div class="comment-inner d-flex my-3">
                                            <div class="comment-avatar">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/user-comment03.png" alt="user" class="rounded-circle" width="80">
                                            </div><!--comment-avatar-->
                                            <div class="comment-content px-3">
                                                <div class="comment-meta">
                                                    <div class="review-ratings">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!--review-ratings-->
                                                  <span class="comment-author site_font"> <a href="#" class="url mx-0">Rosalina Pong</a></span>
                                                </div><!--comment-meta-->
                                                <div class="text">
                                                    <div class="comment-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat.</p>
                                                        <span class="reply">
                                                            <a rel="nofollow" class="comment-reply-link site_text" href="#">
                                                                <i class="fa fa-reply"></i> Reply
                                                            </a> 
                                                        </span>
                                                    </div><!--comment-text-->
                                                </div><!--text-->
                                            </div><!--comment-content-->
                                        </div><!--comment-inner-->
                                    </li>
                                    <li class="comment">
                                        <div class="comment-inner d-flex my-3">
                                            <div class="comment-avatar">
                                                <img src="<?php echo get_template_directory_uri(); ?>/images/user-comment02.png" alt="user" class="rounded-circle" width="80">
                                            </div><!--comment-avatar-->
                                            <div class="comment-content px-3">
                                                <div class="comment-meta">
                                                    <div class="review-ratings">
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star active"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div><!--review-ratings-->
                                                  <span class="comment-author site_font"> <a href="#" class="url mx-0">Rosalina Pong</a></span>
                                                </div><!--comment-meta-->
                                                <div class="text">
                                                    <div class="comment-text">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                            commodo consequat.</p>
                                                        <span class="reply">
                                                            <a rel="nofollow" class="comment-reply-link site_text" href="#">
                                                                <i class="fa fa-reply"></i> Reply
                                                            </a> 
                                                        </span>
                                                    </div><!--comment-text-->
                                                </div><!--text-->
                                            </div><!--comment-content-->
                                        </div><!--comment-inner-->
                                        <ul class="list-unstyled commentlist">
                                            <li class="comment-reply">
                                                <div class="comment-inner d-flex my-3">
                                                    <div class="comment-avatar">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/images/user-comment01.png" alt="user" class="rounded-circle" width="80">
                                                    </div><!--comment-avatar-->
                                                    <div class="comment-content px-3">
                                                        <div class="comment-meta">
                                                            <div class="review-ratings">
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star active"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div><!--review-ratings-->
                                                          <span class="comment-author site_font"> <a href="#" class="url mx-0">Rosalina Pong</a></span>
                                                        </div><!--comment-meta-->
                                                        <div class="text">
                                                            <div class="comment-text">
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                                    commodo consequat.</p>
                                                                <span class="reply">
                                                                    <a rel="nofollow" class="comment-reply-link site_text" href="#">
                                                                        <i class="fa fa-reply"></i> Reply
                                                                    </a> 
                                                                </span>
                                                            </div><!--comment-text-->
                                                        </div><!--text-->
                                                    </div><!--comment-content-->
                                                </div><!--comment-inner-->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!--customier-review-->
                            <div class="customier-review-form">
                                <div class="star-rating">
                                    <h6 class="site_font">Add Your Review</h6>
                                    <p class="mb-0">Give Rating</p>
                                    <div class="review-ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><!--review-ratings-->
                                </div><!--star-rating-->
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group my-2">
                                                <label for="name" class="form-label">Your Full Name:</label>
                                                <input type="text" class="contact-fields" name="name" placeholder="Name">
                                            </div><!--form-group-->
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group my-2">
                                                <label for="email" class="form-label">Your Email:</label>
                                                <input type="email" class="contact-fields" name="email" placeholder="Email">
                                            </div><!--form-group-->
                                        </div><!--col-lg-6-->
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="form-group my-2">
                                                <label for="email" class="form-label">Your Review:</label>
                                                <textarea name="" id="" cols="30" rows="10" class="contact-fields" placeholder="Enter your review here..."></textarea>
                                            </div><!--form-group-->
                                        </div><!--col-lg-12-->
                                    </div><!--row-->
                                    <button class="site_btn" name="submit">Submit</button>
                                </form>
                            </div><!--customier-review-form-->
                        </div><!--tab-pane-->
                    </div><!--tab-content-->
                </div><!--col-lg-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- view product section end -->

    <!-- featured products start -->
    <section class="featured-products change_bg">
        <div class="container text-center py-5">
            <h4 class="site_text display-6 mb-5">Featured Products</h4>
            <div class="row slick-slider">
                <div class="col-md-12 m-3">
                    <div class="shop-inner">
                        <div class="shop-inner-most text-center bg-white py-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="shop.html?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                        <div class="shop-actions">
                            <a href="view-product"><i class="fa-solid fa-eye"></i></a>
                            <a href="shop.html?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                        </div><!--shop-actions-->
                    </div><!--shop-inner-->
                </div><!--col-lg-12-->
                <div class="col-md-12 m-3">
                    <div class="shop-inner">
                        <div class="shop-inner-most text-center bg-white py-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="shop.html?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                        <div class="shop-actions">
                            <a href="view-product"><i class="fa-solid fa-eye"></i></a>
                            <a href="shop.html?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                        </div><!--shop-actions-->
                    </div><!--shop-inner-->
                </div><!--col-lg-12-->
                <div class="col-md-12 m-3">
                    <div class="shop-inner">
                        <div class="shop-inner-most text-center bg-white py-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="shop.html?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                        <div class="shop-actions">
                            <a href="view-product"><i class="fa-solid fa-eye"></i></a>
                            <a href="shop.html?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                        </div><!--shop-actions-->
                    </div><!--shop-inner-->
                </div><!--col-lg-12-->
                <div class="col-md-12 m-3">
                    <div class="shop-inner">
                        <div class="shop-inner-most text-center bg-white py-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="shop.html?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                        <div class="shop-actions">
                            <a href="view-product"><i class="fa-solid fa-eye"></i></a>
                            <a href="shop.html?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                        </div><!--shop-actions-->
                    </div><!--shop-inner-->
                </div><!--col-lg-12-->
                <div class="col-lg-12 m-3">
                    <div class="shop-inner">
                        <div class="shop-inner-most text-center bg-white py-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                            <a href="shop.html?action=add_to_cart" class="shop_btn my-5" name="add_to_cart">Add to cart</a>
                        </div><!--shop-inner-most-->
                        <div class="shop-actions">
                            <a href="view-product"><i class="fa-solid fa-eye"></i></a>
                            <a href="shop.html?action=add_to_wishlist"><i class="fa-solid far fa-heart"></i></a>
                        </div><!--shop-actions-->
                    </div><!--shop-inner-->
                </div><!--col-lg-12-->
            </div><!--row-->
        </div><!--container-->            
    </section><!--featured-products-->
    <!-- featured products end -->

<?php
get_footer();