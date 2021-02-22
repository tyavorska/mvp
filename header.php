<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mvp
 */


$user = get_userdata(1);
$username = $user->user_login;
$first_name = $user->first_name;
$last_name = $user->last_name;

$current_user = wp_get_current_user();
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style2.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header">
        <!--div class="site-branding">
			<?php
        the_custom_logo();
        if (is_front_page() && is_home()) :
            ?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
        else :
            ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
        endif;
        $mvp_description = get_bloginfo('description', 'display');
        if ($mvp_description || is_customize_preview()) :
            ?>
				<p class="site-description"><?php echo $mvp_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
        <div class="header-wrapper">
            <div class="header-left">
                <div class="header_logo">
                    <a href="/"><img src="/wp-content/themes/mvp/img/logo_clearporpuse-NEW.png"></a>
                </div>
                <nav id="site-navigation" class="main-navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>
                </nav>
            </div>
            <div class="header-right">
                <?php
                if (is_user_logged_in()) {
                    ?>
                    <div class="heder_profile_page">
                        <a href="/my-profile-page">My profile page</a>
                    </div>
                    <div class="header_profile">
                        <div class="header_profile_info">
                            <div class="header_profile_info_name"><?php if(get_locale() == 'en_US') { ?>
                                    Welcome,
                                <?php } else { ?>
                                    Bem-vindo,
                                <?php } ?> <?= $current_user->display_name ?></div>
                            <div class="header_profile_info_raiting">
                                <img src="/wp-content/themes/mvp/img/star-2.svg">
                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                            </div>
                        </div>
                        <div class="header_profile_photo">
                            <?php echo get_avatar((int)$current_user->ID) ?>
                        </div>
                        <div class="dropdown-content">
                            <div class="list-block">
                                <a href=" <?php if(get_locale() == 'en_US') { ?>
                                        /dashboard/
                                    <?php } else { ?>
                                        /dashboard/?lang=pt-pt
                                    <?php } ?>" class="topmenulink">
                                    <?php if(get_locale() == 'en_US') { ?>
                                        My Dashboard
                                    <?php } else { ?>
                                        Meu Dashboard
                                    <?php } ?>
                                </a>
                                <a href="<?php if(get_locale() == 'en_US') { ?>
                                        /my-profile-page/
                                    <?php } else { ?>
                                       /my-profile-page/?lang=pt-pt
                                    <?php } ?>" class="topmenulink">

                                    <?php if(get_locale() == 'en_US') { ?>
                                        Edit my Profile
                                    <?php } else { ?>
                                        Editar meu perfil
                                    <?php } ?>
                                </a>
                                <a href="<?php if(get_locale() == 'en_US') {
                                    echo wp_logout_url('/login/'); }
                                    else {
                                        echo wp_logout_url('/login/?lang=pt-pt');
                                    }
                                    ?>" class="topmenulink">
                                    <?php if(get_locale() == 'en_US') { ?>
                                        Log out
                                    <?php } else { ?>
                                        Sair
                                    <?php } ?>
                                    </a>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="header_profile_info_name_first"><a href="<?php if(get_locale() == 'en_US') {
                            echo wp_logout_url('/login/'); }
                        else {
                            echo wp_logout_url('/login/?lang=pt-pt');
                        }
                        ?>">
                            <?php if(get_locale() == 'en_US') { ?>
                                User login
                            <?php } else { ?>
                                Login de usuário
                            <?php } ?>
                        </a></div>
                <?php } ?>
                <div class="lang_switcher">
                    <?php echo do_shortcode('[wpml_language_selector_widget  native=1]'); ?>
                </div>
            </div>
            <div class="img-menu-mob">
                <img src="<?php echo get_template_directory_uri() ?>/img/MENU.svg" alt="">
            </div>
            <div class="menu-block">
                <div class="menu-container">
                    <div class="menu-header">
                        <a href="<?php bloginfo(url); ?>"><img
                                    src="/wp-content/themes/mvp/img/logo_clearporpuse-NEW.png" class="logo-menu" alt=""></a>
                        <div class="close-img">
                            <img src="<?php echo get_template_directory_uri() ?>/img/MENU-close.svg" alt="">
                        </div>
                    </div>
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'menu-ipad-mob',
                        'container' => 'div',
                        'container_class' => 'menu-ipad-mob-container',
                        'menu_class' => 'menu-ipad',
                        'menu_id' => 'menu-ipad-mob',
                    ));
                    ?>
                    <div class="bottom-menu-block">
                        <div class="language-block">
                            <?php
                            if (is_user_logged_in()) {
                                ?>
                                <div class="info-user">

                                    <div class="list-block-ipad">
                                        <a href=" <?php if(get_locale() == 'en_US') { ?>
                                        /dashboard/
                                    <?php } else { ?>
                                        /dashboard/?lang=pt-pt
                                    <?php } ?>" class="topmenulink">
                                            <?php if(get_locale() == 'en_US') { ?>
                                                My Dashboard
                                            <?php } else { ?>
                                                Meu Dashboard
                                            <?php } ?>
                                        </a>
                                        <a href="<?php if(get_locale() == 'en_US') { ?>
                                        /my-profile-page/
                                    <?php } else { ?>
                                       /my-profile-page/?lang=pt-pt
                                    <?php } ?>" class="topmenulink">

                                            <?php if(get_locale() == 'en_US') { ?>
                                                Edit my Profile
                                            <?php } else { ?>
                                                Editar meu perfil
                                            <?php } ?>
                                        </a>
                                        <a href="<?php if(get_locale() == 'en_US') {
                                            echo wp_logout_url('/login/'); }
                                        else {
                                            echo wp_logout_url('/login/?lang=pt-pt');
                                        }
                                        ?>" class="topmenulink">
                                            <?php if(get_locale() == 'en_US') { ?>
                                                Log out
                                            <?php } else { ?>
                                                Sair
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="arrow-slick"></div>
                                    <div class="heder_profile_page">
                                        <a href="/my-profile-page">My profile page</a>
                                    </div>
                                    <div class="header_profile">
                                        <div class="header_profile_info">
                                            <div class="header_profile_info_name">
                                                <?php if(get_locale() == 'en_US') { ?>
                                                    Welcome,
                                                <?php } else { ?>
                                                    Bem-vindo,
                                                <?php } ?>
                                               <?= $current_user->display_name ?></div>
                                            <div class="header_profile_info_raiting">
                                                <img src="/wp-content/themes/mvp/img/star-2.svg">
                                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                                <img src="/wp-content/themes/mvp/img/star-1.svg">
                                            </div>
                                        </div>

                                        <div class="header_profile_photo">
                                            <?php echo get_avatar((int)$current_user->ID) ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="header_profile_info_name_first"><a href="/login/">
                                        <?php if(get_locale() == 'en_US') { ?>
                                            User login
                                        <?php } else { ?>
                                            Login de usuário
                                        <?php } ?>
                                    </a></div>
                            <?php } ?>
                            <div class="lang_switcher">
                                <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
