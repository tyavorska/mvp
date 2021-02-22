<?php
// * Template Name: Connect To Page
get_header();
?>

    <section class="first-wrapper-connect">
        <div class="section-connect-inner central-block">
            <div class="left-block-img">
                <img src="/wp-content/uploads/2020/04/banner_CONNECT_TO_LEADERS.jpg" alt="">
            </div>
            <div class="right-block-text">
                <p>Your connection to leaders, here.</p>
                <p>At Visions network you get to see and interact with the visions that leaders in the Clearing Purpose Framework process have for your community and the world.</p>
                <p>Clear Purpose promotes our leaders’ vision engagement through the increase of transparency, community participation, and support.</p>
                <p>Leaders openly share their vision during the process to better understand from people what they think and engage them in decisions from the first moment. This type of courageous leadership is currently extremely necessary.</p>
                <p>This means we get to be in this process together. More than that, we are leading this together.</p>
                <p>Why?</p>
                <p>Visions network generates funds to implement visions. All revenue from data returns to leaders' communities. Investment criteria are based on trust, support, and interaction from the network.</p>
                <p>Get started connecting with leaders. Meet and support them and their visions by signing in.</p>
                <p>Are you a leader ready to clear your purpose, drive a vision and get support from your community? Sign up here to access your leadership profile.
                </p>
                <p>Understand <a href="/how-might-we-redistribute-power/">here</a> how the investments work.</p>
            </div>
        </div>
    </section>
    <section class="section-home-about">
        <div class="section-last-posts central-block">
            <div class="block-more-blog">
                <h2>LATEST VISIONS</h2>
                <a href="/vision-network/">
                    <span>View all</span>
                    <img src="<?php echo get_template_directory_uri() ?>/img/arrow-right.svg" alt="">
                </a>
            </div>
            <div class="blog_bottom home-page">
                <?php
                if (have_posts()) :
                    query_posts(array('posts_per_page' => 4, 'cat' => 6, 'offset' => 0,));
                    while (have_posts()) : the_post();
                        $id = get_the_ID();
                        ?>
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                            <div class="blog-item">
                                <div class="blog-item-post-thumb"><?php the_post_thumbnail('full'); ?></div>
                                <div class="post-title"><?php the_title(); ?></div>
                                <div class="post-text"><?php echo get_the_excerpt(); ?></div>
                                <div class="post-attr"><?php echo get_the_author(); ?>
                                    - <?php echo get_the_date('d.m.Y', $post); ?></div>
                            </div>
                        </a>
                    <?php endwhile; endif;
                wp_reset_query();
                ?>
            </div>
        </div>
    </section>
<?php
get_footer();