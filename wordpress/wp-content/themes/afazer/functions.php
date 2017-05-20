<?php

$theme_version = '1.0';

add_theme_support( 'post-thumbnails' ); 

function afazer_load_scripts_styles(){
	
    // scripts
	wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/js/jquery-1.11.0.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'wow', get_stylesheet_directory_uri() . '/js/wow.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), $theme_version, true);
    wp_enqueue_script( 'stellar', get_stylesheet_directory_uri() . '/js/jquery.stellar.js', array(), $theme_version, true);
    wp_enqueue_script( 'isotope', get_stylesheet_directory_uri() . '/js/jquery.isotope.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array(), $theme_version, true);
    wp_enqueue_script( 'counter', get_stylesheet_directory_uri() . '/js/counter.js', array(), $theme_version, true);
    wp_enqueue_script( 'carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'sticky', get_stylesheet_directory_uri() . '/js/jquery.sticky.js', array(), $theme_version, true);
    wp_enqueue_script( 'magnific', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'own', get_stylesheet_directory_uri() . '/js/own-menu.js', array(), $theme_version, true);
    wp_enqueue_script( 'TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'ScrollMagic', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'animation-gsap', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array(), $theme_version, true);
    wp_enqueue_script( 'ScrollMagic-debug', '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js', array(), $theme_version, true);
    wp_enqueue_script( 'animations', get_stylesheet_directory_uri() . '/js/animations.js', array(), $theme_version, true);
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), $theme_version, true);

    // Styles
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array());
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/css/main.css', array());
    wp_enqueue_style( 'estilo', get_stylesheet_directory_uri() . '/css/estilo.css', array());
    wp_enqueue_style( 'animate', get_stylesheet_directory_uri() . '/css/animate.css', array());
    wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/css/responsive.css', array());
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array());
}
add_action( 'wp_enqueue_scripts', 'afazer_load_scripts_styles' );

// Most Views
function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


// Our custom post type function
function create_posttype() {
    register_post_type('slides', 
        array(
            'labels' => array(
                'name'              => __('Slides'),
                'singular_name'     => __('Slide'),
                'menu_name'         => __( 'Slides' ),
                'parent_item_colon' => __( 'Parent Slide' ),
                'all_items'         => __( 'Todos Slides' ),
                'view_items'        => __( 'Ver Slide' ),
                'add_new_item'      => __( 'Adicionar Slide' ),
                'add_new'           => __( 'Adicionar Novo' ),
                'edit_item'         => __( 'Editar Slide' ),
                'update_item'       => __( 'Atualizar Slide'),
                'search_item'       => __( 'Pesquisar Slide' ),
            ),
            'supports'            => array('title', 'thumbnail'),
            'public'              => true,
            'can_export'          => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'rewrite'             => array('slug' => 'slides'),
            'menu_icon'           => 'dashicons-images-alt2',
        )
    );

    register_post_type('clientes', 
        array(
            'labels' => array(
                'name'              => __('Clientes'),
                'singular_name'     => __('Cliente'),
                'menu_name'         => __( 'Clientes' ),
                'parent_item_colon' => __( 'Parent Cliente' ),
                'all_items'         => __( 'Todos Clientes' ),
                'view_items'        => __( 'Ver Cliente' ),
                'add_new_item'      => __( 'Adicionar Cliente' ),
                'add_new'           => __( 'Adicionar Cliente' ),
                'edit_item'         => __( 'Editar Cliente' ),
                'update_item'       => __( 'Atualizar Cliente'),
                'search_item'       => __( 'Pesquisar Cliente' ),
            ),
            'supports'            => array('title', 'thumbnail'),
            'public'              => true,
            'can_export'          => true,
            'exclude_from_search' => false,
            'has_archive'         => false,
            'rewrite'             => array('slug' => 'clientes'),
            'menu_icon'           => 'dashicons-businessman',
        )
    );
}

add_action('init', 'create_posttype');






/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/cmb2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb2/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB2/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB2/init.php';
}


// Metabox for Cliente Messages
add_action( 'cmb2_admin_init', 'cmb2_clientes_metaboxes' );
function cmb2_clientes_metaboxes() {

	$prefix = '_clientes_';

	$cmb = new_cmb2_box( array(
		'id'            => 'clientes_metabox',
		'title'         => __( 'Clientes Metabox', 'cmb2' ),
		'object_types'  => array( 'clientes', ), // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Nome do Cliente', 'cmb2' ),
		'desc'       => __( 'Digite o nome do cliente', 'cmb2' ),
		'id'         => $prefix . 'nome',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

    // Regular text field
	$cmb->add_field( array(
		'name'       => __( 'Cargo/Função/Empresa do Clientes Text', 'cmb2' ),
		'id'         => $prefix . 'cargo',
		'type'       => 'text',
		'show_on_cb' => 'cmb2_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
	) );

    $cmb->add_field( array(
		'name' => esc_html__( 'Mensagem do Cliente', 'cmb2' ),
		'id'   => $prefix . 'mensagem',
		'type' => 'textarea',
	) );	

}

// Metabox for Page: AFAZER
require_once("library/page_afazer_metabox.php");

// Metabox for Page: SOLUCOES
require_once("library/page_solucoes_metabox.php");





?>