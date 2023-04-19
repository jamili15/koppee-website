<?php

function wpb_theme_setup()
{

    add_theme_support('post-thumbnails');

    register_nav_menus(array(

        'primary' => __('Primary Menu')


    ));
}

function wp_custom_list_class($atts, $items, $args)
{

    $class = 'p-2 text-muted';
    $atts['class'] = $class;
    return $atts;
}


function set_excerpt_lenght()
{
    return 35;
}


function wpb_init_widget($id)
{

    register_sidebar(array(

        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'


    ));
}



add_action('after_setup_theme', 'wpb_theme_setup');
add_action('widgets_init', 'wpb_init_widget');
add_filter('nav_menu_link_attributes', 'wp_custom_list_class', 10, 3);
add_filter('excerpt_length', 'set_excerpt_lenght');








/*
* Creating a function to create our CPT
*/

function custom_post_type()
{

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x('Movies', 'Post Type General Name', 'twentytwentyone'),
        'singular_name'       => _x('Movie', 'Post Type Singular Name', 'twentytwentyone'),
        'menu_name'           => __('Movies', 'twentytwentyone'),
        'parent_item_colon'   => __('Parent Movie', 'twentytwentyone'),
        'all_items'           => __('All Movies', 'twentytwentyone'),
        'view_item'           => __('View Movie', 'twentytwentyone'),
        'add_new_item'        => __('Add New Movie', 'twentytwentyone'),
        'add_new'             => __('Add New', 'twentytwentyone'),
        'edit_item'           => __('Edit Movie', 'twentytwentyone'),
        'update_item'         => __('Update Movie', 'twentytwentyone'),
        'search_items'        => __('Search Movie', 'twentytwentyone'),
        'not_found'           => __('Not Found', 'twentytwentyone'),
        'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('movies', 'twentytwentyone'),
        'description'         => __('Movie news and reviews', 'twentytwentyone'),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array('genres'),
        /* A hierarchical CPT is like Pages and can have
            * Parent and child items. A non-hierarchical CPT
            * is like Posts.
            */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('movies', $args);
}

/* Hook into the 'init' action so that the function
    * Containing our post type registration is not 
    * unnecessarily executed. 
    */

add_action('init', 'custom_post_type', 0);



// Our custom post type function
function create_posttype() {
  
    register_post_type( 'movies',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Movies' ),
                'singular_name' => __( 'Movie' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'movies'),
            'show_in_rest' => true,
  
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );