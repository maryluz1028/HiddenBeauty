<?php
$post_type=$args['post_type'] ?? '';
$taxonomy=$args['taxonomy'] ?? '';

?>
<div class="flex flex-col">
    <div class="widget w-full">
                        <?php get_search_form(); ?>
    </div>
    <?php 
    if($post_type):?>
    <div class="widget w-full">
                        <h3 class="w-full mb-8">Publicaciones recientes</h3>
                        <ul class="flex flex-col">
                            <?php
                            $recentPostsArgs=array(
                                'post_type' => $post_type,
                                'posts_per_page'=>3
                            );
                            $recenPosts=new WP_QUERY($recentPostsArgs);
                            if($recenPosts->have_posts()):
                                while ($recenPosts->have_posts()):
                                    $recenPosts->the_post();
                                ?>
                            <a href="<?= the_permalink();?>" class="w-full mb-4 text-gray01 hover:text-pink transition-colors duration-300">
                                <li class="w-full">
                                    <span class="mr-2 text-pink"><i class="fas fa-angle-right"></i></span>
                                    <span><?=the_title(); ?></span>
                                </li>
                            </a>
                            <?php
                            endwhile;
                            else:
                                echo 'no hay publicaciones recientes';
                            endif;
                            ?>
                        </ul>
    </div>
    <?php endif; ?>
    <?php
    if($taxonomy):?>
    <div class="widget w-full">
                        <h3 class="w-full mb-8">Categorias</h3>
                        <ul class="flex flex-col">
                            <?php
                            $catArgs=array(
                                'taxonomy'=>$taxonomy,
                                'hide_empty'=>'0',
                                'parent'=>0
                            );
                            $categoriesList= get_terms($catArgs);
                            if($categoriesList):
                                foreach ($categoriesList as $cat):
                                    if(is_search() || is_tag()):
                                        if($cat->taxonomy=='maquillaje_categoria'):
                                            $text='Maquillaje de ';
                                        elseif($cat->taxonomy == 'tratamiento_categoria'):
                                            $text='Tratamiento de ';
                                        endif;
                                    ?>
                                    <a href="<?= get_term_link($cat->term_id) ?>" class="w-full text-pink mb-4">
                                        <li class="w-full">
                                            <span class="mr-2"><i class="fas fa-angle-right"></i></span>
                                            <span><?= $text.''.$cat->name; ?></span>
                                        </li>
                                    </a>
                                    <?php
                                    else:
                                        ?>
                                        <a href="<?= get_term_link($cat->term_id) ?>" class="w-full text-pink mb-4">
                                            <li class="w-full">
                                                <span class="mr-2"><i class="fas fa-angle-right"></i></span>
                                                <span><?=$cat->name; ?></span>
                                            </li>
                                        </a>
                                        <?php
                                    endif;
                                endforeach;
                            else:
                                echo 'no hay categorias';
                            endif;
                            ?>
                        </ul>
    </div>
    <?php endif; ?>
    <div class="widget w-full">
        <h3 class="w-full mb-8">Etiquetas generales</h3>
        <div class="w-full flex flex-row flex-wrap">
        <span class="p-2 text-pink"><i class="fas fa-tags"></i></span>
            <?php
                $tagsArgs=array(
                    'taxonomy'=>'post_tag'
                );
                $tags=get_terms($tagsArgs);
                if($tags):
                    foreach ($tags as $tag):
                        ?>
                            <div class="tag p-2 w-auto">
                                <a class="w-full text-gray01 hover:text-pink transition-colors duration-300" href="<?=get_tag_link($tag->term_id); ?>">
                                <?=$tag->name .','; ?>
                                </a>
                            </div>
                        <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
    <?php if(!(is_search() || is_tag()) && $post_type):?>
    <div class="widget w-full">
        <h3 class="w-full mb-8">Archivos</h3>
        <ul class="flex flex-col archives">
            <?php
                $archiveArgs=array(
                    'post_type'=>$post_type,
                    'before'=>'<span class="text-pink mr-2"><i class="fas fa-angle-right"></i></span>',
                );
                wp_get_archives($archiveArgs);
            ?>
        </ul>
    </div>
    <?php endif; ?>
</div>


