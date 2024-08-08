<?php

//Nhung file
add_action('wp_enqueue_scripts', 'vieclamso1_register_scripts');
function vieclamso1_register_scripts()
{

    //css
    wp_enqueue_style('bootstrap.min.css', get_theme_file_uri('/assets/css/bootstrap.min.css'), false, '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/index.css', array(), '1.0');
    //js
    wp_enqueue_script('bootstrap.bundle.min.js', get_theme_file_uri('/assets/js/bootstrap.bundle.min.js'), array('jquery'), '1.0', true);
}

// Register Menu

add_action('after_setup_theme', 'vieclamso1_after_setup_theme');
function vieclamso1_after_setup_theme()
{
    remove_theme_support('widgets-block-editor');
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'vieclamso1'),
            'footer-menu'  =>  __('Footer Menu', 'vieclamso1')
        )
    );
}
// Đăng ký widget
add_action('widgets_init', 'vieclamso1_widgets_init');
function vieclamso1_widgets_init()
{
    register_sidebar(
        array(
            'name'          => __('Home', 'vieclamso1'),
            'id'            => 'sidebar-home',
            'description'   => __('Add widgets here to appear in your sidebar.', 'vieclamso1'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
class WP_Bootstrap_Navwalker extends Walker_Nav_Menu
{
    // Bắt đầu mỗi mục menu
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $url = !empty($item->url) ? $item->url : '';
        $active = $item->current ? ' active' : '';
        $output .= '<li class="nav-item px-3' . $active . '">';
        $output .= '<a href="' . $url . '" class="nav-link">' . $item->title . '</a>';
    }

    // Kết thúc mỗi mục menu
    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= '</li>';
    }
}


require_once get_parent_theme_file_path('/widgets/widgets_index.php');
