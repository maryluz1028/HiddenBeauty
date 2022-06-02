<?php function widgets_active(){
    $args=array(
        'before_widget'=>'<div class="item widgets">',
        'after_widget'=>'</div>'
    );
    register_sidebar($args);
}

add_action('widgets_init','widgets_active');