<?php
/*
Template Name: Acerca de nosotros
Template Post Type: post,page,event
*/
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=>get_the_title()
]);
?>
<div class="about-us w-full bg-white">
    <div class="w-full container py-20">
        <div class="w-full grid grid-cols-1 gap-8 lg:grid-cols-2">
            <div class="w-full about-content">
                <?php the_content(); ?>
            </div>
            <div class=" w-full about-thumbnail">
                <figure class="w-full">
                    <img class="w-full" src="<?= main_image_url($post->ID,'full') ;?>" alt="">
                </figure>
            </div>
    </div>
</div>
<?php
get_footer();
?>