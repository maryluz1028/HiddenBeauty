<?php
/*
Template Name: Tratamientos
Template Post Type: post,page,event
*/
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=>'Tratamientos'
]);
?>
<div class="treatment-posts w-full bg-white">
    <div class="w-full container py-20">
        <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-3">
            <section class="posts w-full lg:col-span-2 ">
                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <?php
                    $treatmentArgs=array(
                        'post_type'=>'tratamientoposts',
                        'posts_per_page'=> 6,
                        'paged'=>$paged=(get_query_var('paged')) ? get_query_var('paged') : 1
                    );
                    $treatmentPosts= new WP_QUERY($treatmentArgs);
                    if($treatmentPosts->have_posts()):
                        while ($treatmentPosts->have_posts()):
                            $treatmentPosts->the_post();
                            get_template_part('templates/views/Post');
                        endwhile;
                        get_template_part('templates/views/Pagination',null,[
                            'posts'=>$treatmentPosts
                        ]);
                    endif;
                    ?>
                </div>
            </section>
            <section class="sidebar w-full lg:col-span-1">
                <?php get_template_part('templates/views/SidebarContent',null,[
                    'post_type'=>'tratamientoposts',
                    'taxonomy'=>'tratamiento_categoria'
                ]); ?>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
?>