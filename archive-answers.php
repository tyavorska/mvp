<?php
if ( !current_user_can( 'administrator' )){
    wp_redirect(home_url( '/dashboard/' ));
    exit;
}
get_header();
?>
<div class="ansvers_archive_container">
    <div class="ansvers_archive_title">User answers:</div>
<?php
echo '<div class="entry-content-all">';
if(have_posts()) : while(have_posts()) : the_post();
    $data = json_decode(get_the_content(), true);
    if(isset($data['finished'])) {
        echo '<div class="entry-content">';
        echo '<a href="' . get_post_permalink() . '"><div class="text">' . get_the_author() . '</div></a>';
        echo '</div>';
    }
    endwhile;
endif;
echo '</div>';
?>

</div>
<?php
get_footer();
?>