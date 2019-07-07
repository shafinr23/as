<?php
require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
// basic setup function
if ( ! function_exists( 'theme_setup' ) ) :
	
	function theme_setup() {
		load_theme_textdomain( 'theme', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'mainmenu' => esc_html__( 'Primary', 'theme' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		add_theme_support( 'custom-background', apply_filters( 'theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'theme_setup' );


function theme_content_width() {

	$GLOBALS['content_width'] = apply_filters( 'theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );




// add css and js
function theme_scripts() {
	//wp_enqueue_style( 'theme-bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '215', true );
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', '21.65', true );
	wp_enqueue_style( 'theme-gress', get_template_directory_uri() . '/assets/css/color/green.css', '2.615', true );
	//wp_enqueue_style( 'theme-switcher', get_template_directory_uri() . '/assets/css/switcher.css', '2.6915', true );
	wp_enqueue_style( 'theme-font', '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'theme-bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1215', true );
	wp_enqueue_script( 'theme-jquery', get_template_directory_uri() . '/assets/scripts/jquery.min.js', array('jquery'), '12114855', true );
	wp_enqueue_script( 'theme-themepunch', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.plugins.min.js', array('jquery'), '12114855', true );
	wp_enqueue_script( 'theme-revolution', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.revolution.min.js', array('jquery'), '121995', true );
	wp_enqueue_script( 'theme-showbizpro', get_template_directory_uri() . '/assets/scripts/jquery.themepunch.showbizpro.min.js', array('jquery'), '1111215', true );
	wp_enqueue_script( 'theme-easing', get_template_directory_uri() . '/assets/scripts/jquery.easing.min.js', array('jquery'), '1215475', true );
	wp_enqueue_script( 'theme-tooltips', get_template_directory_uri() . '/assets/scripts/jquery.tooltips.min.js', array('jquery'), '1299615', true );
	wp_enqueue_script( 'theme-magnific', get_template_directory_uri() . '/assets/scripts/jquery.magnific-popup.min.js', array('jquery'), '91215', true );
	wp_enqueue_script( 'theme-superfish', get_template_directory_uri() . '/assets/scripts/jquery.superfish.js', array('jquery'), '12159', true );
	wp_enqueue_script( 'theme-twitter', get_template_directory_uri() . '/assets/scripts/jquery.twitter.js', array('jquery'), '55551215', true );
	wp_enqueue_script( 'theme-flexslider', get_template_directory_uri() . '/assets/scripts/jquery.flexslider.js', array('jquery'), '7771215', true );
	wp_enqueue_script( 'theme-jpanelmenu', get_template_directory_uri() . '/assets/scripts/query.jpanelmenu.js', array('jquery'), '1286715', true );
	wp_enqueue_script( 'theme-contact', get_template_directory_uri() . '/assets/scripts/jquery.contact.js', array('jquery'), '1215111', true );
	wp_enqueue_script( 'theme-isotope', get_template_directory_uri() . '/assets/scripts/jquery.isotope.min.js', array('jquery'), '996871215', true );
	//wp_enqueue_script( 'theme-switcher', get_template_directory_uri() . '/assets/scripts/switcher.js', array('jquery'), '99689971215', true );
	wp_enqueue_script( 'theme-custom', get_template_directory_uri() . '/assets/scripts/custom.js', array('jquery'), '222231215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

function custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );




function mamurjor_sidebar(){
    register_sidebar(
        array(
            'name'      =>      __('sidebar', 'mamurjor' ),
            'id'        =>      __('sidebar'),
            'description'   =>  __('this is right sidebar ','mamurjor'),
            'class'         => 'categories',
            'before_widget' =>  '<div class="widget">',
            'after_widget'  =>  '</div>',
            'before_title'  =>  '<h3 class="headline">',
            'after_title'   =>  '</h3><span class="line"></span><div class="clearfix"></div>'
        )
    );
    register_sidebar(
        array(
            'name'      =>      __('footer area', 'mamurjor' ),
            'id'        =>      __('footer'),
            'description'   =>  __('this is right sidebar ','mamurjor'),
            'before_widget' =>  '',
            'after_widget'  =>  '',
            'before_title'  =>  '',
            'after_title'   =>  ''
        )
    );
}
add_action("widgets_init","mamurjor_sidebar");

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'current';
    }
    return $classes;
}

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Home</a>';
    if (is_category() || is_single()) {
       ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
        <?php
        the_category(' &bull; ');
        if (is_single()) {
            ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <?php
            the_title();
        }
    } elseif (is_page()) {
        ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
        <?php
        echo the_title();
    } elseif (is_search()) {
        ?> <i class="fa fa-angle-right" aria-hidden="true"></i>
        <?php
        echo the_search_query();

    }
}