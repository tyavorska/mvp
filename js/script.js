jQuery(document).ready(function () {
    jQuery('.blog_first_post').slick({
        infinite: true,
        slidesToShow: 1,
        arrows: false,
        slidesToScroll: 1
    });


    jQuery('.post_main_text img').fancybox({
        // Options will go here
    });
    //acordion script
    jQuery('.acord_inner_container').click(function () {
        jQuery(this).toggleClass('acord_open_container');
        jQuery(this).children('.acord_text').toggleClass('acord_open');
    });
    jQuery('select').SumoSelect();

});

jQuery(document).ready(function () {
    jQuery('.section-home-testimonials').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    jQuery('.home-img-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 3000
    });
    jQuery('.image-clear-purpose-click').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        infinite: false,
        responsive: [
            {
                breakpoint: 770,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    jQuery('.answer_block .add_answer_button').click(function () {
        var answ_number = jQuery(this).parent().find('.ansver_container').length + 1;
        jQuery(this).before('<div class=\"ansver_container\"><label>Answer №' + answ_number + '</label><div class="del_button"></div><input class=\"answer_area\" type=\"textarea\" value=\"\" placeholder=\"This is some answer related to this question\" tabindex=\"0\"></div>');
    });
    // jQuery('.del_button').click(function () {
    //     jQuery( this ).parent().remove();
    //     console.log("+++");
    // });

});
jQuery(function () {
    jQuery(document).on('click touchstart', '.del_button', function () {
        jQuery(this).parent().remove();
        console.log("+++");
    });
});
// jQuery('.answer_block').on('click', '.del_button', function(e){
//     jQuery( this ).parent().remove();
//     console.log("+++");
// });
jQuery(document).ready(function () {
    jQuery('.img-menu-mob').click(function () {
        jQuery('.menu-block').css("transform", "translateX(0px)");
        jQuery('body').css({"overflow": "visible"});
        jQuery('.body').fadeIn();
    });

    jQuery('.close-img').click(function () {
        jQuery('.menu-block').css("transform", "translateX(100vw)");
        jQuery('body').css({"overflow": "visible"});
        jQuery('.body').fadeOut();
    });

    jQuery('.body').click(function () {
        jQuery('.menu-block').css("transform", "translateX(100vw)");
        jQuery('body').css({"overflow": "visible"});
        jQuery('.body').fadeOut();
    });
});

jQuery(document).ready(function () {

    jQuery('.info-user').click(function () {
        jQuery('.list-block-ipad').css("transform", "translateY(30px)");
        jQuery('.list-block-ipad').css("visibility", "visible ");
        jQuery('.header_profile').css("transform", "translateY(30px)");
        jQuery('.header_profile').css("visibility", "hidden");
        jQuery('.arrow-slick').css("transform", "rotate(-180deg");
    })

    jQuery('.list-block-ipad').click(function () {
        jQuery('.header_profile').css("transform", "translateY(0)");
        jQuery('.header_profile').css("visibility", "visible ");
        jQuery('.list-block-ipad').css("transform", "translateY(-40px)");
        jQuery('.list-block-ipad').css("visibility", "hidden");
        jQuery('.arrow-slick').css("transform", "rotate(0");
    })
    jQuery('.topmenulink').click(function () {
        jQuery('.topmenulink ').removeClass('active');
        jQuery(this).addClass('active');
    });

    jQuery('.button.slick-next.slick-arrow').click(function (e) {

    })
    jQuery('.single_question_container').on('afterChange', function (event, slick, direction) {
        var currentSlide = jQuery('.single_question_container').slick('slickCurrentSlide');
        if (currentSlide >= 16) {
            jQuery('.slick-arrow').addClass('destroed_nav')
        } else {
            jQuery('.slick-arrow').removeClass('destroed_nav')
        }
        ;
    });



    jQuery('.well_done_left_bottom').click(function (e) {

        var dfgg = true;
        jQuery('.answer_block_for_answer').each(function () {
            if (jQuery(this).find(jQuery('input')).length > 0 && dfgg) {
                jQuery('.answer_block input').each(function () {
                    if (jQuery(this).val().lenght < 1) {
                        dfgg = false;
                        return false;
                    }
                });
            } else {
                dfgg = false;
                return false;
            };
        });
        console.log(dfgg);
        if(dfgg){
            jQuery('.single_question_container').slick('slickGoTo', '17');
        }
    });


    jQuery('.single-questions .rating_answers_5 div').click(function (e) {
        jQuery('.single-questions .rating_answers_5 div').each(function () {
            jQuery(this).removeClass('reting_clicked');
        });
        jQuery(this).addClass('reting_clicked');



    });


})