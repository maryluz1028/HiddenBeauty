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
                        ?>
                        <div class="pagination w-full text-center">
                            <?php
                            the_posts_pagination();
                            ?>
                        </div>
                        <?php
                    endif;
                    ?>
                </div> 
            </section>
            <section class="w-full lg:col-span-1">
                <div class="grid grid-cols-1">
                    <?php
                    if(is_date()):
                        $posttype=$_GET['post_type'];
                        if($posttype=='maquillajeposts'):
                        get_template_part('templates/views/SidebarContent',null,[
                            'post_type'=>'maquillajeposts',
                            'taxonomy'=>'maquillaje_categoria'
                        ]);
                        elseif($posttype=='tratamientoposts'):
                            get_template_part('templates/views/SidebarContent',null,[
                                'post_type'=>'tratamientoposts',
                                'taxonomy'=>'tratamiento_categoria'
                            ]);
                        else:
                            get_template_part('templates/views/SidebarContent',null,[
                                'post_type'=>array('maquillajeposts','tratamientoposts'),
                                'taxonomy'=>array('maquillaje_categoria','tratamiento_categoria')
                            ]);
                        endif;
                    elseif(is_tag()):
                        get_template_part('templates/views/SidebarContent',null,[
                            'post_type'=>array('maquillajeposts','tratamientoposts'),
                            'taxonomy'=>array('maquillaje_categoria','tratamiento_categoria')
                        ]);
                    else:
                        $term=get_queried_object();
                        $tax= $term->taxonomy;
                        if( $tax=='maquillaje_categoria'): 
                        get_template_part('templates/views/SidebarContent',null,[
                            'post_type'=>'maquillajeposts',
                            'taxonomy'=>'maquillaje_categoria'
                        ]);
                        elseif ( $tax=='tratamiento_categoria'):
                            get_template_part('templates/views/SidebarContent',null,[
                                'post_type'=>'tratamientoposts',
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
