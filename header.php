<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package meharHerbals
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

	<!-- header section start -->
	<header id="top">
        <div class="top-header">
            <div class="container">
                    <div class="row py-2">
                        <div class="col-lg-6 col-sm-12">
                            <div class="contact-details">
                                <p class="d-inline-block"><i class="fa-solid fa-phone-flip"></i> +92 03090886518 &nbsp;&nbsp;</p>
                                <p class="d-inline-block"><i class="fa-solid fa-envelope"></i> amirliaqat2020@gmail.com</p>
                            </div><!--contact-details-->
                        </div><!--col-lg-6-->
                        <div class="col-lg-6 col-sm-12">
                            <div class="social-links text-end">
                                <a href="#" class="links"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="links"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#" class="links"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="links"><i class="fa-solid fa-magnifying-glass"></i></a>
                                <?php 
                                    if(is_user_logged_in()) { 
                                        $current_user = wp_get_current_user();
                                        $username = $current_user->user_login;
                                          
                                ?>
                                <div class="dropdown d-inline-block">
                                    <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?php echo "Hello, " . $username; ?>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item top-header-dropdown mx-0" href="<?php echo get_home_url(); ?>/my-account/">Profile</a></li>
                                    <li><a class="dropdown-item top-header-dropdown mx-0" href="<?php echo wp_logout_url( get_home_url().'/login/' ); ?>">Logout</a></li>
                                    </ul>
                                </div><!--dropdown-->
                                <?php } else { ?>
                                <div class="dropdown d-inline-block">
                                    <button class="btn text-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-user"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item top-header-dropdown mx-0" href="<?php echo get_home_url(); ?>/register">Register</a></li>
                                    <li><a class="dropdown-item top-header-dropdown mx-0" href="<?php echo get_home_url(); ?>/login">Login</a></li>
                                    </ul>
                                </div><!--dropdown-->
                                <?php } ?>
                            </div><!--social-links-->
                        </div><!--col-lg-6-->
                    </div><!--row-->
            </div><!--container-->
        </div><!--top-header-->
        <div class="main-header">
            <div class="container">
                <div class="main-header-inner header-inner py-4">
                    <div class="left-nav-menu" style="width: 30%;">
						<?php if(has_custom_logo()) { the_custom_logo(); } else { echo get_bloginfo('name'); } ?>
                    </div><!--left-nav-menu-->
                    <div class="right-nav-menu" style="width: 70%;">
						<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
						?>
                    </div><!--right-nav-menu-->
                </div><!--main-header-inner-->
                <div class="sub-header">
                    <div class="sub-header d-flex justify-content-between py-2">
                        <div class="menu">
                            <button class="btn border" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                <i class="fa-solid fa-2x fa-bars"></i>
                            </button>
    
                            <div class="offcanvas offcanvas-start p-3" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                                <div class="offcanvas-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div><!--offcanvas-header-->
                                <div class="offcanvas-body">
                                    <?php 
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'menu-1',
                                                'menu_id'        => 'primary-menu',
                                            )
                                        );
                                    ?>
                                </div><!--offcanvas-body-->
                            </div><!--offcanvas-->
                        </div><!--menu-->
                        <div class="brand text-center w-50">
                            <!-- <a href="index.php"><img src="images/logo.png" alt="logo" style="width: 50%;"></a> -->
                        </div><!--brand-->
                        <div class="shop-icons">
                            <a href="<?php echo get_home_url(); ?>/cart">
                                <i class="fa-solid fa-cart-shopping fa-2x"></i>
                            </a>
                            <a href="<?php echo get_home_url(); ?>/wishlist">
                                <i class="fa-solid far fa-heart fa-2x"></i>
                            </a>
                        </div><!--shop-icons-->
                    </div><!--sub-header-->
                </div><!--sub-header-->
            </div><!--container-->
        </div><!--main-header-->
    </header>
    <!-- header section end -->
