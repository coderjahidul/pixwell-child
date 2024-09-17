<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'pixwell_child_style' );
				function pixwell_child_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
				}

/**
 * Your code goes below.
 */
// register custom post type community post
function register_community_post_type() {
    $labels = array(
        'name'               => _x('Community Posts', 'post type general name', 'pixwell-child'),
        'singular_name'      => _x('Community Post', 'post type singular name', 'pixwell-child'),
        'menu_name'          => _x('Community Posts', 'admin menu', 'pixwell-child'),
        'name_admin_bar'     => _x('Community Post', 'add new on admin bar', 'pixwell-child'),
        'add_new'            => _x('Add New', 'community post', 'pixwell-child'),
        'add_new_item'       => __('Add New Community Post', 'pixwell-child'),
        'new_item'           => __('New Community Post', 'pixwell-child'),
        'edit_item'          => __('Edit Community Post', 'pixwell-child'),
        'view_item'          => __('View Community Post', 'pixwell-child'),
        'all_items'          => __('All Community Posts', 'pixwell-child'),
        'search_items'       => __('Search Community Posts', 'pixwell-child'),
        'parent_item_colon'  => __('Parent Community Posts:', 'pixwell-child'),
        'not_found'          => __('No community posts found.', 'pixwell-child'),
        'not_found_in_trash' => __('No community posts found in Trash.', 'pixwell-child')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'guest-post'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'menu_icon'          => 'dashicons-groups', // Optional: Use a dashicon for the menu icon
        'show_in_rest'       => true, // Enable the block editor (Gutenberg)
    );

    register_post_type('community_post', $args);
}

add_action('init', 'register_community_post_type');

function register_community_post_taxonomies() {
    // Register Community Category (hierarchical like categories)
    $category_labels = array(
        'name'              => _x('Community Categories', 'taxonomy general name', 'pixwell-child'),
        'singular_name'     => _x('Community Category', 'taxonomy singular name', 'pixwell-child'),
        'search_items'      => __('Search Community Categories', 'pixwell-child'),
        'all_items'         => __('All Community Categories', 'pixwell-child'),
        'parent_item'       => __('Parent Community Category', 'pixwell-child'),
        'parent_item_colon' => __('Parent Community Category:', 'pixwell-child'),
        'edit_item'         => __('Edit Community Category', 'pixwell-child'),
        'update_item'       => __('Update Community Category', 'pixwell-child'),
        'add_new_item'      => __('Add New Community Category', 'pixwell-child'),
        'new_item_name'     => __('New Community Category Name', 'pixwell-child'),
        'menu_name'         => __('Categories', 'pixwell-child'),
    );

    $category_args = array(
        'labels'            => $category_labels,
        'hierarchical'      => true, // Set to true for category-like behavior
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'community-category'),
        'show_in_rest'      => true, // Enable for block editor (Gutenberg)
    );

    register_taxonomy('community_category', array('community_post'), $category_args);

    // Register Community Tag (non-hierarchical like tags)
    $tag_labels = array(
        'name'                       => _x('Community Tags', 'taxonomy general name', 'pixwell-child'),
        'singular_name'              => _x('Community Tag', 'taxonomy singular name', 'pixwell-child'),
        'search_items'               => __('Search Community Tags', 'pixwell-child'),
        'popular_items'              => __('Popular Community Tags', 'pixwell-child'),
        'all_items'                  => __('All Community Tags', 'pixwell-child'),
        'edit_item'                  => __('Edit Community Tag', 'pixwell-child'),
        'update_item'                => __('Update Community Tag', 'pixwell-child'),
        'add_new_item'               => __('Add New Community Tag', 'pixwell-child'),
        'new_item_name'              => __('New Community Tag Name', 'pixwell-child'),
        'separate_items_with_commas' => __('Separate community tags with commas', 'pixwell-child'),
        'add_or_remove_items'        => __('Add or remove community tags', 'pixwell-child'),
        'choose_from_most_used'      => __('Choose from the most used community tags', 'pixwell-child'),
        'not_found'                  => __('No community tags found.', 'pixwell-child'),
        'menu_name'                  => __('Tags', 'pixwell-child'),
    );

    $tag_args = array(
        'labels'            => $tag_labels,
        'hierarchical'      => false, // Set to false for tag-like behavior
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'         => true,
        'rewrite'           => array('slug' => 'community-tag'),
        'show_in_rest'      => true, // Enable for block editor (Gutenberg)
    );

    register_taxonomy('community_tag', array('community_post'), $tag_args);
}
add_action('init', 'register_community_post_taxonomies');


// Show admin error messages for missing fields.
function show_missing_fields_admin_notice() {
    if ( isset( $_GET['missing_thumbnail'] ) ) {
        echo '<div class="error"><p>Error: Please set a Featured Image before publishing.</p></div>';
    }

    if ( isset( $_GET['missing_image_data'] ) ) {
        echo '<div class="error"><p>Error: Featured Image is missing alt text, caption, source link, or internal link.</p></div>';
    }

    if ( isset( $_GET['missing_category'] ) ) {
        echo '<div class="error"><p>Error: Please select at least one Category other than "Uncategorized" before publishing.</p></div>';
    }

    if ( isset( $_GET['missing_tags'] ) ) {
        echo '<div class="error"><p>Error: Please add at least one Tag before publishing.</p></div>';
    }
}

add_action( 'admin_notices', 'show_missing_fields_admin_notice' );

function custom_breadcrumbs() {
    // Settings
    $separator = ' > ';
    $home_title = 'Home';

    // Get the query & post information
    global $post;

    // Build the breadcrumbs
    echo '<ul class="breadcrumbs">';

    // Home page
    echo '<li><a href="' . get_home_url() . '">' . $home_title . '</a></li>';
    echo '<li>' . $separator . '</li>';

    if (is_single()) {
        // Single post (e.g. post type)
        $post_type = get_post_type();
        if ($post_type != 'post') {
            $post_type_obj = get_post_type_object($post_type);
            $post_type_link = get_post_type_archive_link($post_type);
            echo '<li><a href="' . $post_type_link . '">' . $post_type_obj->labels->name . '</a></li>';
            echo '<li>' . $separator . '</li>';
        }
        echo '<li>' . get_the_title() . '</li>';
    } elseif (is_category()) {
        // Category page
        echo '<li>' . single_cat_title('', false) . '</li>';
    } elseif (is_page()) {
        // Standard page
        echo '<li>' . get_the_title() . '</li>';
    }

    echo '</ul>';
}

