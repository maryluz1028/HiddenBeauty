<?php
$class=$args['class'] ?? '';
$title=$args['title'] ?? '';
$navRoutes=$args['navRoutes'] ?? '';

?>
<div class="container-page-title <?= $class ?> w-full bg-bg-page-title-image">
    <div class="page-title-bg w-full bg-color-rgba">
        <div class="page-title container py-16 flex flex-col md:flex-row md:justify-between md:items-center">
            <h1 class="text-white mb-8 md:mb-0 uppercase">
                <?= $title ?>
            </h1>
            <div class="navigation-routes">
                <div class="w-full rounded-[2rem] p-4 bg-color-rgba-white ">
                    <span class="text-white"><?= $navRoutes ?></span>
                </div>
            </div>
        </div>
    </div>
</div>