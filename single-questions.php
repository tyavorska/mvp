<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mvp
 */

get_header();


$args = array(
    'post_type' => 'answers',
    'post_status' => 'publish',
    'author' => get_current_user_id(),
    'numberposts' => 1
);
$asnwer_post = get_posts($args);
$answerData = json_decode($asnwer_post[0]->post_content, true);
$answers = $answerData['answers'];
$blocked = false;
if ($answerData['finished'] == 1) {
    $blocked = true;
}

$current_user = wp_get_current_user();
$last_name = get_user_meta($current_user->ID, 'last_name', true);
$first_name = get_user_meta($current_user->ID, 'first_name', true);
$country = get_user_meta($current_user->ID, 'country', true);
$city = get_user_meta($current_user->ID, 'city', true);
$industry = get_user_meta($current_user->ID, 'industry', true);
$interest = get_user_meta($current_user->ID, 'cosoi', true);
$stars = get_user_meta($current_user->ID, 'stars', true);


if (get_locale() == 'en_US') {
    $title_introduction = 'Introduction';
    $title_purpose = 'PURPOSE';
    $title_vision = 'VISION';
    $title_result = 'RESULTS';
    $title_final = 'Final Vision';

    $text_introduction = 'Think about a situation in your community, organization or the world that you want to contribute to change or to improve. Think about what situation you  want to solve and in which context this situation is inserted.';
    $text_purpose = 'In this step, you will reflect about your perception of the situation and its context.';
    $text_vision = 'In this step, you will reflect on the potentials and resources available to solve this situation.';
    $text_result = 'In this step, you will reflect on the results that could be expected from this idea.';
    $text_final = 'Now, with the ideas and insights that were generated, think about the future of this situation and write a new headline for the situation.';

    $well_done = '
                        <div class="well_done_left">
                            <div class="well_done_left_top">
                               Well done, '.$current_user->user_firstname.'!
                            </div>
                            <div class="well_done_left_center">
                                <div>How do you feel about your idea? Check out the amazing work you have done.
                                </div>
                                <div>Keep in touch,'.$current_user->user_firstname.'!<br> Soon we will have
                                    available<br> the next level: 1- Clear
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
    
    
    ';
    $rating_answers = '
                        <div class="rating_answers_1">
                            Before you go, '.$current_user->user_firstname.', let us know.
                        </div>
                        <div class="rating_answers_2">
                            How likely is that you would recommend this experience to a friend or colleague? (0 being
                            not
                            likely and 10, extremely likely)
                        </div>
                        <div class="rating_answers_3">
                            <div class="rating_answers_3_block">
                                0
                            </div>
                            <div class="rating_answers_3_block">
                                1
                            </div>
                            <div class="rating_answers_3_block">
                                2
                            </div>
                            <div class="rating_answers_3_block">
                                3
                            </div>
                            <div class="rating_answers_3_block">
                                4
                            </div>
                            <div class="rating_answers_3_block">
                                5
                            </div>
                            <div class="rating_answers_3_block">
                                6
                            </div>
                            <div class="rating_answers_3_block">
                                7
                            </div>
                            <div class="rating_answers_3_block">
                                8
                            </div>
                            <div class="rating_answers_3_block">
                                9
                            </div>
                            <div class="rating_answers_3_block">
                                10
                            </div>
                        </div>
                        <div class="rating_answers_4">
                            Would you like to be informed when the experiences for levels 1, 2, 3, and 4 are launched?
                        </div>
                        <div class="rating_answers_5">
                            <div class="rating_answers_5_yes">Yes</div>
                            <div class="rating_answers_5_no">No</div>
                        </div>
                        <div class="rating_answers_6">
                            Thank you, '.$current_user->user_firstname.'!<br> See you soon.
                        </div>
                        <div class="rating_answers_7">
                            FINISH
                        </div>
    ';
    $add_answer = 'Add answer';
    $prev_arrow = 'Previous';
    $next_arrow = 'Next';

} else {
    $title_introduction = 'Introdução';
    $title_purpose = 'PROPÓSITO';
    $title_vision = 'VISÃO';
    $title_result = 'RESULTADOS';
    $title_final = 'Visão final';

    $text_introduction = 'Pense em uma situação da sua comunidade, organização ou do mundo que você deseja contribuir para uma mudança, uma correção ou uma melhoria. Pense que situação você quer solucionar e em qual contexto essa situação está inserida';
    $text_purpose = 'Nessa etapa você vai refletir sobre a sua percepção dessa situação e do seu contexto. ';
    $text_vision = 'Nessa etapa você irá refletir sobre os potenciais e recursos disponíveis para solucionar essa situação';
    $text_result = 'Nessa etapa você irá refletir sobre os resultados podem ser esperados dessa ideia.';
    $text_final = 'Agora, pense no futuro dessa situação a partir das ideias e insights que foram gerados, e escreva uma nova manchete sobre a situação.';

    $well_done = '
                        
                        <div class="well_done_left">
                            <div class="well_done_left_top">
                                Muito bem, '.$current_user->user_firstname.'!
                            </div>
                            <div class="well_done_left_center">
                                <div>Como você se sente sobre a sua ideia? Você pode rever as suas respostas quando quiser.
                                </div>
                                <div>Mantenha-se em contato,'.$current_user->user_firstname.'!<br>Logo teremos disponível o próximo nível: Propósito Claro.
                                </div>
                                <div>Esperamos por você.</div>
                            </div>
                            <div class="well_done_left_bottom">
                                Próximo
                            </div>
                        </div>
                        <div class="well_done_right">
                            <img src="/wp-content/themes/mvp/img/well_done_star.svg">
                            <div>
                                <div class="well_done_right_bold">
                                    Nível 1
                                </div>
                                <div class="well_done_right_normal">
                                    Concluído
                                </div>
                            </div>
                        </div>
    
    
    ';
    $rating_answers = '
                        <div class="rating_answers_1">
                            Antes de você ir, '.$current_user->user_firstname.', nos conte.
                        </div>
                        <div class="rating_answers_2">
                            Qual a probabilidade de você recomendar essa experiência para um amigo ou colega? (0 sendo nem um pouco provável e 10, extremamente provável) 
                        </div>
                        <div class="rating_answers_3">
                            <div class="rating_answers_3_block">
                                0
                            </div>
                            <div class="rating_answers_3_block">
                                1
                            </div>
                            <div class="rating_answers_3_block">
                                2
                            </div>
                            <div class="rating_answers_3_block">
                                3
                            </div>
                            <div class="rating_answers_3_block">
                                4
                            </div>
                            <div class="rating_answers_3_block">
                                5
                            </div>
                            <div class="rating_answers_3_block">
                                6
                            </div>
                            <div class="rating_answers_3_block">
                                7
                            </div>
                            <div class="rating_answers_3_block">
                                8
                            </div>
                            <div class="rating_answers_3_block">
                                9
                            </div>
                            <div class="rating_answers_3_block">
                                10
                            </div>
                        </div>
                        <div class="rating_answers_4">
                            Você gostaria de ser informado quando as experiências dos níveis 1, 2, 3 e 4, forem lançadas?
                        </div>
                        <div class="rating_answers_5">
                            <div class="rating_answers_5_yes">Sim</div>
                            <div class="rating_answers_5_no">Não</div>
                        </div>
                        <div class="rating_answers_6">
                            Obrigado, '.$current_user->user_firstname.'!<br> Até logo.
                        </div>
                        <div class="rating_answers_7">
                            FINALIZAR
                        </div>
    ';
    $add_answer = 'Adicionar resposta';
    $prev_arrow = 'Anterior';
    $next_arrow = 'Próximo';

}


//while (have_posts()) :
//the_post();
//
//$string = preg_replace("/[\r\n]+/", " ", get_the_content());
//var_dump($string);
//die();
//endwhile;
?>
<div class="inner_page_container">
    <div class="post_left_side">
        <!--img src="/wp-content/themes/mvp/img/USER-LEFT.jpg"-->
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
                    <div class="user_interest_title"><?php _e('Situations of interest', 'mvp');?></div>
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
            <div class="single_question_title">
                <?= $title_introduction ?>
            </div>
            <div class="question-title">
                <?= $text_introduction ?>
                <!--                --><?php //echo $current_user->user_firstname ?><!--!                -->
            </div>
            <main id="main" class="site-main single_question_wrapper">
                <div class="single_question_container">
                    <?php
                    //                    die();
                    while (have_posts()) :
                        the_post();

                        $string = preg_replace("/[\r\n]+/", " ", get_the_content());
                        $content = json_decode($string, true);
                        $count = sizeof($content['questions']);
                        foreach ($content['questions'] as $key => $question) {

                            echo '<div class="answer_block answer_block_for_answer" id="question-' . $key . '" data-id="' . $key . '">';
                            echo '<div class="quest_num">' . ($key + 1) . '/' . $count . '</div>';
                            echo '<div class="question_container"><span class="question_word">';

                            if (get_locale() == 'en_US') {
                                echo 'Question:';
                            } else {
                                echo 'Pergunta:';
                            }
                            echo '</span><span>' . nl2br($question) . '</span></div>';
                            $i = 0;
//                            echo '<div class="ansver_container">';
                            if (isset($answers[$key])) {
                                foreach ($answers[$key] as $answer) {
                                    echo '<div class="ansver_container">';
                                    echo '<label>';
                                    if (get_locale() == 'en_US') {
                                        echo 'Answer';
                                    } else {
                                        echo 'Resposta ';
                                    }
                                    echo '№' . ++$i . '</label>';
                                    echo '<div class="del_button"></div>';
                                    echo '<input ';
                                    if ($blocked) {
                                        echo 'disabled ';
                                    }
                                    echo 'class="answer_area" type="textarea" value="' . $answer . '" placeholder="This is some answer related to this question">';
                                    echo '</div>';
                                }
                            } else {
                                echo '<div class="ansver_container">';
                                echo '<label>Answer №' . ++$i . '</label>';
                                echo '<div class="del_button"></div>';
                                echo '<input class="answer_area"  placeholder="This is some answer related to this question">';
                                echo '</div>';
                            }
//                            echo '</div>';
                            if (!$blocked) {
                                echo '<a class="add_answer_button"><img src="/wp-content/themes/mvp/img/plus_rounded.svg"><span>'.$add_answer.'</span></a>';
                            }
                            echo '</div>';

                        }

                    endwhile; // End of the loop.

                    ?>
                    <div class="answer_block well_done">
                        <!--                        <div class="well_done_left">-->
                        <!--                            <div class="well_done_left_top">-->
                        <!--                                Well done, -->
                        <?php //echo $current_user->user_firstname ?><!--!-->
                        <!--                            </div>-->
                        <!--                            <div class="well_done_left_center">-->
                        <!--                                <div>How do you feel about your idea? Check out the amazing work you have done.-->
                        <!--                                </div>-->
                        <!--                                <div>Keep in touch, -->
                        <?php //echo $current_user->user_firstname ?><!--!<br> Soon we will have-->
                        <!--                                    available<br> the next level: 1- Clear-->
                        <!--                                    Purpose.-->
                        <!--                                </div>-->
                        <!--                                <div>Looking forward to seeing you back.</div>-->
                        <!--                            </div>-->
                        <!--                            <div class="well_done_left_bottom">-->
                        <!--                                Next-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                        <div class="well_done_right">-->
                        <!--                            <img src="/wp-content/themes/mvp/img/well_done_star.svg">-->
                        <!--                            <div>-->
                        <!--                                <div class="well_done_right_bold">-->
                        <!--                                    Level 1-->
                        <!--                                </div>-->
                        <!--                                <div class="well_done_right_normal">-->
                        <!--                                    Completed-->
                        <!--                                </div>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <?= $well_done ?>
                    </div>
                    <div class="answer_block rating_answers">
<!--                        <div class="rating_answers_1">-->
<!--                            Before you go, --><?php //echo $current_user->user_firstname ?><!--, let us know.-->
<!--                        </div>-->
<!--                        <div class="rating_answers_2">-->
<!--                            How likely is that you would recommend this experience to a friend or colleague? (0 being-->
<!--                            not-->
<!--                            likely and 10, extremely likely)-->
<!--                        </div>-->
<!--                        <div class="rating_answers_3">-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                0-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                1-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                2-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                3-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                4-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                5-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                6-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                7-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                8-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                9-->
<!--                            </div>-->
<!--                            <div class="rating_answers_3_block">-->
<!--                                10-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="rating_answers_4">-->
<!--                            Would you like to be informed when the experiences for levels 1, 2, 3, and 4 are launched?-->
<!--                        </div>-->
<!--                        <div class="rating_answers_5">-->
<!--                            <div class="rating_answers_5_yes">Yes</div>-->
<!--                            <div class="rating_answers_5_no">No</div>-->
<!--                        </div>-->
<!--                        <div class="rating_answers_6">-->
<!--                            Thank you, --><?php //echo $current_user->user_firstname ?><!--!<br> See you soon.-->
<!--                        </div>-->
<!--                        <div class="rating_answers_7">-->
<!--                            FINISH-->
<!--                        </div>-->
                        <?=  $rating_answers ?>
                    </div>
                </div>

                <!--                <button id="save">Save</button>-->
                <input type="hidden" id="answer_id" value="<?php echo $asnwer_post[0]->ID ?>">
                <input type="hidden" id="question_id" value="<?php echo get_the_ID() ?>">
                <input type="hidden" id="timer" value="<?php echo $answerData['timer'] ?>">
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

        jQuery('.single_question_container').on('afterChange', function (event, slick, direction) {
            var currentSlide = jQuery('.single_question_container').slick('slickCurrentSlide');
            if (currentSlide >= 0 && currentSlide <= 1) {
                console.log(currentSlide);
                jQuery('.single_question_title').text('<?= $title_introduction?>');
                jQuery('.question-title').text('<?= $text_introduction?>');
            } else if (currentSlide >= 2 && currentSlide <= 5) {
                console.log(currentSlide);
                jQuery('.single_question_title').text('<?= $title_purpose?>');
                jQuery('.question-title').text('<?= $text_purpose?>');
            } else if (currentSlide >= 6 && currentSlide <= 10) {
                console.log(currentSlide);
                jQuery('.single_question_title').text('<?= $title_vision?>');
                jQuery('.question-title').text('<?= $text_vision?>');
            } else if (currentSlide >= 11 && currentSlide <= 13) {
                console.log(currentSlide);
                jQuery('.single_question_title').text('<?= $title_result?>');
                jQuery('.question-title').text('<?= $text_result?>');
            } else if (currentSlide > 12) {
                console.log(currentSlide);
                jQuery('.single_question_title').text('<?= $title_final?>');
                jQuery('.question-title').text('<?= $text_final?>');
            }

            ;
        });
        jQuery('.single_question_container').slick({
            infinite: false,
            slidesToShow: 1,
            fade: true,
            arrows: true,
            prevArrow: '<button type="button" class="slick-prev"><?= $prev_arrow ?></button>',
            nextArrow: '<button type="button" class="slick-next"><?= $next_arrow ?></button>',
            slidesToScroll: 1
        });

        var reting_number = -1;
        jQuery('.rating_answers_3 div').click(function (e) {
            jQuery('.rating_answers_3 div').each(function () {
                jQuery(this).removeClass('reting_clicked');
            });
            jQuery(this).addClass('reting_clicked');
            reting_number = parseInt(jQuery(this).text());
        });

        function saveEvent() {
            var test = $('#answer_id').val();
            var result = false;
            var answers = [];
            $('.answer_block').each(function () {
                var result = [];
                var id = $(this).attr('data-id');
                $(this).find('.answer_area').each(function () {
                    if ($.trim($(this).val()) != '') {
                        result.push($(this).val());
                    }
                });
                answers.push(result);
            });
            var dataString = {
                'action': 'answers',
                'question_id': $('#question_id').val(),
                'timer': $('#timer').val(),
                answers: answers,
            };
            if ($('#answer_id').val() > 0) {
                dataString['answer_id'] = $('#answer_id').val();
            }
//            ТУТ УСЛОВИЕ ЧТО ЗАПОЛНЕНИЕ ЗАКОНЧЕНО


            if (reting_number > -1) {
                dataString['finished'] = 1;
                dataString['rating'] = reting_number;
            }
            if (jQuery('.rating_answers_5_yes').hasClass('reting_clicked')) {
                dataString['sendMail'] = 1;
            }

            <?php if (get_locale() == 'en_US') {?>
                dataString['lang'] = 'en';
            <?php }else{ ?>
                dataString['lang'] = 'pr';
            <?php } ?>

            <?php if(!$blocked){ ?>
            $.ajax({
                type: "POST",
                url: "<?= get_site_url();?>/wp-admin/admin-ajax.php",
                data: dataString,
                error: function (jqXHR, textStatus, errorThrown) {
                    console.error("The following error occured: " + textStatus, errorThrown);
                },
                success: function (data) {
                    $('#answer_id').val(data.answer_id);
                    if (dataString['finished'] == 1) {
                        window.location.href = '<?=home_url('/dashboard/') ?>';
                    }
                }
            });
            <?php }?>
            return result;
        }

        $('.slick-arrow').click(function () {
            saveEvent();
        });

        $('.rating_answers_7').click(function () {
            saveEvent();
        });
    });


</script>