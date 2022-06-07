<?php
get_header();
?>
<div class="not-found w-full bg-white">
    <div  class="w-full h-full container my-20 flex flex-row justify-center items-center">
        <div class="max-w-[400px] flex flex-col items-center">
            <div class="max-w-[150px] mb-4">
                <img class="w-full" src="http://assets.stickpng.com/thumbs/585e4adacb11b227491c3392.png" alt="">
            </div>
            <div class="mb-4">
                <span class="text-2xl text-black01 font-semibold">404 ERROR</span>
            </div>
            <div class="mb-4 text-center">
                <span class="text-gray01">La página que buscas no fue encontrada. Retorna  a la pagina de inicio.</span>
            </div>
            <div class="mb-4 btn-back">
                <?php 
                get_template_part('templates/views/Button',null,[
                    'text'=>'Volver al inicio',
                    'href'=> get_bloginfo('home')
                ]);
                ?>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>