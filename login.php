<?php
/**
 * Template Name: login
 */
get_header();
?>
    <div class="registration_container">
        <div class="registration_container_left">

        </div>
        <div class="registration_container_right">
            <div class="registration_container_right_title">
                Sign in to Clearing Purpose Framework
            </div>
            <?php echo do_shortcode('[wppb-login]'); ?>
        </div>
    </div>
<?php get_footer(); ?>