<?php

//function enigma_child_scripts() {
//    wp_enqueue_script('extra js', get_stylesheet_directory_uri() . '/js/extra.js');
//}
//
//add_action('wp_enqueue_scripts', 'enigma_child_scripts');

function enigma_child_widgets_init() {
    register_sidebar(
        array(
            'name' => 'New Footer Widget Area',
            'id' => 'new_footer_widget_area',
            'before_widget' => '<div class="col-md-2 col-sm-6 enigma_footer_widget_column">',
            'after_widget' => '</div>',
            'before_title'  => '<h3 class="enigma_footer_widget_title">',
            'after_title'   => '<div id="" class="enigma-footer-separator"></div></h3>'
        )
    );
}

add_action('widgets_init', 'enigma_child_widgets_init');