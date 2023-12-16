<?php
if (!function_exists('akatsuki_enqueue')) {
    function akatsuki_enqueue()
    {
        // font
        wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet');
        wp_enqueue_style('boxicon', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');

        // css
        wp_enqueue_style('main', get_stylesheet_uri(), array(), _S_VERSION);
        wp_style_add_data('main', 'rtl', 'replace');
        wp_enqueue_style('flowbite-css', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css');
        wp_enqueue_style('custom', get_stylesheet_directory_uri() . '/assets/css/custom.css', array('main'), _S_VERSION);
        
        // js
        wp_enqueue_script('flowbite-js', 'https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js');
        wp_enqueue_script('jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js');
        wp_deregister_script('jquery');
        wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true);
    };
}
add_action('wp_enqueue_scripts', 'akatsuki_enqueue');
