<?php
/* Template Name: About Us Page */

get_header();
?>
    <section class="first-wrapper-connect">
        <div class="section-connect-inner central-block">
            <div class="left-block-img">
                <iframe width="41vw" height="23vw" src="https://www.youtube.com/embed/-RF4Iww4lUc" frameborder="0"
                        allowfullscreen></iframe>
            </div>
            <div class="right-block-text">
                <p>We are a leadership accelerator.</p>
                <p>We believe power should be distributed and leadership is inevitable. We believe the direction for
                    change is
                    unity
                    and the future of the economy is circular.</p>
                <p>Clear purpose revenue, derived from facilitation and data from this platform, returns to the
                    community through investments we make together in leadership vision implementation. They are based
                    on your trust, support, and interaction with our network of leaders.</p>
                <p>Leaders, changemakers and entrepreneurs are sharing their vision development, because their
                    leadership depends on your engagement. From the beginning, we help leaders increase transparency,
                    participation, and support through Visions network.</p>
                <p>People engage by interacting and showing leaders support, spreading the word and making more
                    connections. The more you support, the more data we generate, and this becomes money that goes back
                    to your community - because we invest together in the visions that matter to you the most.</p>
                <p>Investment criteria and results are public in clear reports.</p>
                <p>Our vision is a world where LEADERS AND PEOPLE SHARE A CLEAR PURPOSE.</p>
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
