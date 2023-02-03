<?php
/**
 * Template Name: My Account
 * 
 * @package meharHerbals
 */

get_header();

defined( 'ABSPATH' ) || exit;
?>

    <?php
        // this template code comes from template-parts/content-page
        get_template_part( 'template-parts/content', 'page' );
    ?>

    <section>
        <div class="container">
            <div class="row p-5 my-3">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php
                        /**
                        * My Account navigation.
                        *
                        * @since 2.6.0
                        */
                        do_action( 'woocommerce_account_navigation' );
                    ?>
                </div><!--col-lg-4-->
                <div class="col-lg-8 col-md-8 col-sm-12 account py-3">
                    <?php
                        /**
                         * My Account content.
                         *
                         * @since 2.6.0
                         */
                        do_action( 'woocommerce_account_content' );
                    ?>
                </div><!--col-lg-8-->
            </div><!--row-->
        </div><!--cotainer-->
    </section>

<?php
get_footer();