<?php
/* Template Name: Blog Page */

get_header();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<div class="blog_page_top">
    <div class="blog_first_post">
        <!--first post-->
        <?php
        if (have_posts()) :
            query_posts(array('posts_per_page' => 5, 'cat' => 7, 'offset' => 0,));
            while (have_posts()) : the_post();
                $id = get_the_ID();
                ?>
                <div>
                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="first-blog-item">
                            <div class="blog-post-img"><?php echo get_the_post_thumbnail($id, 'full'); ?></div>
                            <div class="first-blog-text-container">
                                <div class="blog-post-title"><?php echo get_the_title(); ?></div>
                                <div class="first-blog-post-attr"><?php echo get_the_author(); ?>
                                    - <?php echo get_the_date('d.m.Y', $post); ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; endif;
        wp_reset_query();
        ?>
    </div>
    <div class="blog_videos">
        <div class="blog_videos_title_container">
            <div class="blog_videos_title">
                Latest video
            </div>
<!--            <div class="blog_videos_title_url">-->
<!--                <a href="#">View all ></a>-->
<!--            </div>-->
        </div>
        <?php
        if (have_posts()) :
            query_posts(array('posts_per_page' => 4, 'cat' => 8, 'offset' => 0,));
            while (have_posts()) : the_post();
                $id = get_the_ID();
                ?>

                    <a href="<?php echo get_the_permalink(); ?>">
                        <div class="blog_videos_video">
                            <?php the_field('video'); ?>
                        </div>
                        <div class="blog_videos_text">
                            <div class="blog_videos_text_title"><?php echo get_the_title(); ?></div>
                            <div class="blog-post-attr"><?php echo get_the_author(); ?>
                                - <?php echo get_the_date('d.m.Y', $post); ?></div>
                        </div>
                    </a>

            <?php endwhile; endif;
        wp_reset_query();
        ?>

    </div>
</div>
<!--other posts-->
<div class="blog_bottom">
    <?php
    //if (have_posts()) :
    //    query_posts(array('posts_per_page' => 999, 'cat' => 6, 'offset' => 0));
    //    while (have_posts()) : the_post();
    //        ?>
    <!--        <a title="--><?php //the_title_attribute(); ?><!--" href="--><?php //the_permalink(); ?><!--">-->
    <!---->
    <!--            <div class="blog-item">-->
    <!--                <div class="blog-item-post-thumb">--><?php //the_post_thumbnail('full'); ?><!--</div>-->
    <!---->
    <!---->
    <!--                <div class="post-title">--><?php //the_title(); ?><!--</div>-->
    <!---->
    <!---->
    <!--                <div class="post-text">--><?php //echo get_the_excerpt(); ?><!--</div>-->
    <!--                <div class="post-attr">--><?php //echo get_the_author(); ?><!-- - -->
    <?php //echo get_the_date('d.m.Y', $post); ?><!--</div>-->
    <!---->
    <!---->
    <!--            </div>-->
    <!--        </a>-->
    <!---->
    <!--    --><?php //endwhile; endif;
    //wp_reset_query();
    //?>

    <?php echo do_shortcode('[ajax_load_more id="8509632128" post_type="post" posts_per_page="4" category="blog" scroll_container=".blog_bottom" button_label="Load more"]'); ?>
</div>
<?php get_footer(); ?>
