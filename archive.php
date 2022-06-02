<?php
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=>archive_title()
]);
?>
<div class="posts-by-category w-full bg-white">
    <div class="w-full container py-20">
        <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-3">
            <section class="w-full lg:col-span-2">
                <div class="grid grid-cols-1 gap-8">
                    <?php
                    if(have_posts()):
                        while (have_posts()):
                            the_post();
                            get_template_part('templates/views/Post');
                        endwhile;
                    endif;
                    ?>
                </div>
            </section>
            <section class="w-full lg:col-span-1">
                <div class="grid grid-cols-1">
                    <?php
                    if(is_date()):
                        get_template_part('templates/views/SidebarContent',null,[
                            'post_type'=>'maquillajes',
                            'taxonomy'=>'maquillaje_categoria'
                        ]);
                    else:
                        $term=get_queried_object();
                        $tax= $term->taxonomy;
                        if( $tax=='maquillaje_categoria'): 
                        get_template_part('templates/views/SidebarContent',null,[
                            'post_type'=>'maquillajes',
                            'taxonomy'=>'maquillaje_categoria'
                        ]);
                        elseif ( $tax=='tratamiento_categoria'):
                            get_template_part('templates/views/SidebarContent',null,[
                                'post_type'=>'tratamientos',
                                'taxonomy'=>'tratamiento_categoria'
                            ]);
                        endif;
                    endif;
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
?>
