<?php

add_action('wp_enqueue_scripts', 'dk_enqueue');
function dk_enqueue()
{
    wp_enqueue_style('dk-main', get_stylesheet_directory_uri() . '/css/modules/articles.min.css');
    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );
    wp_enqueue_style('dk-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
   // wp_enqueue_style( 'style-datepicker', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
    wp_enqueue_script('jquery');
    //wp_deregister_script( 'jquery-core' );
    //wp_register_script( 'jquery-core', get_stylesheet_directory_uri() . '/assets/js/libs.min.js', array(), '3.0', true);
	//wp_enqueue_script( 'jquery' );
    //wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js');
    wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/js/common.js', array(), '3.0', true );
}

add_filter('document_title_separator', 'dk_document_title_separator');
function dk_document_title_separator($sep)
{
    $sep = '|';
    return $sep;
}

add_filter('the_title', 'dk_title');
function dk_title($title)
{
    if ($title == '') {
        return '...';
    } else {
        return $title;
    }
}

add_filter('excerpt_more', 'dk_excerpt_read_more_link');
function dk_excerpt_read_more_link($more)
{
    if (!is_admin()) {
        global $post;
        return ' <a href="' . esc_url(get_permalink($post->ID)) . '" class="more-link">' . sprintf(__('...%s', 'blankslate'), '<span class="screen-reader-text">  ' . esc_html(get_the_title()) . '</span>') . '</a>';
    }
}

add_action('after_setup_theme', 'dk_setup');
function dk_setup()
{
    load_theme_textdomain('dklang', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo' );
    add_theme_support('responsive-embeds');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('search-form', 'navigation-widgets'));
    add_theme_support('woocommerce');

    register_nav_menus(
        [
            'header_menu' => 'Меню в шапке',
            'footer_menu' => 'Меню в подвале'
        ]
    );
}

add_action('widgets_init', 'dk_widgets_init');
function dk_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar Widget Area'),
        'id' => 'primary-widget-area',
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="widget-title">',
        'after_title' => '</div>',
    ));
}

function dk_custom_logo(){
    if( has_custom_logo() ){
        echo get_custom_logo();
    } else {
        echo 'Logo';
    }
}

// add class menu li
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// add class menu link
function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
      $atts['class'] = $args->link_class;
    }
    return $atts;
  }
  add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

  add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );
function appthemes_add_quicktags() {?>
	<script>
	    jQuery(document).ready(function(){
            if(typeof(QTags) !== 'undefined') {
            QTags.addButton( 'COR', 'cor', '<span class="cor">', '</span>');
            QTags.addButton( 'PRIST', 'prist', '<span class="prist">', '</span>');
            QTags.addButton( 'SUF', 'suf', '<span class="suf">', '</span>');
            QTags.addButton( 'OKON', 'okonch', '<span class="okonch">', '</span>');
            QTags.addButton( 'OSN', 'osn', '<span class="osn">', '</span>');
            QTags.addButton( 'PODL', 'podl', '<span class="podl xmdg">', '</span>');
            QTags.addButton( 'SKAZ', 'skaz', '<span class="skaz xmdg">', '</span>');
            QTags.addButton( 'OPR', 'opr', '<span class="opr xmdg">', '</span>');
            QTags.addButton( 'DOPOL', 'dopol', '<span class="dopol xmdg">', '</span>');
            QTags.addButton( 'OBST', 'obst', '<span class="obst xmdg">', '</span>');
            }
            });
	</script>
	</script>
	<?php
}