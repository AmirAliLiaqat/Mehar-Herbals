<?php
/**
 * Template Name: Verification
 * 
 * @package meharHerbals
 */
?>

    <?php
        wp_head();
    ?>

    <!-- header start -->
    <header class="main-heder">
        <div class="container">
            <div class="brand text-center my-5">
                <?php if(has_custom_logo()) { the_custom_logo(); } else { echo get_bloginfo('name'); } ?>
            </div><!--brand-->
        </div><!--container-->
    </header>
    <!-- header end -->

    <!-- sectin start -->
    <section class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-col-6 mx-auto d-block login-page">
                    <?php
                        if(isset($_POST['verify'])) {
                            $verification_code = $_POST['verification_code'];

                            if(isset($_GET['uemail']) && isset($_GET['upass']) && isset($_GET['ucode'])) {
                                $email = sanitize_user($_GET['uemail']);
                                $password = trim($_GET['upass']);
                                $ucode = $_GET['ucode'];

                                if($verification_code === $ucode) {
                                    $creds = array(
                                        'user_login'    => $email,
                                        'user_password' => $password,
                                        'remember'      => true
                                    );
                            
                                    $user = wp_signon( $creds, true );
                            
                                    if( $user ) {
                                        $url = get_home_url();
                                        wp_redirect( $url );
                                        exit();
                                    } else { 
                                        echo "<div class='alert alert-danger' role='alert'>
                                            There is server problem to logging in the user...
                                        </div>";
                                    }
                                } else {
                                    echo "<div class='alert alert-danger' role='alert'>
                                        Wronge verification code!
                                    </div>";  
                                }
                            } 
                        }
                    ?>
                    <div class="login-head">
                        <h4 class="display-4 title site_font fw-bold">Verification</h4>
                    </div><!--login-head-->
                    <form action="" method="post" class="login-form">
                        <div class="form-group mb-3">
                            <label for="verification_code" class="form-label">Verification Code:</label>
                            <input type="text" class="contact-fields" name="verification_code" placeholder="Enter verification code here">
                        </div><!--form-group-->
                        <div class="text-center">
                            <button class="site_btn text-uppercase w-100 mb-3" name="verify">Verify</button>
                        </div><!--text-center-->
                    </form>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- sectin end -->