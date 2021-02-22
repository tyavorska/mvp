<?php
/**
 * Template Name: registration
 */
get_header();
?>
<div class="registration_container">
    <div class="registration_container_left">

    </div>
    <div class="registration_container_right">
        <div class="registration_container_right_title">
            <?= _e('Sign Up in Clear Purpose Framework','mvp');?>
        </div>
        <?php echo  do_shortcode('[wppb-register]');?>
    </div>
</div>
<?php get_footer(); ?>