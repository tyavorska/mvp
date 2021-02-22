<?php
/**
 * mvp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mvp
 */

if (!function_exists('mvp_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function mvp_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on mvp, use a find and replace
         * to change 'mvp' to the name of your theme in all the template files.
         */
        load_theme_textdomain('mvp', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'mvp'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('mvp_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'mvp_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mvp_content_width()
{
    // This variable is intended to be overruled from themes.
    // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
    // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
    $GLOBALS['content_width'] = apply_filters('mvp_content_width', 640);
}

add_action('after_setup_theme', 'mvp_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mvp_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'mvp'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'mvp'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'mvp_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function mvp_scripts()
{
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/css/slick.css');
    wp_enqueue_style('sumoselect-css', get_template_directory_uri() . '/css/sumoselect.css');
    wp_enqueue_style('fancy-css', get_template_directory_uri() . '/css/jquery.fancybox.css');

    wp_enqueue_style('mvp-style', get_stylesheet_uri());
    wp_enqueue_style('home-tania', get_template_directory_uri() . '/home-tania.css');

    wp_enqueue_script('mvp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('mvp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.js');
    wp_enqueue_script('sumoselect-js', get_template_directory_uri() . '/js/jquery.sumoselect.js');
    wp_enqueue_script('fancy-js', get_template_directory_uri() . '/js/jquery.fancybox.js');
    wp_enqueue_script('script-js', get_template_directory_uri() . '/js/script.js');
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'mvp_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


add_action('init', 'register_post_types');
function register_post_types()
{
    register_post_type('questions', array(
        'label' => null,
        'labels' => array(
            'name' => 'questions', // основное название для типа записи
            'singular_name' => 'questions', // название для одной записи этого типа
            'add_new' => 'Add questions', // для добавления новой записи
            'add_new_item' => 'Add questions', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Edit questions', // для редактирования типа записи
            'new_item' => 'New questions', // текст новой записи
            'view_item' => 'View questions', // для просмотра записи этого типа.
            'search_items' => 'Find questions', // для поиска по этим типам записи
            'not_found' => 'not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'not found in trash', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'questions', // название меню
        ),
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor','author'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ));

    register_post_type('answers', array(
        'label' => null,
        'labels' => array(
            'name' => 'answers', // основное название для типа записи
            'singular_name' => 'answers', // название для одной записи этого типа
            'add_new' => 'Add answers', // для добавления новой записи
            'add_new_item' => 'Add answers', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item' => 'Edit answers', // для редактирования типа записи
            'new_item' => 'New answers', // текст новой записи
            'view_item' => 'View answers', // для просмотра записи этого типа.
            'search_items' => 'Find answers', // для поиска по этим типам записи
            'not_found' => 'not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'not found in trash', // если не было найдено в корзине
            'parent_item_colon' => '', // для родителей (у древовидных типов)
            'menu_name' => 'answers', // название меню
        ),
        'description' => '',
        'public' => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu' => null, // показывать ли в меню адмнки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest' => null, // добавить в REST API. C WP 4.7
        'rest_base' => null, // $post_type. C WP 4.7
        'menu_position' => null,
        'menu_icon' => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical' => false,
        'supports' => ['title', 'editor'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies' => [],
        'has_archive' => true,
        'rewrite' => true,
        'query_var' => true,
    ));
}


add_action('wp_ajax_answers', 'answers');
add_action('wp_ajax_nopriv_answers', 'answers');

function answers()
{

    // maybe check some permissions here, depending on your app
//    if (!current_user_can('edit_posts'))
//        exit;

    $post_data = array(
        'comment_status' => 'closed',                                             // 'closed' означает, что комментарии закрыты.
        'ping_status' => 'closed',                                             // 'closed' означает, что пинги и уведомления выключены.
        'post_author' => get_current_user_id(),                                                     // ID автора записи
        'post_parent' => $_POST['question_id'],                                                     // ID родительской записи, если нужно.
        'post_status' => 'publish',         // Статус создаваемой записи.
        'post_type' => 'answers', // Тип записи.
        'meta_input' => array('meta_key' => 'meta_value'),                             // добавит указанные мета поля. По умолчанию: ''. с версии 4.4.
    );


    if ($_POST['answer_id'] > 0)
        $post_data['ID'] = $_POST['answer_id'];

    $answers = json_decode(get_post_field('post_content', $post_data['ID']), true)['answers'];

    if (isset($_POST['answers'])) {
        $currentAns = $_POST['answers'];
        foreach ($currentAns as $key => $ans) {
            $answers[$key] = $ans;
        }
    }


    if (isset($_POST['answers'])) {
        $result['timer'] = $_POST['timer'];
    }
    if (isset($_POST['rating'])) {
        $result['rating'] = $_POST['rating'];
    }
    if (isset($_POST['finished'])) {
        $result['finished'] = $_POST['finished'];
    }
    if (isset($_POST['sendMail'])) {
        $result['sendMail'] = $_POST['sendMail'];
    }
    if (isset($_POST['lang'])) {
        $result['lang'] = $_POST['lang'];
    }
    $result['answers'] = $answers;


    $post_data['post_content'] = json_encode($result);
//    var_dump($result);
//    die();
    $new_post_ID = wp_insert_post($post_data);

    // send some information back to the javascipt handler
    $response = array(
        'status' => '200',
        'message' => 'OK',
        'answer_id' => $new_post_ID
    );

    // normally, the script expects a json respone
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($response);

    exit; // important
}

//add_action( 'wp_login_failed', 'my_front_end_login_fail' );
//function my_front_end_login_fail( $username ) {
//    $referrer = $_SERVER['HTTP_REFERER'];  // откуда пришел запрос
//
//    // Если есть referrer и это не страница wp-login.php
//    if( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
//        wp_redirect( add_query_arg('login', 'failed', $referrer ) );  // редиркетим и добавим параметр запроса ?login=failed
//        exit;
//    }
//}

//add_action('after_setup_theme', 'remove_admin_bar');
//
//function remove_admin_bar() {
//    if (!current_user_can('administrator') && !is_admin()) {
//        show_admin_bar(false);
//    }
//}


function login_redirect( $redirect_to, $request, $user ){
    return home_url();
}
add_filter( '   login_redirect', 'login_redirect', 10, 3 );