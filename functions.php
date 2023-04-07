<?php
/**
 * wpyandex functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wpyandex
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function wpyandex_scripts() {
	wp_enqueue_style( 'wpyandex-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );
	
	wp_enqueue_script( 'mask-js', get_template_directory_uri() . '/assets/js/mask.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wpyandex-js', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpyandex_scripts' );




function wpyandex_setup() {
	
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	
	register_nav_menus(
		array(
			'menu-header' => esc_html__( 'Меню в шапке', 'wpyandex' ),
			'menu-footer' => esc_html__( 'Меню в футере', 'wpyandex' ),
			'menu-popular' => esc_html__( 'Меню популярное', 'wpyandex' ),
		)
	);


	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'wpyandex_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Основные настройки',
			'menu_title'	=> 'Настройки темы сайта',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		)); 
	}
	




	 
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'wpyandex_setup' );





function wpyandex_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wpyandex' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wpyandex' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	
	register_sidebar([
		'name'          => esc_html__('Шапка поиск',''), 
		'id'            => "sidebar-blog",
		'before_widget' => '<div id="%1$s" class="single-sidebar-widget post-category-widget %2$s">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h4 class="single-sidebar-widget__title">',
		'after_title'   => "</h4>\n",
		
	]);
}
add_action( 'widgets_init', 'wpyandex_widgets_init' );






// Регистрируем новый тип записей туры
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('tours', array(
		'labels'             => array(
			'name'               => __('Как настроить рекламу'), // Основное название типа записи
			'singular_name'      => __('Как настроить рекламу'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Как настроить рекламу'),
			'add_new_item'       => __('Добавить новые Как настроить рекламу'),
			'edit_item'          => __('Редактировать Как настроить рекламу'),
			'new_item'           => __('Новые Как настроить рекламу'),
			'view_item'          => __('Посмотреть Как настроить рекламу'),
			'search_items'       => __('Найти Как настроить рекламу'),
			'not_found'          => __('Как настроить рекламу не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Как настроить рекламу')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
        'taxonomies'          => array( 'category' ),//Добавляем категории
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
	) );


    

    register_taxonomy('travels_days', ['tours','hide','reviews','reviews-mobile'], [
        'labels'                => [
            'name'              => 'Теги',
            'singular_name'     => 'День',
            'search_items'      => 'Найти Как настроить рекламу',
            'all_items'         => 'Все Как настроить рекламу',
            'view_item '        => 'Посмотреть Как настроить рекламу',
            'edit_item'         => 'Редактировать Как настроить рекламу',
            'update_item'       => 'Обновить',
            'add_new_item'      => 'Добавить Как настроить рекламу',
            'new_item_name'     => 'Добавить Как настроить рекламу',
            'menu_name'         => 'Теги',
        ],
        'description'           => '',
        'public'                => true,
        'hierarchical'          => true,
		 'rewrite'             => true
		// 'rewrite'               => array('slug'=>'brands')
    ]); 
	
	


	register_post_type('hide', array(
		'labels'             => array(
			'name'               => __('Скрытый блок'), // Основное название типа записи
			'singular_name'      => __('Скрытый блок'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Скрытый блок'),
			'add_new_item'       => __('Добавить новые Скрытый блок'),
			'edit_item'          => __('Редактировать Скрытый блок'),
			'new_item'           => __('Новые Скрытый блок'),
			'view_item'          => __('Посмотреть Скрытый блок'),
			'search_items'       => __('Найти Скрытый блок'),
			'not_found'          => __('Скрытый блок не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Скрытый блок')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
        'taxonomies'          => array( 'category' ),//Добавляем категории
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
	) );


	register_post_type('reviews', array(
		'labels'             => array(
			'name'               => __('Видеоотзывы'), // Основное название типа записи
			'singular_name'      => __('Видеоотзывы'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Видеоотзывы'),
			'add_new_item'       => __('Добавить новые Видеоотзывы'),
			'edit_item'          => __('Редактировать Видеоотзывы'),
			'new_item'           => __('Новые Видеоотзывы'),
			'view_item'          => __('Посмотреть Видеоотзывы'),
			'search_items'       => __('Найти Видеоотзывы'),
			'not_found'          => __('Видеоотзывы не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Видеоотзывы')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
        'taxonomies'          => array( 'category' ),//Добавляем категории
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
	) );


	register_post_type('reviews-mobile', array(
		'labels'             => array(
			'name'               => __('Видеоотзывы-мобильный'), // Основное название типа записи
			'singular_name'      => __('Видеоотзывы-мобильный'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Видеоотзывы-мобильный'),
			'add_new_item'       => __('Добавить новые Видеоотзывы-мобильный'),
			'edit_item'          => __('Редактировать Видеоотзывы-мобильный'),
			'new_item'           => __('Новые Видеоотзывы-мобильный'),
			'view_item'          => __('Посмотреть Видеоотзывы-мобильный'),
			'search_items'       => __('Найти Видеоотзывы-мобильный'),
			'not_found'          => __('Видеоотзывы-мобильный не найдено'),
			'not_found_in_trash' => __('В корзине услуг не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Видеоотзывы-мобильный')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => false,
		'menu_position'      => null,
        'taxonomies'          => array( 'category' ),//Добавляем категории
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
	) );


    




    


    

   
}

// Добавляем категории к своим типам записей Туры
        add_filter('pre_get_posts', 'query_post_type');
        
        function query_post_type($query) {
            if( is_category() ) {
                $post_type = get_query_var('post_type');
                if($post_type)
                    $post_type = $post_type;
                else
                    $post_type = array('nav_menu_item', 'post', 'tours','hide'); // don't forget nav_menu_item to allow menus to work!
                    $query->set('post_type',$post_type);
                return $query;
            }
        } 
        add_image_size( 'square-thumb', 350, 330 );




//УБИРАЕМ span и br в contact form 7
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    $content = str_replace('<br />', '', $content);
    return $content;
});
//УБИРАЕМ span и br в contact form 7




// define ('DISALLOW_FILE_EDIT', true);
// add_action("admin_menu", "remove_menus");
// function remove_menus() {
//    // remove_menu_page("index.php");                # Консоль
//    // remove_menu_page("edit.php");                 # Записи
//    // remove_menu_page("edit-comments.php");        # Комментарии
//    // remove_menu_page("edit.php?post_type=page");  # Страницы
//     //remove_menu_page("upload.php");               # Медиафайлы
//     //remove_menu_page("themes.php");               # Внешний вид
//     // remove_menu_page("plugins.php");              # Плагины
//     //remove_menu_page("users.php");                # Пользователи
//     //remove_menu_page("tools.php");                # Инструменты
//     //remove_menu_page("options-general.php");      # Параметры
//     //remove_menu_page("edit.php?post_type=acf-field-group"); # ACF
// }