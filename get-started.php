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
            <?php echo do_shortcode('[contact-form-7 id="41" title="Get started"]'); ?>
            </div>
        </div>
    </section>
</main><!-- #main -->
<?php
get_footer();
