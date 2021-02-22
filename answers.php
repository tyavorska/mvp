<?php
/**
 * Template Name: Answers
 */

if ( !current_user_can( 'administrator' )){
    wp_redirect(home_url( '/dashboard/' ));
    exit;
}
get_header();
?>
    <div class="ansvers_archive_container">
        <div class="ansvers_archive_title"><?php _e('User answers', 'mvp');?>:</div>
        <?php
        echo '<div class="entry-content-all">';
        query_posts(
                array('post_type'=>'answers',
                    'suppress_filters' => true)
        );
        if(have_posts()) : while(have_posts()) : the_post();
            $data = json_decode(get_the_content(), true);
            if(isset($data['finished'])) {
                echo '<div class="entry-content">';
                $lang = '';
                if(isset($_GET['lang']))
                    $lang = '&lang='.$_GET['lang'];
                echo '<a href="/answer?id=' . get_the_ID() . $lang.'"><div class="text">' . get_the_author() . '</div></a>';
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