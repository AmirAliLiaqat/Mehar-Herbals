<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package meharHerbals
 */

get_header();
?>

	<!-- slider section start -->
    <section class="slider">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
            <div class="carousel-indicators slider">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div><!--carousel-indicators-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider_1.png" class="d-block w-100">
                    <div class="carousel-caption d-md-block">
                        <h2 class="display-4">Welcome to Mehar Herbals</h2>
                        <h1 class="display-1 text-capitalize mb-5">Marijuana is the dried leaves & flowers</h1>
                        <a href="<?php echo get_home_url(); ?>/blog" class="site_btn">Explore More</a>
                    </div><!--carousel-caption-->
                </div><!--carousel-item-->
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slider_2.png" class="d-block w-100">
                    <div class="carousel-caption d-md-block">
                        <h2 class="display-4">Welcome to Mehar Herbals</h2>
                        <h1 class="display-1 text-capitalize mb-5">Cannabis is the dried leaves & flowers</h1>
                        <a href="<?php echo get_home_url(); ?>/blog" class="site_btn">Explore More</a>
                    </div><!--carousel-caption-->
                </div><!--carousel-item-->
            </div><!--carousel-inner-->
        </div><!--carousel-->
    </section>
    <!-- slider section end -->

    <!-- about us section start -->
    <section class="about-us">
        <div class="container my-3">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-end p-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                </div><!--col-lg-6-->
                <div class="col-lg-6 col-sm-12 p-5">
                    <h4 class="site_text display-6">What is Mehar Herbals?</h4>
                    <h3 class="display-4 py-2">Mehar Herbals is the herbals products making company.</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                    <p class="mb-5">but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                    <a href="<?php echo get_home_url(); ?>/about" class="site_btn">Learn More</a>
                </div><!--col-lg-6-->
            </div><!--row-->
        </div><!--container-->
    </section><!--about-us-->
    <!-- about us section end -->

    <!-- services section start -->
    <section class="services-section change_bg">
        <div class="container text-center py-5">
            <h4 class="site_text display-6">Services</h4>
            <h3 class="display-4 py-2">The Guide Is To Familiarize <br> You With Mehar Herbals</h3>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="services-inner text-center bg-white p-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Sativa.png">
                        <h4 class="my-3">Unique Products</h4>
                        <p class="pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus earum sint fuga quia harum, reiciendis sapiente minima aperiam? Explicabo, beatae.</p>
                        <a href="" class="read_more"><span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div><!--services-inner-->
                </div><!--col-4-->
                <div class="col-lg-4 col-sm-12">
                    <div class="services-inner text-center bg-white p-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Sativa.png">
                        <h4 class="my-3">Money Back Grienty</h4>
                        <p class="pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus earum sint fuga quia harum, reiciendis sapiente minima aperiam? Explicabo, beatae.</p>
                        <a href="" class="read_more"><span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div><!--services-inner-->
                </div><!--col-4-->
                <div class="col-lg-4 col-sm-12">
                    <div class="services-inner text-center bg-white p-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Sativa.png">
                        <h4 class="my-3">24/7 Support</h4>
                        <p class="pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus earum sint fuga quia harum, reiciendis sapiente minima aperiam? Explicabo, beatae.</p>
                        <a href="" class="read_more"><span><i class="fa-solid fa-chevron-right"></i></span></a>
                    </div><!--services-inner-->
                </div><!--col-4-->
            </div><!--row-->
        </div><!--container-->            
    </section><!--services-section-->
    <!-- services section end -->

    <!-- oil detail section start -->
    <section class="oil-detail">
        <div class="container my-3">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-end p-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 80%; height:100%;">
                </div><!--col-lg-6-->
                <div class="col-lg-6 col-sm-12 p-5">
                    <h4 class="site_text display-6">Best Product</h4>
                    <h3 class="display-4 py-2">Mehar Herbals Amla Oil 100% Natural</h3>
                    <p>Amla oil is a natural remedy prepared from the fruit of the gooseberry tree, Phyllanthus emblica. Is pollution and constant use of hair products making your hair dull? You need Dabur Amla Hair Oil. It strengthens your hair from within, encourages fresh growth and controls pre-mature greying. Dabur Amla Hair Oil nourishes the scalp and strengthens the hair strands, from root to tip, to give you thick, long & shiny tresses.</p>
                    <p class="mb-5">Amla oil is most commonly used to promote hair and scalp health, but amla oil has many other uses. Common uses of amla oil include:</p>
                    <a href="<?php echo get_home_url(); ?>/shop" class="site_btn">Read More</a>
                </div><!--col-lg-6-->
            </div><!--row-->
        </div><!--container-->
    </section><!--oil-detail-->
    <!-- oil detail section end -->

    <!-- banner section start -->
    <section class="banner">
        <div class="banner-inner text-white text-center">
            <span class="pause_logo"><i class="fa-solid fa-play"></i></span>
            <h3 class="display-5 py-4 mt-5">Indica Strains Have A Different Range Of Effects <br> On The Body And Mind Than Sativa Strain</h3>
        </div><!--banner-inner-->
    </section><!--banner-->
    <!-- banner section end -->

    <!-- products section start -->
    <section class="products-section">
        <div class="container text-center py-5">
            <h4 class="site_text display-6">Our Products</h4>
            <h3 class="display-4 py-2">Our Unique and 100% natural <br> oil products</h3>
            <ul class="list-unstyled my-5 product-toggle justify-content-center">
                <li style="height: 70px;"><a href="#category=all-products" class="site_btn site_btn_outline">All Products</a></li>
                <li style="height: 70px;"><a href="#category=oils" class="site_btn">Oils</a></li>
                <li style="height: 70px;"><a href="#category=soaps" class="site_btn site_btn_outline">Soaps</a></li>
            </ul>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="products-inner text-center bg-white my-2 p-4">
                        <div class="products-inner-most">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <span class="site_text d-block my-3">Oils</span>
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                        </div><!--products-inner-most-->
                        <a href="#action=add_to_cart" class="site_btn add_to_cart" name="add_to_cart">Add to cart</a>
                    </div><!--products-inner-->
                </div><!--col-4-->
                <div class="col-lg-4 col-sm-12">
                    <div class="products-inner text-center bg-white my-2 p-4">
                        <div class="products-inner-most">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <span class="site_text d-block my-3">Oils</span>
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                        </div><!--products-inner-most-->
                        <a href="#action=add_to_cart" class="site_btn add_to_cart" name="add_to_cart">Add to cart</a>
                    </div><!--products-inner-->
                </div><!--col-4-->
                <div class="col-lg-4 col-sm-12">
                    <div class="products-inner text-center bg-white my-2 p-4">
                        <div class="products-inner-most">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/amla-oil.png" style="width: 100%;">
                            <span class="site_text d-block my-3">Oils</span>
                            <h4 class="my-3">Amla Oil</h4>
                            <p class="site_price">$45.00</p>
                        </div><!--products-inner-most-->
                        <a href="#action=add_to_cart" class="site_btn add_to_cart" name="add_to_cart">Add to cart</a>
                    </div><!--products-inner-->
                </div><!--col-4-->
            </div><!--row-->
            <div class="my-5"><a href="store.html" class="site_btn">Visit Store</a></div>
        </div><!--container-->            
    </section><!--products-section-->
    <!-- products section end -->

    <!-- posts section start -->
    <section class="posts-section change_bg">
        <div class="container py-5">
            <h4 class="site_text display-6 text-center">News Feed</h4>
            <h3 class="display-4 text-center py-2 mb-5">Get Every Latest Updates</h3>
            <div class="row">
				<?php 
					while(have_posts()) :
						the_post();
				?>
                <div class="col-lg-4 col-sm-12 home-posts mb-3">
					<?php the_post_thumbnail('small'); ?>
                    <div class="post-detail position-absolute bg-white p-3">
                        <p class="post_detail mb-0">Posted By:<?php the_author_posts_link(); ?> Published on: <span class="site_text"><?php echo get_the_date('M d, Y'); ?></span></p>
                    </div><!--post-detail-->
                    <div class="posts-inner bg-white p-5">
                        <h4 class="site_font my-3"><a href="<?php echo get_permalink(); ?>" class="m-0"><?php the_title(); ?></a></h4>
						<?php the_content(); ?>
                        <div class="text-center mt-5"><a href="<?php echo get_permalink(); ?>" class="site_btn">Read More</a></div><!--text-center-->
                    </div><!--posts-inner-->
                </div><!--col-lg-4-->
				<?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div><!--row-->
        </div><!--container-->            
    </section><!--posts-section-->
    <!-- posts section end -->

<?php
get_footer();
