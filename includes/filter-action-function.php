<?php
function register_menus() {
    register_nav_menus(
        array(
            'menu_primary'=>('menu_primary')
        )
    );
};

function except_length_post(){
    return 15;
}
function modify_read_more(){
    return '.';
}
function add_supports(){
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
function main_image_url($id,$size){
    $img_id=get_post_thumbnail_id($id);
    $img_src=wp_get_attachment_image_src($img_id,$size);
    return $img_src[0];
}
function theme_prefix_rewrite_flush() {
    flush_rewrite_rules();
}
// Rewrite rules for Project Year Archive pages
add_filter('rewrite_rules_array','wp_insertMyRewriteRules');
add_filter('query_vars','wp_insertMyRewriteQueryVars');

// Adding a new rule
function wp_insertMyRewriteRules($rules)
{
	$newrules = array();
	$newrules['projects/([^/]+)$'] = 'index.php?page_id=129&myyear=$matches[1]';
	$newrules['projects/([^/]+)/page/?([0-9]{1,})/?$'] = 'index.php?page_id=129&myyear=$matches[1]&paged=$matches[2]';
	return $newrules + $rules;
}

// Adding the id var so that WP recognizes it
function wp_insertMyRewriteQueryVars($vars)
{
    array_push($vars, 'myyear');
    return $vars;
}

function archive_title(){
    $title='';
    if(is_tax()){
        $title = single_cat_title('Categoria: ',false);
    }elseif (is_date()) {
        $title ='Fecha: '.''. get_the_date('F Y');
    }elseif (is_tag()) {
        $title = single_tag_title('Etiqueta: ',false);
    }
    return $title;
}
function pagination_bar() {
    global $my_query;
 
    $total_pages = $my_query->max_num_pages;
 
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
 
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}
function tags_add_custom_types( $query ) {
    if( is_tag() && $query->is_main_query() ) {
        $post_types = get_post_types();
        $query->set( 'post_type', $post_types );
    }
}
add_filter( 'pre_get_posts', 'tags_add_custom_types' );
add_action('init','register_menus');
add_action('after_setup_theme','add_supports');
add_filter('excerpt_length','except_length_post');
add_filter('excerpt_more','modify_read_more');
add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );
add_filter('get_the_archive_title','archive_title');

