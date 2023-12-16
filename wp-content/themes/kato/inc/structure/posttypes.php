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


function kato_service() {
    $args = array(
        'public' => true,
        'query_var' => 'service',
        'rewrite' => array(
            'slug' => 'services',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'services',
            'singular_name' => 'service',
            'add_new' => 'Add New service',
            'add_new_item' => 'Add New service',
            'edit_item' => 'Edit service',
            'new_item' => 'New service',
            'view_item' => 'View service',
            'search_items' => 'Search services',
            'not_found' => 'No services found',
            'not_found_in_trash' => 'No services found in Trash',
        ),
    );

    register_post_type('service', $args);
}
add_action( 'init', 'kato_service' );


function kato_field() {
    $args = array(
        'public' => true,
        'query_var' => 'field',
        'rewrite' => array(
            'slug' => 'fields',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        'menu_position' => 21,
        'labels' => array(
            'name' => 'Field',
            'singular_name' => 'field',
            'add_new' => 'Add New field',
            'add_new_item' => 'Add New field',
            'edit_item' => 'Edit field',
            'new_item' => 'New field',
            'view_item' => 'View field',
            'search_items' => 'Search fields',
            'not_found' => 'No fields found',
            'not_found_in_trash' => 'No fields found in Trash',
        ),
    );

    register_post_type('field', $args);
}
add_action( 'init', 'kato_field' );


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