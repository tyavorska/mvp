<?php
/**
 * Template Name: login-prt
 */
get_header();
?>
    <div class="registration_container">
        <div class="registration_container_left">

        </div>
        <div class="registration_container_right">
            <div class="registration_container_right_title">
                Entre no Clear Purpose Framework
            </div>
            <?php echo do_shortcode('[wppb-login]'); ?>
        </div>
    </div>
<?php get_footer(); ?>