<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('html5');
add_theme_support('menus');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

?>