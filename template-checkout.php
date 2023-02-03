<?php
/**
 * Template Name: Checkout
 * 
 * @package meharHerbals
 */

get_header();
defined( 'ABSPATH' ) || exit;
?>

    <?php
        // this template code comes from template-parts/woocommerce-content-page
        get_template_part( 'template-parts/woocommerce-content', 'page' );
    ?>

    <!-- checkout section start -->
    <section class="checkout">
        <div class="container mb-5">
            <div class="title text-center my-5">
                <h4 class="site_text display-6">Shopping</h4>
                <h3 class="display-4 py-2">Checkout</h3>
            </div><!--title-->
            <div class="row my-3">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card text-dark mb-3">
                        <div class="card-header">
                            <h4 class="card-title text-uppercase">Buyer Info <a href="login.html" class="site_text float-end">Login Here</a></h4>
                        </div><!--card-header-->
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="row form-group px-3">
                                    <label for="fname" class="col-sm-4 form-label p-3">First Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="fname">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="lname" class="col-sm-4 form-label p-3">Last Name:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="lname">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="address1" class="col-sm-4 form-label p-3">Address 1:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="address1">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="address2" class="col-sm-4 form-label p-3">Address 2:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="address2">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="city" class="col-sm-4 form-label p-3">City:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="city">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="postal_code" class="col-sm-4 form-label p-3">Postal Code:</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="contact-fields bg-light" name="postal_code">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="state" class="col-sm-4 form-label p-3">State:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="state">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                                <div class="row form-group px-3">
                                    <label for="country" class="col-sm-4 form-label p-3">Country:</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="contact-fields bg-light" name="country">
                                    </div><!--col-sm-8-->
                                </div><!--row-->
                            </form>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-6-->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card text-dark mb-3">
                        <div class="card-header">
                            <h4 class="card-title text-uppercase">Billing Details</h4>
                        </div><!--card-header-->
                        <div class="card-body">
                          <p class="card-text">
                            Subtotal (12 items)
                            <span class="site_text float-end">Rs. 6000</span>
                          </p>
                          <p class="card-text">
                            Shipping Fee
                            <span class="site_text float-end">Rs. 99</span>
                          </p>
                        </div><!--card-body-->
                        <div class="card-footer">
                            <h6 class="card-title">
                                Total
                                <span class="site_text float-end">Rs. 6099</span>
                            </h6>
                        </div><!--card-footer-->
                    </div><!--card-->
                    <div class="card text-dark mb-3">
                        <div class="card-header">
                            <h4 class="card-title text-uppercase">Payment Methods</h4>
                        </div><!--card-header-->
                        <div class="card-body p-5">
                            <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="payment-cards">
                                <a href="#"><i class="fa-brands fa-3x fa-cc-paypal"></i></a>
                                <a href="#"><i class="fa-brands fa-3x fa-cc-stripe"></i></a>
                                <a href="#"><i class="fa-brands fa-3x fa-cc-visa"></i></a>
                                <a href="#"><i class="fa-brands fa-3x fa-cc-mastercard"></i></a>
                                <a href="#"><i class="fa-brands fa-3x fa-cc-amex"></i></i></a>
                            </div><!--payment-cards-->
                            <div class="payment-card-form my-4">
                                <form method="post">
                                    <table>
                                        <tbody>
                                            <tr class="form-group">
                                                <td>
                                                    <label for="card_number" class="form-label">Card Number:</label>
                                                </td>
                                                <td colspan="3">
                                                    <input type="text" class="contact-fields bg-light my-3" name="card_number">
                                                </td>
                                            </tr>
                                            <tr class="form-group">
                                                <td>
                                                    <label for="ccv" class="form-label">CCV:</label>
                                                </td>
                                                <td colspan="3">
                                                    <input type="text" class="contact-fields bg-light my-3" name="ccv">
                                                </td>
                                            </tr>
                                            <tr class="form-group">
                                                <td>
                                                    <label for="month" class="form-label">Month:</label>
                                                </td>
                                                <td>
                                                    <input type="number" class="contact-fields bg-light my-3" name="month">
                                                </td>
                                                <td>
                                                    <label for="year" class="form-label mx-2">Year:</label>
                                                </td>
                                                <td>
                                                    <input type="number" class="contact-fields bg-light my-3" name="year">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                  </form>
                            </div><!--payment-card-from-->
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-lg-6-->
                <div class="col-xl-12 col-lg-12">
                    <div class="text-end my-5">
                        <button class="site_btn" name="place_order">Place Order</button>
                    </div><!--text-end-->
                </div><!--col-xl-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- checkout section end -->

<?php
get_footer();