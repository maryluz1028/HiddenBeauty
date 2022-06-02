<?php
/*
Template Name: Contacto
Template Post Type: post,page,event
*/
get_header();
get_template_part('templates/views/PageTitle',null,[
    'title'=>get_the_title()
]);
?>
<div class="contact-us w-full bg-white">
    <div class="w-full container py-20">
        <?php the_content(); ?>
    </div>
</div>

<?php
get_footer();
?>
