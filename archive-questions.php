<?php
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
                                2967
                            </div>
                            <div class="user_info_2_bottom_left_bottom">
                                Followers
                            </div>
                        </div>
                        <div class="user_info_2_bottom_center">
                            <div class="user_info_2_bottom_left_top">
                                65
                            </div>
                            <div class="user_info_2_bottom_left_bottom">
                                Visions
                            </div>
                        </div>
                        <div class="user_info_2_bottom_right">
                            <div class="user_info_2_bottom_left_top">
                                21%
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
        <div class="inner_page_right_side">
            <div class="inner_page_right_side_welcome">
                <div class="inner_page_right_side_welcome_medium">Welcome, Naomi!</div>
                <div class="inner_page_right_side_welcome_light">We are looking forward to seeing your vision drive your
                    leadership in Coaching.
                </div>
            </div>
            <section class="section-steps central-block">

                <div class="steps-inner-sections">
                    <div class="sections-steps-item-block">
                        <!--                        <a href="--><? //=$question?><!--">-->
                        <?php if($answerData['finished']==1){ ?>
                            <a href="#">
                        <?php }else{?>
                            <a href="#ex1" rel="modal:open">
                        <?php }?>
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
        <div class="popup_title">Good choice, Naomi!</div>


        <p>Getting a clear idea can inspire your life and work.</p>

        <p>Clear Idea framework is designed to guide you to structure your thoughts so you can get insights
            for a certain situation you would like to contribute and bring impact to.</p>

        <p>This framework will guide you through the 12 questions for reflection and no facilitation is
            needed.</p>

        <p>Expect to clearly see ideas from a clear purpose.</p>

        <p>To get the most out of this experience, carve out the time and space so you can give your
            framework your full attention. The Clear Idea framework may be a very important step for you to
            figure out what contribution you would like to bring to the world.</p>

        <p>You will be able to progressively accomplish other levels (available soon!) that include
            facilitation, to
            get clarity from deeper reflection exercises and assignments.</p>

        <p>Here’s what you will need to start:</p>

        <p>1.Download and read the  <a class="modal_url" href="https://drive.google.com/file/d/19JBjqIZGiqGbHSrTrdyP4FVJgDz-zUXZ/view?usp=sharing">preparatory guide</a> to get ready.</p>
        <p>2. Reserve 1 hour.</p>
        <p>3. You will receive 12 questions to organize your thoughts, with a 3-minute timeframe each to help</p>
        <p>you prioritize your answers.</p>
        <p>4. There’s no right answer. It is a reflection. Answer as you wish and put all your thoughts down.</p>
        <p>5. Feel free to pause the experience anytime. Especially if you need to confirm any information for
            your answers.</p>
        <p>6. Click now to start, and enjoy!</p>
        <a class="modal_start" href="<?=$question?>">Start NOW</a>
    </div>
<?php
get_footer();
?>