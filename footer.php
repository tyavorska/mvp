<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvp
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
    <div class="footer-inner">
        <div class="footer_top central-block">
            <div class="footer_top_logo">
                <a href="/" class="footer_top_logo_img">
                    <img src="/wp-content/themes/mvp/img/logo_clearporpuse-3-white.png">
                </a>
                <div class="footer_top_logo_text">
                    <div class="footer_top_logo_text_bold">Clarity Method</div>
                    <div class="footer_top_logo_text_thin">Clearing Purpose Framework ®</div>
                </div>
            </div>
            <div class="footer_top_menu">
                <?php wp_nav_menu("menu=menu footer"); ?>
            </div>
            <div class="footer_top_form">
                <div class="tnp tnp-subscription">
                    <form method="post" action="http://mvp.cruks.pp.ua/?na=s" onsubmit="return newsletter_check(this)">
                        <input type="hidden" name="nlang" value="">
                        <div class="tnp-field tnp-field-email">
                            <input class="tnp-email" type="email" name="ne"
                                   placeholder=
                                   <?php if(get_locale() == 'en_US') { ?>
                                    "Leadership and purpose in your inbox"
                                <?php } else { ?>
                                    "Liderança e propósito no seu e-mail"
                                <?php } ?>  required >
Б
                        </div>
                    </form>
                </div>
                <div class="social-bottom">
                    <a href="https://www.instagram.com/clearpurpose.global/" target="_blank"></a>
                    <a href="https://www.linkedin.com/company/65283404" target="_blank"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom central-block">
        <div class="footer_bottom_copirights">
            <?php if(get_locale() == 'en_US') { ?>
                Copyright (c) 2020. All rights reserved.
            <?php } else { ?>
                Copyright (c) 2020. Todos os direitos reservados.
            <?php } ?>
            </div>
        <div class="footer_bottom_documents">
            <a href="/terms-of-use/" class="footer_bottom_documents_terms">
                <?php if(get_locale() == 'en_US') { ?>
                    Terms of Use
                <?php } else { ?>
                    Termos de uso
                <?php } ?>
            </a>
            <a href="/privacy-policy" class="footer_bottom_documents_privacy">
                <?php if(get_locale() == 'en_US') { ?>
                    Privacy Policy
                <?php } else { ?>
                    Política de privacidade

                <?php } ?>
            </a>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>

<?php wp_footer(); ?>

</body>
</html>
