<?php
/*
Template Name: Maquillajes
Template Post Type: post, page, event
*/ 
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=>'Maquillajes'
]);
?>
<div class="makeup-posts w-full bg-white">
    <div class="w-full container my-20">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
            <section class="posts w-full lg:col-span-2">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <?php
                    $makeupArgs=array(
                        'post_type'=>'maquillajeposts',
                        'posts_per_page'=>6,
                        'paged' => $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1
                    );
                    $makeupPosts= new WP_Query($makeupArgs);
                    if($makeupPosts->have_posts()):
                        while ($makeupPosts->have_posts()):
                            $makeupPosts->the_post();
                            get_template_part('templates/views/Post');
                        endwhile;
                        get_template_part('templates/views/Pagination',null,[
                            'posts'=>$makeupPosts
                        ]);
                    endif;
                    wp_reset_query();
                    ?>
                </div>
            </section>
            <section class="sidebar w-full lg:col-span-1">
                <?php 
                get_template_part('templates/views/SidebarContent',null,[
                    'post_type'=>'maquillajeposts',
                    'taxonomy'=>'maquillaje_categoria'
                ]);
                ?>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
?>