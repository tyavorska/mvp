<?php
/**
 * Template Name: edit my profile prt
 */
get_header();?>

    <div class="edit_container central-block">
        <div class="registration_container_right">
            <div class="registration_container_right_title">
                Edite seu perfil
            </div>
            <?php echo  do_shortcode('[wppb-edit-profile ]');?>
        </div>
    </div>
<?php get_footer(); ?>