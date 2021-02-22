<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mvp
 */

if ( !current_user_can( 'administrator' )){
    wp_redirect(home_url( '/dashboard/' ));
    exit;
}
get_header();

$post   = get_post( 42 );
$output =  apply_filters( 'the_content', $post->post_content );
while (have_posts()) :
the_post();
$current_user =  get_user_by('ID', get_the_author_ID());

$last_name = get_user_meta($current_user->ID, 'last_name', true);
$first_name = get_user_meta($current_user->ID, 'first_name', true);
$country = get_user_meta($current_user->ID, 'country', true);
$city = get_user_meta($current_user->ID, 'city', true);
$industry = get_user_meta($current_user->ID, 'industry', true);
$interest = get_user_meta($current_user->ID, 'cosoi', true);
$stars = get_user_meta($current_user->ID, 'stars', true);
endwhile;

?>

<div class="inner_page_container">
    <div class="inner_page_left_side">
        <div class="user_info">
            <div class="user_info_1">
                <div class="user_profile_photo">
                    <?php echo get_avatar((int)$current_user->ID) ?>
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
                    <div class="user_interest_title"><?php _e('Situations of interest', 'mvp');?>:</div>
                    <?= $interest ?>
                </div>
                <div class="user_stars">
                    <div class="user_stars">
                        <?php if ($stars > 0) { ?>
                            <div class="full_stars"></div>
                        <?php } else { ?>
                            <div class="empty_stars"></div>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="user_info_2">
                <div class="user_info_2_top">
                    <?php _e('Statistic of the Leader:', 'mvp');?>
                </div>
                <div class="user_info_2_bottom">
                    <div class="user_info_2_bottom_left">
                        <div class="user_info_2_bottom_left_top">
                            0
                        </div>
                        <div class="user_info_2_bottom_left_bottom">
                            <?php _e('Followers', 'mvp');?>
                        </div>
                    </div>
                    <div class="user_info_2_bottom_center">
                        <div class="user_info_2_bottom_left_top">
                            1
                        </div>
                        <div class="user_info_2_bottom_left_bottom">
                            <?php _e('Visions', 'mvp');?>
                        </div>
                    </div>
                    <div class="user_info_2_bottom_right">
                        <div class="user_info_2_bottom_left_top">
                            10%
                        </div>
                        <div class="user_info_2_bottom_left_bottom">
                            <?php _e('Impact’s', 'mvp');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="user_info_3">
                <a href="#"><?php _e('Follow this leader', 'mvp');?></a>
            </div>
        </div>
    </div>
    <div class="inner_page_right_side">
        <div id="primary" class="content-area">
            <div class="single_question_title">RESULT PAGE</div>
            <div class="question-title">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs the passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero’s De Finibus Bonorum et Malorum for use in a type specimen book.
            </div>
            <main id="main" class="site-main single_question_wrapper">
                <div class="slider_arrows_append_container"></div>
                <div class="single_question_container2">
        <?php
        while (have_posts()) :
            the_post();


            $user = get_user_by('id', 1);
            $answerData = json_decode(get_the_content(), true);
            $answerContent = $answerData['answers'];
            $parent = get_post( $post->post_parent )->post_content;
            $string = preg_replace("/[\r\n]+/", " ", $parent);
            $questionContent = json_decode( $string , true);
            $count = sizeof($questionContent['questions']);

            foreach ($questionContent['questions'] as $key=>$question){
                echo '<div class="answer_block" id="question-'.$key.'" data-id="'.$key.'">';
                echo '<div class="quest_num">'.($key+1).'/'.$count.'</div>';
                echo '<div class="question_container"><span class="question_word">Question:</span><span>' . $question . '</span></div>';
                if(isset($answerContent[$key])){
                    foreach ($answerContent[$key] as $answer){
                        echo '<input class="answer_area" type="textarea" value="' . $answer . '">';
                    }
                }
                echo '</div>';

            }
//            foreach ($content['answers'] as $key => $answer) {
//                echo '<div class="answer_block" id="question-' . $key . '" data-id="' . $key . '">';
//                echo '<div>' . $key . ' +++ ' . $question . '</div>';
//                foreach ($answer as $text) {
//                    echo '<input class="answer_area" type="textarea" value="' . $text . '">';
//                }
//                echo '</div>';
//            }

        endwhile; // End of the loop.
        ?>
                    <div class="answer_block well_done">
                        <div class="well_done_left">
                            <div class="well_done_left_top">
                                Well done, <?php echo $current_user->user_firstname ?>!
                            </div>
                            <div class="well_done_left_center">
                                <div>How do you feel about your idea? Check out the amazing work you have done.
                                </div>
                                <div>Keep in touch, <?php echo $current_user->user_firstname ?>!<br> Soon we will have available<br> the next level: 1- Clear
                                    Purpose.
                                </div>
                                <div>Looking forward to seeing you back.</div>
                            </div>
                            <div class="well_done_left_bottom">
                                Next
                            </div>
                        </div>
                        <div class="well_done_right">
                            <img src="/wp-content/themes/mvp/img/well_done_star.svg">
                            <div>
                                <div class="well_done_right_bold">
                                    Level 1
                                </div>
                                <div class="well_done_right_normal">
                                    Completed
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="answer_block rating_answers">
                        <div class="rating_answers_1">
                            Before you go, <?php echo $current_user->user_firstname ?>, let us know.
                        </div>
                        <div class="rating_answers_2">
                            How likely is that you would recommend this experience to a friend or colleague? (0 being not
                            likely and 10, extremely likely)
                        </div>
                        <div class="rating_answers_3">
                            <?php
                                for($i=0;$i<=10;$i++){
                            ?>
                            <div class="rating_answers_3_block
                                <?php if($i==$answerData['rating'])
                                        echo 'reting_clicked';
                                    ?>
                            ">
                                <?= $i ?>
                            </div>
                            <?php }?>
                        </div>
                        <div class="rating_answers_4">
                            Would you like to be informed when the experiences for levels 1, 2, 3, and 4 are launched?
                        </div>
                        <div class="rating_answers_5">
                            <div class="rating_answers_5_yes
                            <?php if($answerData['sendMail']==1)
                                    echo 'reting_clicked';
                            ?>
                            ">Yes</div>
                            <div class="rating_answers_5_no">No</div>
                        </div>
                        <div class="rating_answers_6">
                            Thank you, <?php echo $current_user->user_firstname ?>!<br> See you soon.
                        </div>
                        <div class="rating_answers_7">
                            FINISH
                        </div>
                    </div>
<!--        <button id="save">Save</button>-->
        <input type="hidden" id="answer_id">


            </main><!-- #main -->
                </div><!-- #primary -->
        </div>
    </div>
    <?php
    get_sidebar();
    get_footer();

    ?>
<script>
    jQuery(document).ready(function ($) {

        jQuery('.single_question_container2').slick({
            infinite: false,
            slidesToShow: 2,
            centerMode: true,
            fade: false,
            arrows: true,
            appendArrows: jQuery('.slider_arrows_append_container'),
            slidesToScroll: 1
        });





        $('#save').click(function () {
            var test = $('#answer_id').val();
            var answers = [];
            $('.answer_block').each(function () {
                var result = [];
                var id = $(this).attr('data-id');
                $(this).find('.answer_area').each(function () {
                    result.push($(this).val());
                });
                answers.push(result);
            });
            console.log(answers);
            var dataString = {
                'action': 'answers',
                answers: answers,
            };
            if ($('#answer_id').val() > 0) {
                console.log('if true');
                dataString['answer_id'] = $('#answer_id').val();
            }
            console.log(answers);
            $.ajax({
                type: "POST",
                url: "<?= get_site_url();?>/wp-admin/admin-ajax.php",
                data: dataString,
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error("The following error occured: " + textStatus, errorThrown);
                },
                success: function (data) {
                    $('#answer_id').val(data.answer_id);
                    console.log("Hooray, it worked!");
                }
            });
        });
    });
</script>