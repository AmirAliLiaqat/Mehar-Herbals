<?php
/**
 * Template Name: Contact
 * 
 * @package meharHerbals
 */

get_header();
?>

    <?php
        // this template code comes from template-parts/content-page
        get_template_part( 'template-parts/content', 'page' );
    ?>

    <!-- contact section start -->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-inner text-white p-5">
                        <h3 class="display-4">Info</h3>
                        <span>___________________</span>
                        <ul class="list-unstyled contact-ul">
                            <li>
                                <h6 class="title my-3">Location Address:</h6>
                                <p>Address: H0# 321 St#11 Koh-e-Noor Housing Society Lahore, Pakistan.</p>
                            </li>
                            <li>
                                <h6 class="title my-3">Phone Number:</h6>
                                <p>+92 03090886518</p>
                            </li>
                            <li>
                                <h6 class="title my-3">Email Address:</h6>
                                <p>amirliaqat2020@gmail.com</p>
                            </li>
                            <li>
                                <h6 class="title my-3">Web Address:</h6>
                                <p>https://www.meharherbals.com</p>
                            </li>
                        </ul>
                    </div><!--contact-inner-->
                </div><!--col-lg-4-->
                <div class="col-lg-8 col-sm-12 p-5">
                    <?php 
                        if(isset($_POST['send_message'])) {
                            $user_fname = sanitize_user($_POST['fname']);
                            $user_lname = sanitize_user($_POST['lname']);
                            $user_email = sanitize_email($_POST['email']);
                            $user_subject = sanitize_text_field($_POST['subject']);
                            $user_message = sanitize_text_field($_POST['message']);

                            $admin_email = get_option('admin_email');
                            $site_name = get_bloginfo('name');
                            $subject = "Contact message from $site_name visiter & customier...";
                            $message = "Username : $user_fname $user_lname \r\n Email : $user_email \r\n Subject : $user_subject \r\n Message : $user_message";

                            $mail = wp_mail( $admin_email, $subject, $message );

                            if($mail) {
                                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                                    Your message has been send to $site_name...
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
                            } else {
                                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                                    There is an error to sending email!
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>";
                            }
                        }
                    ?>
                    <h3 class="display-4">Get Into Touch</h3>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-3">
                                    <input type="text" class="contact-fields" name="fname" placeholder="First Name" required>
                                </div><!--form-group-->
                            </div><!--col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group my-3">
                                    <input type="text" class="contact-fields" name="lname" placeholder="Last Name" required>
                                </div><!--form-group-->
                            </div><!--col-md-6-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group my-3">
                                    <input type="text" class="contact-fields" name="email" placeholder="Email Address" required>
                                </div><!--form-group-->
                            </div><!--col-md-6-->
                            <div class="col-md-6">
                                <div class="form-group my-3">
                                    <input type="text" class="contact-fields" name="subject" placeholder="Subject" required>
                                </div><!--form-group-->
                            </div><!--col-md-6-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-12 my-3">
                                <textarea name="message" class="contact-fields" rows="5" placeholder="Enter Message" required></textarea>
                            </div><!--col-md-12-->
                        </div><!--row-->
                        <div class="text-center">
                            <button class="site_btn" name="send_message">Send</button>
                        </div><!--text-center-->
                    </form>
                </div><!--col-lg-8-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- contact section end -->

    <!-- map section start -->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3403.32642764111!2d74.34339782991009!3d31.460205510121252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919072e84ee31e5%3A0x1c3d625526b4507a!2sByteBunch!5e0!3m2!1sen!2s!4v1661173940191!5m2!1sen!2s" 
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!-- map section end -->

<?php
get_footer();