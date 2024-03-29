<?php
// Register Custom Post Type
function register_service_post_type() {

    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'kato' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'kato' ),
        'menu_name'             => __( 'Services', 'kato' ),
        'name_admin_bar'        => __( 'Service', 'kato' ),
        'archives'              => __( 'Service Archives', 'kato' ),
        'attributes'            => __( 'Service Attributes', 'kato' ),
        'parent_item_colon'     => __( 'Parent Item:', 'kato' ),
        'all_items'             => __( 'All Services', 'kato' ),
        'add_new_item'          => __( 'Add New Service', 'kato' ),
        'add_new'               => __( 'Add New', 'kato' ),
        'new_item'              => __( 'New Service', 'kato' ),
        'edit_item'             => __( 'Edit Service', 'kato' ),
        'update_item'           => __( 'Update Service', 'kato' ),
        'view_item'             => __( 'View Service', 'kato' ),
        'view_items'            => __( 'View Services', 'kato' ),
        'search_items'          => __( 'Search Service', 'kato' ),
        'not_found'             => __( 'Not found', 'kato' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'kato' ),
        'featured_image'        => __( 'Featured Image', 'kato' ),
        'set_featured_image'    => __( 'Set featured image', 'kato' ),
        'remove_featured_image' => __( 'Remove featured image', 'kato' ),
        'use_featured_image'    => __( 'Use as featured image', 'kato' ),
        'insert_into_item'      => __( 'Insert into item', 'kato' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'kato' ),
        'items_list'            => __( 'Items list', 'kato' ),
        'items_list_navigation' => __( 'Items list navigation', 'kato' ),
        'filter_items_list'     => __( 'Filter items list', 'kato' ),
    );
    $args = array(
        'label'                 => __( 'Service', 'kato' ),
        'description'           => __( 'Post Type Description', 'kato' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes' ),
        'show_in_rest'          => true,
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-star-filled',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'service', $args );

}
add_action( 'init', 'register_service_post_type', 0 );

function kato_register_cpt_testimonial() {
    $args = array(
        'public' => true,
        'query_var' => 'testimonial',
        'rewrite' => array(
            'slug' => 'testimonials',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'add_new' => 'Add New Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No testimonials found',
            'not_found_in_trash' => 'No testimonials found in Trash',
        ),
    );

    register_post_type('testimonial', $args);
}
add_action( 'init', 'kato_register_cpt_testimonial' );


function kato_service_feft() {
    $args = array(
        'public' => true,
        'query_var' => 'service_feft',
        'rewrite' => array(
            'slug' => 'service_feft',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Service_left',
            'singular_name' => 'service_feft',
            'add_new' => 'Add New service_feft',
            'add_new_item' => 'Add New service_feft',
            'edit_item' => 'Edit service_feft',
            'new_item' => 'New service_feft',
            'view_item' => 'View service_feft',
            'search_items' => 'Search service_fefts',
            'not_found' => 'No service_fefts found',
            'not_found_in_trash' => 'No service_fefts found in Trash',
        ),
    );

    register_post_type('service_feft', $args);
}
add_action( 'init', 'kato_service_feft' );

function kato_service_right() {
    $args = array(
        'public' => true,
        'query_var' => 'service_right',
        'rewrite' => array(
            'slug' => 'service_right',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Service_right',
            'singular_name' => 'service_right',
            'add_new' => 'Add New service_right',
            'add_new_item' => 'Add New service_right',
            'edit_item' => 'Edit service_right',
            'new_item' => 'New service_right',
            'view_item' => 'View service_right',
            'search_items' => 'Search service_right',
            'not_found' => 'No service_rights found',
            'not_found_in_trash' => 'No service_right found in Trash',
        ),
    );

    register_post_type('service_right', $args);
}
add_action( 'init', 'kato_service_right' );

function kato_service_page() {
    $args = array(
        'public' => true,
        'query_var' => 'service_page',
        'rewrite' => array(
            'slug' => 'service_page',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Service_page',
            'singular_name' => 'service_page',
            'add_new' => 'Add New service_page',
            'add_new_item' => 'Add New service_page',
            'edit_item' => 'Edit service_page',
            'new_item' => 'New service_page',
            'view_item' => 'View service_page',
            'search_items' => 'Search service_page',
            'not_found' => 'No service_pages found',
            'not_found_in_trash' => 'No service_page found in Trash',
        ),
    );

    register_post_type('service_page', $args);
}
add_action( 'init', 'kato_service_page' );

function kato_advantages() {
    $args = array(
        'public' => true,
        'query_var' => 'advantages',
        'rewrite' => array(
            'slug' => 'advantages',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Advantages',
            'singular_name' => 'advantages',
            'add_new' => 'Add New advantages',
            'add_new_item' => 'Add New advantages',
            'edit_item' => 'Edit advantages',   
            'new_item' => 'New advantages',
            'view_item' => 'View advantages',
            'search_items' => 'Search advantages',
            'not_found' => 'No advantages found',
            'not_found_in_trash' => 'No advantages found in Trash',
        ),
        'custom-fields' => true,
    );

    register_post_type('advantages', $args);
}
add_action( 'init', 'kato_advantages' );


function kato_new() {
    $args = array(
        'public' => true,
        'query_var' => 'new',
        'rewrite' => array(
            'slug' => 'news',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'New',
            'singular_name' => 'new',
            'add_new' => 'Add New new',
            'add_new_item' => 'Add New new',
            'edit_item' => 'Edit new',
            'new_item' => 'New new',
            'view_item' => 'View new',
            'search_items' => 'Search news',
            'not_found' => 'No news found',
            'not_found_in_trash' => 'No news found in Trash',
        ),
    );

    register_post_type('new', $args);
}
add_action( 'init', 'kato_new' );


function kato_blog() {
    $args = array(
        'public' => true,
        'query_var' => 'blog',
        'rewrite' => array(
            'slug' => 'blogs',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Blog',
            'singular_name' => 'blog',
            'add_new' => 'Add New blog',
            'add_new_item' => 'Add New blog',
            'edit_item' => 'Edit blog',
            'new_item' => 'New blog',
            'view_item' => 'View blog',
            'search_items' => 'Search blogs',
            'not_found' => 'No blogs found',
            'not_found_in_trash' => 'No blogs found in Trash',
        ),
    );

    register_post_type('blog', $args);
}
add_action( 'init', 'kato_blog' );


function kato_guard() {
    $args = array(
        'public' => true,
        'query_var' => 'guard',
        'rewrite' => array(
            'slug' => 'guard',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Guard',
            'singular_name' => 'guard',
            'add_new' => 'Add New guard',
            'add_new_item' => 'Add New guard',
            'edit_item' => 'Edit guard',
            'new_item' => 'New guard',
            'view_item' => 'View guard',
            'search_items' => 'Search guards',
            'not_found' => 'No guards found',
            'not_found_in_trash' => 'No guards found in Trash',
        ),
    );

    register_post_type('guard', $args);
}
add_action( 'init', 'kato_guard' );


function kato_describe() {
    $args = array(
        'public' => true,
        'query_var' => 'describe',
        'rewrite' => array(
            'slug' => 'describe',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Describe',
            'singular_name' => 'describe',
            'add_new' => 'Add New describe',
            'add_new_item' => 'Add New describe',
            'edit_item' => 'Edit describe',
            'new_item' => 'New describe',
            'view_item' => 'View describe',
            'search_items' => 'Search describes',
            'not_found' => 'No describes found',
            'not_found_in_trash' => 'No describes found in Trash',
        ),
    );

    register_post_type('describe', $args);
}
add_action( 'init', 'kato_describe' );


function kato_register_cpt_banner() {
    $labels = array(
        'name' => __( 'Banners' ),
        'singular_name' => __( 'Banner' ),
        'add_new' => __( 'New banner' ),
        'add_new_item' => __( 'Add New banner' ),
        'edit_item' => __( 'Edit banner' ),
        'new_item' => __( 'New banner' ),
        'view_item' => __( 'View banner' ),
        'search_items' => __( 'Search banners' ),
        'not_found' =>  __( 'No banners Found' ),
        'not_found_in_trash' => __( 'No banners found in Trash' ),
    );
    $args = array(
        'labels' => $labels,
        'has_archive' => true,
        'public' => true,
        'query_var' => 'banner',
        'rewrite' => array(
            'slug' => 'banners',
            'with_front' => false
        ),
        'hierarchical' => false,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 22,
    );
    register_post_type( 'banner', $args );
}
add_action( 'init', 'kato_register_cpt_banner' );


function register_project_post_type()
{
    $label = array(
        'name' => 'Project',
        'singular_name' => 'project'
    );
    $args = array(
        'labels' => $label,
        'description' => 'project',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array( 'post_tag'), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post'
    );
    register_taxonomy('subjects',array('project'), array(
        'hierarchical' => true,
        'labels' => $label,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'subject' ),
      ));
    register_post_type('project', $args);
}
add_action('init', 'register_project_post_type');


function register_field_post_type()
{
    $label = array(
        'name' => 'Field',
        'singular_name' => 'field'
    );
    $args = array(
        'labels' => $label,
        'description' => 'field',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ),
        'taxonomies' => array( 'post_tag'), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'menu_icon' => 'dashicons-welcome-learn-more',
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post'
    );
    register_taxonomy('field-project',array('field'), array(
        'hierarchical' => true,
        'labels' => $label,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'field-project' ),
      ));
    register_post_type('field', $args);
}
add_action('init', 'register_field_post_type');

function kato_register_cpt_video(){
    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Video', //Tên post type dạng số nhiều
        'singular_name' => 'Video' //Tên post type dạng số ít
    );
    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Post type đăng Video', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-video', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post'
    );
    register_post_type('video', $args);
}

add_theme_support( 'menus' );

function register_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Menu Footer' ),
    )
  );
}
add_action( 'init', 'register_menus' );