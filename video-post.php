<?php
/*
 * Template Name: Video Post
 * Template Post Type: post
 */

get_header();
while (have_posts()) :
the_post();
$author = get_the_author_ID();
endwhile;

$last_name = get_user_meta($author, 'last_name', true);
$first_name = get_user_meta($author, 'first_name', true);
$country = get_user_meta($author, 'country', true);
$city = get_user_meta($author, 'city', true);
$industry = get_user_meta($author, 'industry', true);
$interest = get_user_meta($author, 'cosoi', true);
$stars = get_user_meta($author, 'stars', true);
?>







<div class="post_container">
    <div class="post_left_side">
        <!--img src="/wp-content/themes/mvp/img/USER-LEFT.jpg"-->
        <div class="user_info">
            <div class="user_info_1">
                <div class="user_profile_photo">
                    <?php echo get_avatar((int)$author) ?>
                </div>
                <div class="user_name">
                    <?= $first_name . ' ' . $last_name ?>
                </div>
                <div class="user_place">
                    <img src="/wp-content/themes/mvp/img/pin-2.svg"><?= $city . ', ' . $country ?>
                </div>
                <div class="user_industry">
                    <img src="/wp-content/themes/mvp/img/work.svg"><?= $industry ?>
                </div>
                <div class="user_interest">
                    <div class="user_interest_title">Situations of interest:</div>
                    <?= $interest ?>
                </div>
                <div class="user_stars">
                    <?= $stars ?>
                </div>

            </div>
            <div class="user_info_2">
                <div class="user_info_2_top">
                    Statistic of the Leader:
                </div>
                <div class="user_info_2_bottom">
                    <div class="user_info_2_bottom_left">
                        <div class="user_info_2_bottom_left_top">
                           0
                        </div>
                        <div class="user_info_2_bottom_left_bottom">
                            Followers
                        </div>
                    </div>
                    <div class="user_info_2_bottom_center">
                        <div class="user_info_2_bottom_left_top">
                            1
                        </div>
                        <div class="user_info_2_bottom_left_bottom">
                            Visions
                        </div>
                    </div>
                    <div class="user_info_2_bottom_right">
                        <div class="user_info_2_bottom_left_top">
                            10%
                        </div>
                        <div class="user_info_2_bottom_left_bottom">
                            Impact’s
                        </div>
                    </div>
                </div>
            </div>
            <div class="user_info_3">
                <a href="#">Follow this leader</a>
            </div>
        </div>
    </div>
    <div class="post_right_side">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <div class="post_main_img">
                <?php the_field('video'); ?>
            </div>

            <div class="post_main_title"> <?php echo get_the_title(); ?></div>
            <div class="post_main_text"> <?php echo get_the_content(); ?></div>

        <?php // If comments are open or we have at least one comment, load up the comment template.
//    if (comments_open() || get_comments_number()) :
//        comments_template();
//    endif;

        endwhile; // End of the loop.
        ?>


        <div class="relaited_post_title">
            Related posts
        </div>
        <div class="blog_bottom">

            <?php
            if (have_posts()) :
                query_posts(array('posts_per_page' => 3, 'cat' => 6, 'offset' => 0,));
                while (have_posts()) : the_post();
                    $id = get_the_ID();
                    ?>
                    <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                        <div class="blog-item">
                            <div class="blog-item-post-thumb"><?php the_post_thumbnail('full'); ?></div>
                            <div class="post-title"><?php the_title(); ?></div>
                            <div class="post-attr"><?php echo get_the_author(); ?> - <?php echo get_the_date('d.m.Y', $post); ?></div>
                        </div>
                    </a>
                <?php endwhile; endif;
            wp_reset_query();
            ?>
        </div>




    </div>
</div>
<?php
get_sidebar();
get_footer();

?>