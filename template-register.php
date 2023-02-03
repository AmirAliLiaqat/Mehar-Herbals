<?php
/**
 * Template Name: Register
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
                        
                        if(isset($_POST['register'])) {
                            $fname = sanitize_user($_POST['fname']);
                            $lname = sanitize_user($_POST['lname']);
                            $email = sanitize_email($_POST['email']);
                            $password = trim($_POST['password']);
                            $cpassword = trim($_POST['cpassword']);

                            if(username_exists( $fname ) === false && username_exists( $lname ) === false) {
                                if(email_exists( $email ) === false) {
                                    if($password === $cpassword) {
                                        $register_url = "https://amir.bytebunch.com/register?ufname=$fname&ulname=$lname&uemail=$email&upass=$password";
                                        // $to = get_option('admin_email');
                                        $to = $email;
                                        $subject = 'Mehar Harbales Registeration URL';
                                        $message = "Registeratration Link: $register_url \r\n Username: $fname $lname \r\n Email: $email";
                                        
                                        $mail = wp_mail( $to, $subject, $message );

                                        if($mail) {
                                            $success_message[] = "Registeration link has been send to your '.$email.' email...";
                                        } else {
                                            $danger_message[] = "There is an error to sending the mail!";
                                        }
                                    } else {
                                        $danger_message[] = "Password doen`t matched!";
                                    }
                                } else {
                                    $danger_message[] = "This email already exist!";
                                }
                            } else {
                                $danger_message[] = "This user already exist!";
                            }
                        }

                        if(isset($_GET['ufname']) && isset($_GET['ulname']) && isset($_GET['uemail']) && isset($_GET['upass'])) {
                            $fname = sanitize_user($_GET['ufname']);
                            $lname = sanitize_user($_GET['ulname']);
                            $username = $fname . ' ' . $lname;
                            $email = sanitize_email($_GET['uemail']);
                            $password = trim($_GET['upass']);
                            $site_url = site_url();

                            $userdata = array(
                                'user_login'            => $username,
                                'user_pass'             => $password,
                                'user_url'              => $site_url,
                                'user_email'            => $email,
                                'first_name'            => $fname,
                                'last_name'             => $lname,
                                'show_admin_bar_front'  => false,
                                'role'                  => 'subscriber',
                            );
                            $register_user = wp_insert_user( $userdata ) ;

                            if($register_user) {
                                $success_message[] = "User Register Successfully..."; ?>
                                <script>
                                    window.history.pushState({page: "another page"}, "register", "https://amir.bytebunch.com/register/");
                                </script>
                            <?php
                            } else {
                                $danger_message[] = "User can`t be registered!";
                            }
                        }
                    
                    ?>
                    <?php
                        if(isset($success_message)) {
                            foreach ($success_message as $success_message) {
                                echo '<div class="alert alert-success" role="alert">'.$success_message.'</div>';
                            }
                        }
                        if(isset($danger_message)) {
                            foreach ($danger_message as $danger_message) {
                                echo '<div class="alert alert-danger" role="alert">'.$danger_message.'</div>';
                            }
                        }
                    ?>
                    <div class="login-head">
                        <h4 class="display-4 title site_font fw-bold">Signup</h4>
                        <p class="sub-title">Already have an account?<a href="<?php echo get_home_url(); ?>/login" class="site_text">Login here!</a></p>
                    </div><!--login-head-->
                    <form action="" method="post" class="login-form">
                        <div class="form-group mb-3">
                            <label for="fname" class="form-label">First Name:</label>
                            <input type="text" class="contact-fields" name="fname" placeholder="Your first name" required>
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <label for="lname" class="form-label">Last Name:</label>
                            <input type="text" class="contact-fields" name="lname" placeholder="Your last name" required>
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="text" class="contact-fields" name="email" placeholder="Your email address" required>
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="contact-fields" name="password" placeholder="Password" required>
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <label for="cpassword" class="form-label">Re-type Password:</label>
                            <input type="password" class="contact-fields" name="cpassword" placeholder="Password" required>
                        </div><!--form-group-->
                        <div class="form-group mb-3">
                            <input type="checkbox" name="agree">
                            <label for="agree" class="form-label">I Agree With<a href="terms-conditions.html" class="site_text">Terms & Condition</a></label>
                        </div><!--form-group-->
                        <div class="text-center">
                            <button class="site_btn text-uppercase w-100 mb-3" name="register">Register</button>
                        </div><!--text-center-->
                    </form>
                </div><!--col-md-6-->
            </div><!--row-->
        </div><!--container-->
    </section>
    <!-- sectin end -->