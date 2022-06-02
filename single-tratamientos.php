<?php
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=> get_the_title()
]);
?>
<div class="single-post w-full bg-white">
    <div class="w-full container py-20">
        <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-3">
            <section class="post-content-comments w-full lg:col-span-2 ">
                <section class="post-content w-full mb-10">
                    <div class="content w-full">
                        <?php the_content(); ?>
                    </div>
                    <hr class="w-full text-gray02 my-6">
                    <div class="content-footer w-full">
                        <div class="flex flex-row flex-wrap">
                            <div class="categories-post flex flex-row mr-4">
                                <div class="icon mr-2 text-cornflowerBlue">
                                    <i class="fas fa-folder-open"></i>
                                </div>
                                <?php
                                $postCategories = get_the_terms($post->ID,array('maquillaje_categoria','tratamiento_categoria'));
                                if($postCategories):
                                    foreach ($postCategories as $cat):
                                        ?>
                                        <a href="<?= get_term_link($cat->term_id);?>"><?= $cat->name; ?></a>
                                        <?php
                                    endforeach;
                                endif;
                                ?>
                            </div>
                            <div class="tags-post flex flex-row mr-4">
                                <div class="icon mr-2 text-cornflowerBlue">
                                    <i class="fas fa-tags"></i>
                                </div>
                                <?php the_tags('',', ',''); ?>
                            </div>
                            <div class="number-comment flex flex-row mr-4">
                                <div class="icon mr-2 text-cornflowerBlue">
                                    <i class="fas fa-comments"></i>
                                </div>
                                <?php comments_number('0 comentario',false,false); ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="post-comments w-full">
                    <?php comments_template(); ?>
                </section>
            </section>
            <section class="sidebar w-full lg:col-span-1">
                <?php get_template_part('templates/views/SidebarContent',null,[
                    'post_type'=>'tratamientos',
                    'taxonomy'=>'tratamiento_categoria'
                ]);
                ?>
            </section>
        </div>
    </div>
</div
<?php get_footer();?>