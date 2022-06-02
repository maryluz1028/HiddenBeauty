<article class="post w-full h-auto bg-white shadow-md">
    <div class="w-full h-full flex flex-col">
        <div class="thumbnail w-full h-[220px]">
            <a href="<?= the_permalink();?>">
                <img class="w-full h-full object-cover" src="<?= main_image_url($post->ID,'full'); ?>" alt="">
            </a>
        </div>
        <div class="description w-full p-6">
            <div class="date-comment w-full py-1 font-semibold text-[14px]">
                <a href="<?= the_permalink();?>"><span class="date text-black02 transition-colors duration-300 cursor-pointer hover:text-blue-500"><?= the_time('F j, Y '); ?></span></a>
                <span class="text-gray01 px-2">/</span>
                <a href="<?= the_permalink();?>"><span class="cant-comments text-black02 transition-colors duration-300 cursor-pointer hover:text-blue-500"><?= comments_number('0 comentario','1 comentario',false); ?></span></a>
            </div>
            <div class="title w-full py-1">
                <a href="<?= the_permalink();?>">
                <h3 class="text-black01 transition-colors duration-300 hover:text-pink cursor-pointer"><?= the_title(); ?></h3>
                </a>
            </div>
            <div class="excerpt w-full py-1 text-gray01 text-[15px]">
                <?= the_excerpt(); ?>
            </div>
            <div class="btn-read-more w-full py-2 cursor-pointer">
                <?php get_template_part('templates/views/Button',null,[
                    'class'=>'button-bg-none button-text-15 button-border-none button-color-pink button-p-0 button-hover-pink button-tracking button-text-bold button-icon-m',
                    'text'=>'Ver Mas',
                    'href'=>get_the_permalink(),
                    'icon'=>'fas fa-angle-right'
                ]); ?>
            </div>
        </div>
    </div>
</article>
