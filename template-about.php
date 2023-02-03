<?php
/**
 * Template Name: About
 * 
 * @package meharHerbals
 */

get_header();
?>

    <?php
        // this template code comes from template-parts/content-page
        get_template_part( 'template-parts/content', 'page' );
    ?>

    <!-- about section start -->
    <section class="about-section py-5">
        <div class="container py-5">
            <h4 class="site_text display-6 text-center">Our Brand</h4>
            <h3 class="display-5 text-center py-2">About our Lagendary <br> Histroy</h3>
            <div class="row mb-5">
                <div class="col-lg-6 col-sm-12 text-end p-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                </div><!--col-lg-6-->
                <div class="col-lg-6 col-sm-12 p-5">
                    <h3 class="display-4 py-2">We are Different in Herbal Industry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. eaque ipsa quae incididunt ut labore et dolore magna aliqua nulla pariatur.</p>
                    <ul class="list-unstyled about-list mb-5">
                        <li><span><i class="fas fa-check"></i></span> Cost Effective</li>
                        <li><span><i class="fas fa-check"></i></span> Insured and Bonded</li>
                        <li><span><i class="fas fa-check"></i></span> 100% Satisfaction </li>
                        <li><span><i class="fas fa-check"></i></span> Quality Services</li>
                    </ul>
                    <a href="about.html" class="site_btn">Order Now</a>
                </div><!--col-lg-6-->
            </div><!--row-->
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="about-inner text-center bg-white p-5">
                        <h4 class="my-3">Our Vision</h4>
                        <p class="pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis est consectetur, vitae earum non, perspiciatis voluptatum fugiat culpa quam odio nulla voluptatibus, at reiciendis dolorem ipsa mollitia tenetur doloribus itaque.</p>
                        <a href="" class="read_more"><span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div><!--about-inner-->
                </div><!--col-4-->
                <div class="col-lg-4 col-sm-12">
                    <div class="about-inner text-center bg-white p-5">
                        <h4 class="my-3">Our Approach</h4>
                        <p class="pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis est consectetur, vitae earum non, perspiciatis voluptatum fugiat culpa quam odio nulla voluptatibus, at reiciendis dolorem ipsa mollitia tenetur doloribus itaque.</p>
                        <a href="" class="read_more"><span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div><!--about-inner-->
                </div><!--col-4-->
                <div class="col-lg-4 col-sm-12">
                    <div class="about-inner text-center bg-white p-5">
                        <h4 class="my-3">Our Mission</h4>
                        <p class="pb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis est consectetur, vitae earum non, perspiciatis voluptatum fugiat culpa quam odio nulla voluptatibus, at reiciendis dolorem ipsa mollitia tenetur doloribus itaque.</p>
                        <a href="" class="read_more"><span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div><!--about-inner-->
                </div><!--col-4-->
            </div><!--row-->
        </div><!--container-->            
    </section><!--about-section-->
    <!-- about section end -->

    <!-- about banner section start -->
    <section class="about-banner">
        <div class="about-banner-inner text-white text-center py-3">
            <h3 class="display-5 py-4 mt-5">We Promised</h3>
            <p style="width: 40%; margin: 0 auto;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/signature.png" class="my-4">
            <h4>Founder & CEO</h4>
        </div><!--about-banner-inner-->
    </section><!--about-banner-->
    <!-- about banner section end -->

    <!-- testimonial section start -->
    <section class="about-us">
        <div class="container my-3">
            <div class="row">
                <div class="col-lg-6 col-sm-12 p-5">
                    <h4 class="site_text display-6">HAPPY CLIENTS</h4>
                    <h3 class="display-4 py-2">Client Say's About Our Product</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div><!--col-lg-6-->
                <div class="col-lg-6 col-sm-12 p-5">
                    <div id="carouselExampleIndicators" class="carousel slide testimonial-carousel" data-bs-ride="true">
                        <div class="carousel-indicators testimonial">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div><!--carousel-indicators---->
                        <div class="carousel-inner testimonial-inner">
                            <div class="carousel-item active">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="carousel-profile d-flex">
                                    <!-- <img src="images/Sativa.png" class=""> -->
                                    <span class="read_more mx-2"><i class="fa-solid fa-chevron-right"></i></span>&nbsp;
                                    <h5>Kebin Piterson <br> <span class="site_text">Founder, uithemes</span></h5>
                                </div><!--carousel-profile-->
                            </div><!--carousel-item-->
                            <div class="carousel-item">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="carousel-profile d-flex">
                                    <!-- <img src="images/Sativa.png" class=""> -->
                                    <span class="read_more mx-2"><i class="fa-solid fa-chevron-right"></i></span>&nbsp;
                                    <h5>Kebin Piterson <br> <span class="site_text">Founder, uithemes</span></h5>
                                </div><!--carousel-profile-->
                            </div><!--carousel-item-->
                            <div class="carousel-item">
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <i class="fa fa-star active"></i>
                                <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                <div class="carousel-profile d-flex">
                                    <!-- <img src="images/Sativa.png" class=""> -->
                                    <span class="read_more mx-2"><i class="fa-solid fa-chevron-right"></i></span>&nbsp;
                                    <h5>Kebin Piterson <br> <span class="site_text">Founder, uithemes</span></h5>
                                </div><!--carousel-profile-->
                            </div><!--carousel-item-->
                        </div><!--carousel-inner-->
                    </div><!--carousel-->
                </div><!--col-lg-6-->
            </div><!--row-->
        </div><!--container-->
    </section><!--about-us-->
    <!-- testimonial section end -->

    <!-- team section start -->
    <section class="team-section change_bg">
        <div class="container py-5">
            <h4 class="site_text display-6 text-center">Our Team</h4>
            <h3 class="display-4 text-center py-2">Team Of Professionals</h3>
            <div class="row mt-3">
				<?php 
                    $our_team = new WP_Query( array(
                        'post_type' => 'team',
                        'posts_per_page' => 6,
                        'order' => 'ASC'
                        )
                    ); 
                    if($our_team->have_posts()) :
                        while($our_team->have_posts()) :
                            $our_team->the_post();
				?>
                <div class="col-lg-4 col-sm-12 my-3">
                    <div class="team-inner p-2">
                        <?php the_post_thumbnail('small'); ?>
                        <h5 class="display-6 title mb-0 py-2"><?php the_title(); ?></h3>
                        <?php echo strip_tags(the_excerpt()); ?>
                    </div><!--team-inner-->
                </div><!--col-lg-4-->
				<?php endwhile; ?>
				<?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div><!--row-->
        </div><!--container-->            
    </section><!--team-section-->
    <!-- team section end -->

<?php
get_footer();