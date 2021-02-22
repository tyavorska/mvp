<?php
///**
// * Template Name: homepage
// */

get_header();
?>
<section class="section-first">
    <div class="home-img-slick">
        <img src="/wp-content/uploads/2020/03/banner-1.jpg" alt="">
        <img src="/wp-content/uploads/2020/03/banner-3.jpg" alt="">
        <img src="/wp-content/uploads/2020/03/banner-2.jpg" alt="">
    </div>
</section>
<section class="section-start">
		<p class="section-start-txt">
            LEARN HOW TO STRUCTURE YOUR THOUGHTS WITH A CLEAR PURPOSE
		</p>

</section>
<section class="section-video">
    <div class="back-img">
        <iframe src="https://www.youtube.com/embed/wx08-586ifM" frameborder="0" frameborder="0" allowfullscreen></iframe>
    </div>
    <?php if(is_user_logged_in()){
        $url = '/dashboard/';
    }else{
        $url = '/registration/';
    }?>

    <a href="<?= $url?>" class="start-btn">Start NOW</a>
    <div class="play-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/play.svg" alt="">
    </div>
</section>
<section class="section-steps central-block">
	<div class="sections-steps-txt-block">
		<h3>
            A 4 STEP PROCESS TO CLARIFY YOUR PURPOSE AND GENERATE IMPACT
        </h3>
	</div>

    <div class="steps-inner-sections">
        <div class="sections-steps-item-block">
            <div class="steps-img">
                <img src="/wp-content/uploads/2020/04/purpose.png" alt="">
            </div>
            <div class="steps-item-text-block">
                <h4>PURPOSE</h4>
                <p>The visualization of what you can do to impact the context.</p>
            </div>
        </div>
        <div class="sections-steps-item-block">
            <div class="steps-img">
                <img src="/wp-content/uploads/2020/04/vision.png" alt="">
            </div>
            <div class="steps-item-text-block">
                <h4>VISION</h4>
                <p> Reorganize resources to make potentials develop and bring change.
                </p>
            </div>
        </div>
        <div class="sections-steps-item-block">
            <div class="steps-img">
                <img src="/wp-content/uploads/2020/04/meaning.png" alt="">
            </div>
            <div class="steps-item-text-block">
                <h4>MEANING</h4>
                <p>Share the value of a vision to start the change. </p>
            </div>
        </div>
        <div class="sections-steps-item-block">
            <div class="steps-img">
                <img src="/wp-content/uploads/2020/04/impact.png" alt="">
            </div>
            <div class="steps-item-text-block">
                <h4>IMPACT</h4>
                <p>Design the future of your vision.</p>
            </div>
        </div>

    </div>
</section>
<section class="section-levels central-block ">
    <div class="testimonials-wrapper ">
        <h2>Our clients experience</h2>
        <p>Since 2018, the CLEARING PURPOSE FRAMEWORK has been facilitated to more than 100 professionals, of 12 different countries and 20 different industries.</p>
        <div class="section-home-testimonials">
            <div class="testimonials-block">
                <div class="testimon-text-block">
                    <p>It completely transformed my leadership style, my company, and my results. The process gave me a lot of clarity about the impact of our work in the context in which we operate. Clarity made it possible to share a bigger vision with my team, which became more united, engaged and creative. Leadership with a focus on care brings a lot of happiness, fulfillment, and results I never imagined! I'm deeply grateful for this process and I believe the world will be an incredible place when many leaders have the opportunity to use it!
                    </p>
                </div>
                <h4>PAULINHA OLIVEIRA</h4>
                <p>Founder of Frequência do Amor, Brazil</p>
            </div>
            <div class="testimonials-block">
                <div class="testimon-text-block">
                    <p>The framework leads us to have contact with who
                        we really are, and only then do we find our true
                        purpose. In a light and very loving way it showed
                        me that it is possible to see, hear and truly
                        connect in all situations.</p>

                </div>
                <h4>PATRICIA ANDRADE</h4>
                <p>Customer Service Manager - V7 brasil Real Estate Strategy, Brazil</p>
            </div>
            <div class="testimonials-block">
                <div class="testimon-text-block">
                    <p>The tool helped me to reflect. It helped me to
                        distill a broad challenge into simple purpose and
                        actions. It helped me to uncover what is really
                        important at the core of my objectives.</p>

                </div>
                <h4>LUKE BYWATERS</h4>
                <p>Recycling & Recovery Commercial Manager at
                    Co-op, UK</p>
            </div>
            <div class="testimonials-block">
                <div class="testimon-text-block">
                    <p>The tool was an incredible journey, I dug deep and connected with the things I cared about most and the outcome was an affirmation of what I’d assumed.</p>

                </div>
                <h4>ADITHYA VARADARAJAN</h4>
                <p> Co-founder & Design Strategist at Nordic Rebels, Finland</p>
            </div>

        </div>
    </div>
    <div class="sections-steps-txt-block">
        <h3>
            4 LEVEL PROCESS
        </h3>
        <p>The CLEARING PURPOSE FRAMEWORK uses questions and reflection exercises in a specific order to simplify vision development and implementation. Each level takes 4 hours in 2 weeks. Take one level at a time.        </p>
    </div>
    <div class="section-levels-inner">
        <div class="img-desktop">
            <img src="<?php echo get_template_directory_uri() ?>/img/level.jpg" alt="">
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/img/level-mob.png" alt="">
        <div class="img-ipad">
            <img src="<?php echo get_template_directory_uri() ?>/img/level-ipad.jpg" alt="">
        </div>
        <a href="/dashboard/" class="start-btn">Start NOW</a>
    </div>

</section>
<section class="section-home-about">

    <div class="section-last-posts central-block">
        <h2>Publish your vision</h2>
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
                            <div class="post-attr"><?php echo get_the_author(); ?> - <?php echo get_the_date('d.m.Y', $post); ?></div>
                        </div>
                    </a>
                <?php endwhile; endif;
            wp_reset_query();
            ?>
        </div>
    </div>

</section>
<section class="section-last-posts">
	
</section>
<?php
get_footer();
