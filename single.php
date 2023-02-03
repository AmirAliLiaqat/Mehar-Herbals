<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
        <div class="container py-5">
            <div class="row py-5">
                <?php
                    if(is_product()) {
                        get_template_part( 'template-parts/single', 'product' );
                    } else {
                        get_template_part( 'template-parts/single', 'post' );
                    }
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- blog section end -->

<?php
get_footer();
