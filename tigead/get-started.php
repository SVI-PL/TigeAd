<?php
/*
Template Name: Get Started
*/

get_header();
?>
<main id="primary" class="site-main">
    <section class="get-started">
        <div class="content">
            <div class="get-started-header">
                <div class="get-started-header-left">
                    <div class="get-started-title">Get Started</div>
                    <div class="get-started-subtitle">Let’s give your business what it needs to grow.</div>
                </div>
                <div class="get-started-header-right">
                    <div class="header-logo">
                        <img src="<?php echo get_template_directory_uri() ?>/img/svg/Logo.svg" alt="ThinkAd">
                        <div class="logo-text">ThinkAd</div>
                    </div>
                </div>
            </div>
            <div class="get-started-form">
            <form action="#">
                        <div class="login_form_block">
                            <div class="login_form_block_input">
                                <input type="text" placeholder="First Name *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Last Name *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Email *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Company">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Phone *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="text" placeholder="Business Model *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Total Annual Sales *">
                            </div>
                            <div class="login_form_block_input">
                                <input type="password" placeholder="Choose your Plan *">
                            </div>
                            <div class="login_form_block_input submint">
                                <button type="submit">Get Proposal</button>
                            </div>
                        </div>
            </form>
            </div>
        </div>
    </section>
</main><!-- #main -->
<?php
get_footer();
