<?php
get_header();
?>
    <section class="categories w-full bg-white">
        <div class="container py-20 w-full">
            <div class="w-full mb-10">
                <h2 class="w-full text-black01 px-6 border-solid border-l-4 border-pink">Categorias</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:grid-cols-3  ">
                <?php 
                $categories=get_terms(array('tratamiento_categoria','maquillaje_categoria'),array(
                    'hide_empty'=>0,
                    'parent'=>0
                ));
                foreach ($categories as $cat) {
                    if($cat->taxonomy=='tratamiento_categoria'){
                        $nameTax='Tratamiento de ';
                    }elseif($cat->taxonomy=='maquillaje_categoria'){
                        $nameTax='Maquillaje de ';
                    }
                    $c=$cat->name;
                    ?>
                <div class="category w-full h-auto">
                <a href="<?= get_term_link($cat->term_id); ?>">
                    <div class="category-content w-full h-full p-4 rounded-lg ">
                        <div class="category-img w-full flex justify-center items-center mb-4">
                            <div class="w-[100px] h-[100px]">
                                <img class="w-full h-full rounded-full object-cover" src="<?= z_taxonomy_image_url($cat->term_id);?>" alt="">
                            </div>
                        </div>
                        <div class="category-description text-white">
                            <h3 class="w-full text-center"><?= $nameTax.''.$cat->name;?></h3>
                            <p class="w-full text-center"><?= $cat->description; ?></p>
                        </div>
                    </div>
                </a>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
    <section class="who-we-are w-full bg-gray02">
        <div class="container w-full py-20">
            <div class="who-we-are-content flex flex-col justify-center items-center md:flex-row md:items-start md:gap-8">
                <?php 
                $aboutUsPost=get_post(9);
                ?>
                <div class="image w-full mb-20 md:w-1/2 md:mb-0">
                    <img class="w-full" src="<?=main_image_url($aboutUsPost->ID,'full') ?>" alt="">
                </div>
                <div class="flex flex-col md:flex-1">
                        <div class="title w-full md:mt-8">
                            <h2 class="border-solid border-l-4 border-pink px-6 ">¿Quienes somos?</h2>
                        </div>
                        <div class="description py-10 mb-8">
                            <?= $aboutUsPost->post_content; ?>
                        </div>
                    <div class="btn-read-more w-full">
                        <?php get_template_part('templates/views/Button',null,[
                            'class'=>'button-w-full button-icon-m',
                            'text'=>'Leer más',
                            'icon'=>'fas fa-angle-double-right',
                            'href'=>get_the_permalink($aboutUsPost->ID)
                        ]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-news w-full bg-white">
        <div class="w-full container py-20">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
            <?php 
                $argsPosts=array(
                    'post_type'=>array('maquillajeposts','tratamientoposts'),
                    'posts_per_page'=>3
                );
                $posts=new WP_QUERY($argsPosts);
                if($posts->have_posts()):
                    while ($posts->have_posts()):
                        $posts->the_post();
                        get_template_part('templates/views/Post');
                    endwhile;
                else:
                    echo 'ho nay posts';
                endif;
                ?>
            </div>
        </div>
    </section>
<?php
get_template_part('templates/views/ButtonGoTop');
get_footer();