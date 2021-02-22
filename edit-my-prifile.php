<?php
/**
 * Template Name: edit my profile
 */
get_header();?>

    <div class="edit_container central-block">
        <div class="registration_container_right">
            <div class="registration_container_right_title">
               Edit my profile
            </div>
            <?php echo  do_shortcode('[wppb-edit-profile ]');?>
        </div>
    </div>
<?php get_footer(); ?>