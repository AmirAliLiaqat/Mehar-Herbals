<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meharHerbals
 */

?>

	<!-- footer start -->
	<footer>
        <div class="top-footer">
            <div class="container">
                <div class="row text-white">
                    <div class="col-lg-4 col-sm-12 p-3 text-center">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-white.png" style="width: 100%;"></a>
                    </div><!--col-lg-4-->
                    <div class="col-lg-4 col-sm-12 p-3" style="background-color: rgba(131, 214, 37, 0.69);">
                        <form action="" method="post">
                            <i class="fa-regular fa-envelope"></i>
                            <input type="text" name="subscribe_input" class="subscribe_input" placeholder="Email address">
                            <button class="subscribe_btn" name="subscribe_btn">Submit</button>
                        </form>
                    </div><!--col-lg-4-->
                    <div class="col-lg-4 col-sm-12 p-3">
                        <div class="social-links text-end p-3">
                            <a href="#" class="links mx-3"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="links mx-3"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="links mx-3"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="links mx-3"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" class="links mx-3"><i class="fa-brands fa-instagram"></i></a>
                        </div><!--social-links-->
                    </div><!--col-lg-4-->
                </div><!--row-->
            </div><!--container-->
        </div><!--top-footer-->

        <div class="main-footer">
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-4 col-sm-12 footer-col-1 p-3">
                        <h5 class="site_font">About Us</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi tempore illo veritatis molestias laudantium unde at quasi, fuga alias necessitatibus voluptatibus aliquam in odit! Culpa.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, asperiores!</p>
                    </div><!--col-lg-4-->
                    <div class="col-lg-4 col-sm-12 footer-col-2 p-3">
                        <h5 class="site_font">Useful Links</h5>
                        <?php 
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
                    </div><!--col-lg-4-->
                    <div class="col-lg-4 col-sm-12 footer-col-3 p-3">
                        <h5 class="site_font">Contact Us</h5>
                        <p>Address: H0# 321 St#11 Koh-e-Noor Housing Society Lahore, Pakistan.</p>
                        <p>Email: amirliaqat2020@gmail.com</p>
                        <p>Phone: +92 03090886518</p>
                    </div><!--col-lg-4-->
                </div><!--row-->
            </div><!--container-->
        </div><!--main-footer-->

        <div class="bottom-footer">
            <div class="container">
                <div class="row text-white p-2">
                    <div class="col-lg-4 col-sm-12-1 p-2">
                        <p class="mb-0">© 2022 All Rights Reserved</p>
                    </div><!--col-lg-4-->
                    <div class="col-lg-4 col-sm-12 text-center p-2">
                        <a href="#top" class="back_to_top"><i class="fa fa-angle-up"></i></a>
                    </div><!--col-lg-4-->
                    <div class="col-lg-4 col-sm-12 p-2">
                        <a href="<?php echo get_home_url(); ?>/privacy-policy" class="text-white">Privacy Policy</a>
                        <a href="<?php echo get_home_url(); ?>/terms-conditions" class="text-white">Terms & Conditions</a>
                        <a href="<?php echo get_home_url(); ?>/faq" class="text-white">FAQ</a>
                    </div><!--col-lg-4-->
                </div><!--row-->
            </div><!--container-->
        </div><!--bottom-footer-->
    </footer>
    <!-- footer end -->

    <?php wp_footer(); ?>

</body>
</html>
