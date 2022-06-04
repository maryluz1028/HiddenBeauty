<?php
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=>'Resultados de búsqueda para:'.' '.get_search_query()
]);
?>
<div class="posts-by-search w-full bg-white">
    <div class="w-full container py-20">
        <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-3">
            <section class="w-full lg:col-span-2">
                <div class="w-full grid grid-cols-1 gap-8">
                    <?php
                    if(have_posts()):
                        while (have_posts()):
                            the_post();
                            get_template_part('templates/views/Post');
                        endwhile;
                    endif;
                    rewind_posts();
                    ?>
                </div>
            </section>
            <section class="w-full lg:col-span-1">
                <?php
                get_template_part('templates/views/SidebarContent',null,[
                    'post_type'=>array('maquillajeposts','tratamientoposts'),
                    'taxonomy'=>array('maquillaje_categoria','tratamiento_categoria')
                ]);
                ?>
            </section>
        </div>
    </div>
</div>
<?php
get_footer();
?>