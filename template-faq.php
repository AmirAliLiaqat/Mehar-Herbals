<?php
/**
 * Template Name: FAQ
 * 
 * @package meharHerbals
 */

get_header();
?>

    <?php
        // this template code comes from template-parts/content-page
        get_template_part( 'template-parts/content', 'page' );
    ?>

    <!-- FAQ section start -->
    <section class="FAQ">
        <div class="container my-5">
            <h3 class="display-4 text-center py-4">FAQ</h3>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet non sit et aut earum dignissimos rem dolores libero consequuntur dolorem dolor ipsum expedita in, iure neque ipsa laborum voluptatibus ducimus cum alias nesciunt architecto explicabo repudiandae. Amet, eius voluptate non quibusdam ut, quasi aliquam, maxime veniam rerum libero beatae.
                        </div><!--accordion-body-->
                    </div><!--accordion-collapse-->
                </div><!--accordion-item-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet non sit et aut earum dignissimos rem dolores libero consequuntur dolorem dolor ipsum expedita in, iure neque ipsa laborum voluptatibus ducimus cum alias nesciunt architecto explicabo repudiandae. Amet, eius voluptate non quibusdam ut, quasi aliquam, maxime veniam rerum libero beatae.
                        </div><!--accordion-body-->
                    </div><!--accordion-collapse-->
                </div><!--accordion-item-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet non sit et aut earum dignissimos rem dolores libero consequuntur dolorem dolor ipsum expedita in, iure neque ipsa laborum voluptatibus ducimus cum alias nesciunt architecto explicabo repudiandae. Amet, eius voluptate non quibusdam ut, quasi aliquam, maxime veniam rerum libero beatae.
                        </div><!--accordion-body-->
                    </div><!--accordion-collapse-->
                </div><!--accordion-item-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Accordion Item #4
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet non sit et aut earum dignissimos rem dolores libero consequuntur dolorem dolor ipsum expedita in, iure neque ipsa laborum voluptatibus ducimus cum alias nesciunt architecto explicabo repudiandae. Amet, eius voluptate non quibusdam ut, quasi aliquam, maxime veniam rerum libero beatae.
                        </div><!--accordion-body-->
                    </div><!--accordion-collapse-->
                </div><!--accordion-item-->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Accordion Item #5
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt eveniet non sit et aut earum dignissimos rem dolores libero consequuntur dolorem dolor ipsum expedita in, iure neque ipsa laborum voluptatibus ducimus cum alias nesciunt architecto explicabo repudiandae. Amet, eius voluptate non quibusdam ut, quasi aliquam, maxime veniam rerum libero beatae.
                        </div><!--accordion-body-->
                    </div><!--accordion-collapse-->
                </div><!--accordion-item-->
            </div><!--accordion-->
        </div><!--container-->
    </section>
    <!-- FAQ section end -->

<?php
get_footer();