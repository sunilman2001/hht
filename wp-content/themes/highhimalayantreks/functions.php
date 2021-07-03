<?php
/**
 * highhimalayantreks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package highhimalayantreks
 */

if ( ! function_exists( 'highhimalayantreks_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function highhimalayantreks_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on highhimalayantreks, use a find and replace
	 * to change 'highhimalayantreks' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'highhimalayantreks', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'highhimalayantreks' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'highhimalayantreks_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'highhimalayantreks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function highhimalayantreks_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'highhimalayantreks_content_width', 640 );
}
add_action( 'after_setup_theme', 'highhimalayantreks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function highhimalayantreks_widgets_init() {
    register_sidebar( array(
		'name'          => esc_html__( 'Guaranteed Info', 'highhimalayantreks' ),
		'id'            => 'guaranteed-text-info',
		'description'   => esc_html__( 'Guaranteed Info Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Destinations Information', 'highhimalayantreks' ),
		'id'            => 'destination-information',
		'description'   => esc_html__( 'Add Destination Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Nepal Highlights', 'highhimalayantreks' ),
		'id'            => 'nepal-highlights',
		'description'   => esc_html__( 'Add Nepal Highlights Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Tibet Highlights', 'highhimalayantreks' ),
		'id'            => 'tibet-highlights',
		'description'   => esc_html__( 'Add Tibet Highlights Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Bhutan Highlights', 'highhimalayantreks' ),
		'id'            => 'bhutan-highlights',
		'description'   => esc_html__( 'Add Bhutan Highlights Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );    
    
    register_sidebar( array(
		'name'          => esc_html__( 'Nepal Travel Information', 'highhimalayantreks' ),
		'id'            => 'nepal-travel-information',
		'description'   => esc_html__( 'Add Nepal Travel Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Tibet Travel Information', 'highhimalayantreks' ),
		'id'            => 'tibet-travel-information',
		'description'   => esc_html__( 'Add Tibet Travel Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Bhutan Travel Information', 'highhimalayantreks' ),
		'id'            => 'bhutan-travel-information',
		'description'   => esc_html__( 'Add Bhutan Travel Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
		'name'          => esc_html__( 'Things to do in Tibet', 'highhimalayantreks' ),
		'id'            => 'things-todo-in-tibet',
		'description'   => esc_html__( 'Add Things to do in Tibet Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Things to do in Bhutan', 'highhimalayantreks' ),
		'id'            => 'things-todo-in-bhutan',
		'description'   => esc_html__( 'Add Things to do in Bhutan Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Nepal Trekking Information', 'highhimalayantreks' ),
		'id'            => 'nepal-trekking-information',
		'description'   => esc_html__( 'Add Nepal Trekking Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
		'name'          => esc_html__( 'Nepal Peak Climbing Information', 'highhimalayantreks' ),
		'id'            => 'nepal-peak-climbing-information',
		'description'   => esc_html__( 'Add Peak Climbing Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Nepal Mountaineering Information', 'highhimalayantreks' ),
		'id'            => 'nepal-mountaineering-information',
		'description'   => esc_html__( 'Add Nepal Mountaineering Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Nepal Tour Information', 'highhimalayantreks' ),
		'id'            => 'nepal-tour-information',
		'description'   => esc_html__( 'Add Nepal Tour Information Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
		'name'          => esc_html__( 'Things to do in Nepal', 'highhimalayantreks' ),
		'id'            => 'things-todo-in-nepal',
		'description'   => esc_html__( 'Add Things to do in Nepal Here', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    

    register_sidebar( array(
		'name'          => esc_html__( 'Additional Acttivities in Nepal', 'highhimalayantreks' ),
		'id'            => 'additional-activities-in-nepal',
		'description'   => esc_html__( 'Add Additional Acttivities in Nepal', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="side-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    

    register_sidebar( array(
		'name'          => esc_html__( 'Header Top Right Menu', 'highhimalayantreks' ),
		'id'            => 'header-menu',
		'description'   => esc_html__( 'Add Header Top Right Menu', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="header-menu">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu Left', 'highhimalayantreks' ),
		'id'            => 'footer-menu-1',
		'description'   => esc_html__( 'Add Footer Left Menu', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu Middle', 'highhimalayantreks' ),
		'id'            => 'footer-menu-2',
		'description'   => esc_html__( 'Add Footer Middle Menu', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu Right', 'highhimalayantreks' ),
		'id'            => 'footer-menu-3',
		'description'   => esc_html__( 'Add Footer Right', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu Climbing Peaks', 'highhimalayantreks' ),
		'id'            => 'Footer-menu-climbing-peaks',
		'description'   => esc_html__( 'Add Footer Climbing Peaks', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Information', 'highhimalayantreks' ),
		'id'            => 'contact-information',
		'description'   => esc_html__( 'Add Contact Information', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Why choose us?', 'highhimalayantreks' ),
		'id'            => 'why-choose-us',
		'description'   => esc_html__( 'Add Why choose us', 'highhimalayantreks' ),
		'before_widget' => '<div id="%1$s" class="widget footer-widget text-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	
}
add_action( 'widgets_init', 'highhimalayantreks_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function highhimalayantreks_scripts() {
	wp_enqueue_style( 'highhimalayantreks-style', get_stylesheet_uri() );

	wp_enqueue_script( 'highhimalayantreks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'highhimalayantreks-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'highhimalayantreks_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/***************************** */
// added for theme functionality

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . '/inc/option-tree/ot-loader.php' );

// Integrate OptionTree
add_filter( 'ot_theme_mode', '__return_true' );

// show/Hide OptionTree Page
//add_filter( 'ot_show_pages', '__return_false' );
//add_filter( 'ot_show_new_layout', '__return_false' );


/* add excetpts to pages */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

// add support to execute php in widgets
add_filter('widget_text','execute_php',100);
function execute_php($html){
     if(strpos($html,"<"."?php")!==false){
          ob_start();
          eval("?".">".$html);
          $html=ob_get_contents();
          ob_end_clean();
     }
     return $html;
}

// archive title
add_filter( 'get_the_archive_title', function ( $title ) {
    if( is_category() ) {
        $title = single_cat_title( '', false );
    }
    return $title;
});

//adds custom class to submenu
class UL_Class_Walker extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"drop-down level-".$depth."\">\n";
  }
}

//removing link for the parent





// Breadcrumbs
function custom_breadcrumbs() {
       
    // Settings
    $separator          = '&gt;';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'the-breadcrumbs';
    $home_title         = 'Home';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            $category = get_the_category();
             
            if(!empty($category)) {
              
                // Get last category post is in
                $last_category = end(array_values($category));
                  
                // Get parent any categories and create array
                $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
                $cat_parents = explode(',',$get_cat_parents);
                  
                // Loop through parent categories and store in variable $cat_display
                $cat_display = '';
                foreach($cat_parents as $parents) {
                    $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                    $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
                }
             
            }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}

