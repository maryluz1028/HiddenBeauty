<?php 
get_template_part( 'templates/partials/document-open' ); 
?>
<header class="header w-full bg-white shadow-sm z-20 sticky top-0">
    <div class="container flex  flex-row justify-between items-center py-2">
        <div class="header-logo">
            <?php 
            $custom_logo_id=get_theme_mod('custom_logo');
            $urlLogo=wp_get_attachment_image_src($custom_logo_id);
            ?>
            <a class="" href="<?= bloginfo('home') ?>">
                <div class="flex flex-row items-center">
                        <div class="logo-img w-10 h-10 min-w-[30px] min-h-[30px] mr-2">
                            <img class="w-full" src="<?= get_logo();?>" alt="<?= bloginfo('name')?>">
                        </div>
                        <div class="logo-name">
                            <span class="uppercase leading-none text-pink font-semibold">Hidden Beauty</span>
                        </div>
                </div>
            </a>
        </div>
        <div class="menu-nav-main">
            <?php
            $argsMain=array(
                'theme_location'=>'menu_main',
                'container'=>'nav',
                'container_class'=>'navbar-main',
                'container_id'=>'navbar_main',
            );
            wp_nav_menu($argsMain);
            ?>
        </div>
        <div class="menu-nav-mobile">
                <?php
                $argsMobile=array(
                    'theme_location'=>'menu_mobile',
                    'container'=>'nav',
                    'container_class'=>'navbar-mobile',
                    'container_id'=>'navbar_mobile',
                );
                wp_nav_menu($argsMobile);
                ?>
        </div>
        <div class="icon-header flex flex-row items-center">
            <div class='icon-user'>
                <?php get_template_part('templates/views/Button',null,[
                    'icon'=>'fas fa-user',
                    'class'=>'button-bg-none button-color-black button-border-none button-size'
                ]);
                ?>
            </div>
            <div class="icon-search">
                <?php get_template_part('templates/views/Button',null,[
                    'icon'=>'fas fa-search',
                    'id'=>'btn_modal_search',
                    'class'=>'button-bg-none button-color-black button-border-none button-size'
                ]);?>
            </div>
            <div class="icon-toogle">
                <?php get_template_part('templates/views/Button',null,[
                    'id'=>'btn_open_nav',
                    'icon'=>'fas fa-bars',
                    'class'=>'buttton-toggle button-bg-none button-color-black button-border-none button-size'
                ]);?>
            </div>
        </div>
    </div>
</header>
<?php 
get_template_part('templates/views/ModalSearch');
?>
<main class="w-full bg-white">
    <div class="main-container">
