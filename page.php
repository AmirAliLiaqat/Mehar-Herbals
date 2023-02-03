<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package meharHerbals
 */

get_header();
?>

	<?php
		if(is_product()) {
            get_template_part( 'template-parts/woocommerce-page', 'title' ); 
        } else {
            get_template_part( 'template-parts/content', 'page' );
        }
	?>

	<!-- blog section start -->
    <section class="blog">
        <div class="container pb-5">
            <div class="row py-5">

                <div class="col-lg-8 col-md-8 col-sm-12">
                    <?php 
                        $blog_post = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 5,
                            'order' => 'ASC'
                            )
                        ); 
                        if($blog_post->have_posts()) :
                            while($blog_post->have_posts()) :
                                $blog_post->the_post();
                    ?>
                    <article class="post_wrap mb-3">
                        <div class="post_img position-relative text-center">
                            <?php the_post_thumbnail('large'); ?>
                        </div><!--post_img-->
                        <div class="post_info">
                        <p class="post_detail mb-0">Posted By:<?php the_author_posts_link(); ?> Published on: <span class="site_text"><?php echo get_the_date('M d, Y'); ?></span></p>
                            <h4 class="site_font my-3"><a href="<?php echo get_permalink(); ?>" class="m-0"><?php the_title(); ?></a></h4>
                            <?php the_content(); ?>
                            <div class="actions mt-5">
                            <a href="<?php echo get_permalink(); ?>" class="site_btn">Read More</a>
                                <i class="fas fa-comment-dots site_text float-end"> (<?php echo get_comments_number(); ?>)</i>
                            </div><!--actions-->
                        </div><!--post_info-->
                    </article>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <div class="pagination_wrap pt-3">
                        <div class="pagination justify-content-center">
                            <?php 
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $blog_post->max_num_pages,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'plain',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => true,
                                    'prev_text'    => sprintf( '<i></i> %1$s', __( '« Previous', 'text-domain' ) ),
                                    'next_text'    => sprintf( '%1$s <i></i>', __( 'Next »', 'text-domain' ) ),
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                            ?>
                        </div><!--pagination-->
                    </div><!--pagination_wrap-->
                </div><!--col-lg-8-->
                
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php get_sidebar(); ?>
                </div><!--col-lg-4-->

            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- blog section end -->

<?php
get_footer();