<?php
/*
Template Name: Login
*/

get_header();
$login = $_GET['login'];
?>

<main id="primary" class="site-main">
    <section class="login_section">
        <div class="login_form">
            <div class="login_form_title">
                <?php if ($_GET["login"] != "register") { ?>
                    <div class="login_logo">
                        <a href="/">
                            <img src="<?php echo get_template_directory_uri() ?>/img/svg/Logo.svg" alt="ThinkAd">
                            <div class="logo-text">ThinkAd</div>
                        </a>
                    </div>
                <?php } ?>
                <form action="#">
                    <?php
                    if ($_GET["login"] == NULL || $_GET["login"] == "sign_in") {
                    ?>
                        <div class="login_form_title_text">Log in to your account</div>
                        <div class="login_form_block">
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Username">
                            </div>
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Password">
                            </div>
                            <div class="login_form_block_input">
                                <button type="submit">Singn in</button>
                            </div>
                            <div class="login_form_block_input">
                            <a href="?login=register" class="forgot">Sing up</a><a href="?login=forgot_password" class="forgot">Can’t log in?</a>
                            </div>
                        </div>
                        <div class="login_footer">
                            <div class="login_footer_text">
                                <a href="#">Privacy policy</a>
                            </div>
                            <div class="login_footer_text">
                                <a href="#">Teams of use</a>
                            </div>
                        </div>
                    <?php }

                    if ($_GET["login"] == "forgot_password") { ?>
                        <div class="login_form_title_text">Forgot your password</div>
                        <div class="login_form_block">
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Enter your email">
                            </div>
                            <div class="login_form_block_input">
                                <button type="submit">Restore password</button>
                            </div>
                        </div>
                        <div class="login_footer">
                            <div class="login_footer_text">
                                <a href="#">Privacy policy</a>
                            </div>
                            <div class="login_footer_text">
                                <a href="#">Teams of use</a>
                            </div>
                        </div>
                    <?php }

                    if ($_GET["login"] == "reset_password") { ?>
                        <div class="login_form_title_text">Enter new password</div>
                        <div class="login_form_block">
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Enter new password">
                            </div>
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Enter new password again">
                            </div>
                            <div class="login_form_block_input">
                                <button type="submit">Restore password</button>
                            </div>
                        </div>
                        <div class="login_footer">
                            <div class="login_footer_text">
                                <a href="#">Privacy policy</a>
                            </div>
                            <div class="login_footer_text">
                                <a href="#">Teams of use</a>
                            </div>
                        </div>
                    <?php }

                    if ($_GET["login"] == "register") { ?>
                        <div class="login_form_title_text sing_up">Sign up</div>
                        <div class="login_form_block">
                            <div class="login_form_block_input">
                                <input type="text" placeholder="First Name *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Last Name *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Business Name *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Phone *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Email *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Password *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Confirm Password *">
                            </div>
                            <div class="login_form_block_input">
                                <button type="submit">Register</button>
                            </div>
                            <div class="login_form_block_input singin_text">
                                Already Member? <a href="?login=sign_in" class="signin">Sign In</a>
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
get_footer();
