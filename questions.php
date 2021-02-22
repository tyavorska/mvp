<?php
/* Template Name: Questions-page */
get_header();


$current_user = wp_get_current_user();
if (have_posts()) : while (have_posts()) : the_post();
    $question = get_post_permalink();
endwhile;
endif;

$last_name = get_user_meta($current_user->ID, 'last_name', true);
$first_name = get_user_meta($current_user->ID, 'first_name', true);
$country = get_user_meta($current_user->ID, 'country', true);
$city = get_user_meta($current_user->ID, 'city', true);
$industry = get_user_meta($current_user->ID, 'industry', true);
$interest = get_user_meta($current_user->ID, 'cosoi', true);
$stars = get_user_meta($current_user->ID, 'stars', true);

$answerData = array();
$args = array(
    'post_type' => 'answers',
    'post_status' => 'publish',
    'post_author' => get_current_user_id(),
    'numberposts' => 1
);
$asnwer_post = get_posts($args);
if(isset($asnwer_post[0]->post_content)){
    $answerData = json_decode($asnwer_post[0]->post_content, true);
}
?>
    <div class="inner_page_container">
        <div class="post_left_side">
            <!--img src="/wp-content/themes/mvp/img/USER-LEFT.jpg"-->
            <div class="user_info">
                <div class="user_info_1">
                    <div class="user_profile_photo">
                        <?php echo get_avatar( (int)$current_user->ID )?>
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
                        <div class="user_stars">
                            <?php if($stars>0){?>
                                <div class="full_stars"></div>
                            <?php }else{?>
                                <div class="empty_stars"></div>
                            <?php }?>
                        </div>
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
                                Impact
                            </div>
                        </div>
                    </div>
                </div>
                <div class="user_info_3">
                    <a href="#">Follow this leader</a>
                </div>
            </div>
        </div>
        <div class="inner_page_right_side">
            <div class="inner_page_right_side_welcome">
                <div class="inner_page_right_side_welcome_medium">
                        Welcome,  <?= $first_name ?>!
                    </div>
                <div class="inner_page_right_side_welcome_light">We are looking forward to seeing your vision drive your
                    leadership in  <?= $interest ?>.
                </div>
            </div>
            <section class="section-steps central-block">

                <div class="steps-inner-sections">
                    <div class="sections-steps-item-block">
                        <!--                        <a href="--><? //=$question?><!--">-->
                        <a href="#ex1" rel="modal:open">
                            <div class="steps-img">
                                Start NOW<br>
                                for free
                            </div>
                        </a>
                        <div class="steps-item-text-block">
                            <h4>TRIAL LEVEL</h4>
                            <p class="steps-item-text-block_15">
                                Learn the core phases of the<br>
                                CLEARING PURPOSE<br>
                                FRAMEWORK
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Level 1<br>
                                CLEAR PURPOSE
                            </h4>
                            <p>
                                Deepen your intention to structure<br>
                                your thoughts with a clear purpose
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Level 2<br>
                                CLEAR VISION
                            </h4>
                            <p>Learn how to develop a vision using<br>
                                resources to grow potentials and <br>
                                bring change
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Level 3<br>
                                CLEAR MEANING
                            </h4>
                            <p>
                                Learn by practice how to share your <br>
                                vision to engage people and move it<br>
                                forvard.
                            </p>
                        </div>
                    </div>
                    <div class="sections-steps-item-block">
                        <div class="steps-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/locked.svg" alt="">
                        </div>
                        <div class="steps-item-text-block">
                            <h4>
                                Level 4<br>
                                CLEAR IMPACT
                            </h4>
                            <p>
                                Design the future of your vision for<br>
                                impact and change.
                            </p>
                        </div>
                    </div>

                </div>
            </section>
            <div class="inner_page_index_form">
                <div class="inner_page_index_form_title">
                    Book a Clearing Purpose Framework level with a facilitator of your choice:
                </div>
                <form>
                    <div class="inner_page_index_form_block_1">
                        <div class="inner_page_index_form_block_title">
                            Work experience
                        </div>
                        <div class="inner_page_index_form_block_content">
                            <div class="inner_page_index_form_block_content_left">
                                <label>
                                    <input type="checkbox">
                                    Arts
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Communication
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Consultancy
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Design
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Education
                                </label>
                            </div>
                            <div class="inner_page_index_form_block_content_right">
                                <label>
                                    <input type="checkbox">
                                    Innovation
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Marketing
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Strategy
                                </label>
                                <label>
                                    <input type="checkbox">
                                    Team Building
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="inner_page_index_form_block_2">

                        <div class="inner_page_index_form_block_2_top">
                            <div class="inner_page_index_form_block_title">
                                Industry experience
                            </div>
                            <select class="select">
                                <option>Select industries</option>
                                <option>Business Services</option>
                                <option>Consumer Products and Services</option>
                                <option>Education</option>
                                <option>Energy</option>
                                <option>Entertainment</option>
                                <option>Financial Services</option>
                                <option>Government & Public Services</option>
                                <option>Healthcare & Pharmaceutical</option>
                                <option>Manufacturing</option>
                                <option>Media & Telecommunications</option>
                                <option>Military</option>
                                <option>Real Estate & Construction</option>
                                <option>Retail</option>
                                <option>Technology</option>
                                <option>Travel, Leisure & Hospitality</option>
                            </select>
                        </div>
                        <div class="inner_page_index_form_block_2_bottom">
                            <div class="inner_page_index_form_block_title">
                                Keywoard search
                            </div>
                            <input type="text" placeholder="Search for keywords">
                        </div>
                    </div>
                    <div class="inner_page_index_form_block_3">
                        <div class="inner_page_index_form_block_title">
                            SCHEDULE OPTIONS
                        </div>
                        <div class="inner_page_index_form_block_3_top">

                            <select>
                                <option>View all</option>
                                <option>SCHEDULE</option>
                                <option>TIMEZONE</option>
                                <option>DATE</option>
                            </select>
                        </div>
                        <div class="inner_page_index_form_block_3_midle">
                            <select>
                                <option>Select language</option>
                                <option>English</option>
                                <option>Portuguese</option>
                            </select>
                        </div>
                        <div class="inner_page_index_form_block_3_bottom">
                            <a href="#">SCHEDULE</a>
                        </div>
                    </div>
                </form>
            </div>


        </div>


    </div>
    </div>


    <div id="ex1" class="modal">
        <div class="popup_title">Good choice, <?= $first_name ?>!</div>


        <p>Getting a clear idea can inspire your life and work.</p>

        <p>The CLEARING PURPOSE FRAMEWORK free trial version will quickly guide you to structure your thoughts in just 1 hour. You will become clear on ideas for a specific situation in which you would like to contribute for change.
        </p>

        <p>It will be a brief experience with 2 exercises and 12 reflection questions.
        </p>

        <p>To get the most out of this experience, set time and space to pay full attention to the framework. The CLEARING PURPOSE FRAMEWORK free trial version may be an important step for you to get clear on what change you would like to bring to the world.
        </p>

        <p>Soon you will be able to progressively take on the other levels and use the complete CLEARING PURPOSE FRAMEWORK process to fully develop clarity around a project of impact.</p>


        <p>For now, here's what you will need to start:</p>

        <p>1.Download and read the  <a class="modal_url" href="https://drive.google.com/file/d/19JBjqIZGiqGbHSrTrdyP4FVJgDz-zUXZ/view?usp=sharing">preparatory guide</a> to get ready.</p>
        <p>2. Reserve 1 hour to be in a quiet place to work on the framework online.</p>
        <p>3. To help you prioritize your answers, use a 2-3 minute timeframe for each exercise or question.
        </p>
        <p>4. There’s no right answer. It is a reflection. Answer as you wish and put all your thoughts down.</p>
        <p>5. You may pause the experience anytime, especially if you need to confirm information before you answer any question.</p>
        <p>6. Have a great time, and enjoy it!</p>
        <a class="modal_start" href="/questions/questions-1/">Start NOW</a>
    </div>
<?php
get_footer();
?>