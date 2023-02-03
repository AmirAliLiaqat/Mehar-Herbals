<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package meharHerbals
 */

get_header();
?>

	<?php
        get_template_part( 'template-parts/content', 'page' );
    ?>

	<!-- blog section start -->
	<section class="blog">
        <div class="container py-5">
            <div class="row py-5">
                <?php
					get_template_part( 'template-parts/content',);
                ?>
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- blog section end -->

<?php
get_footer();
