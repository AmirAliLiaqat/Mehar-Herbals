<?php
/**
 * Template Name: Login
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
            <div class="text-center">
            </div><!--text-center-->
            <div class="row">
                <div class="col-md-6 offset-col-6 mx-auto d-block login-page">
                    <?php
                        if(isset($_POST['login'])) {
                            $username_email = sanitize_user($_POST['username_email']);
                            $password = trim($_POST['password']);

                            $user = wp_authenticate($username_email, $password);
                            if(!is_wp_error($user)) {
                                $username = $user->user_login;
                                $email = $user->user_email;

                                $ucode = bin2hex(random_bytes(4));

                                $login_url = "https://amir.bytebunch.com/verification?uname=$nicename&uemail=$email&upass=$password&ucode=$ucode";
                                // $to = get_option('admin_email');
                                $to = $email;
                                $subject = 'Mehar Herbals Login URL';
                                $message = "Login URL: $login_url \r\n Username: $username \r\n Email: $email \r\n Verification Code: $ucode";
                                $headers = 'Mehar Herbals';
                                
                                $mail = wp_mail( $to, $subject, $message, $headers );

                                if($mail) {
                                    echo '<div class="alert alert-success" role="alert">
                                        Login link has been send to your '.$email.' email successfully...
                                    </div>';
                                } else {
                                    echo '<div class="alert alert-danger" role="alert">
                                        There is an error to sending the mail!
                                    </div>';
                                }
                            } else {
                                echo '<div class="alert alert-danger" role="alert">
                                    <strong>Invalid login credentials.</strong>
                                </div>';
                            }
                        }
                    ?>
                    <div class="login-head">
                        <h4 class="display-4 title site_font fw-bold">Login</h4>
                        <p class="sub-title">If you don't have an account?<a href="<?php echo get_home_url(); ?>/register" class="site_text">Signup here!</a></p>
                    </div><!--login-head-->
                    <form action="" method="post" class="login-form">
                        <div class="form-group mb-3">
                            <label for="username_email" class="form-label">Username / Email Address:</label>
                            <input type="text" class="contact-fields" name="username_email" placeholder="Enter username / email address">
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="contact-fields" name="password" placeholder="Password">
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <input type="checkbox" name="remember_password">
                            <label for="remember_password" class="form-label">Remember password:</label>
                        </div><!--form-group-->
                        <div class="text-center">
                            <button class="site_btn text-uppercase w-100 mb-3" name="login">Sign In</button>
                            <p><a href="#" class="site_text">Forgot Password?</a></p>
                        </div><!--text-center-->
                    </form>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- sectin end -->