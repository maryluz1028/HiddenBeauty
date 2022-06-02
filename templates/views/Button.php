<?php
$class = $args['class'] ?? '';
$id = $args['id'] ?? '';
$href=$args['href'] ?? '';
$text=$args['text'] ?? '';
$icon=$args['icon'] ?? '';

?>
<button class="button <?= $class ?>" id="<?= $id ?>">
    <?php 
    if($href):?>
    <a class="button_link" href="<?= $href ?>">
        <?= $text ?>
        <?php if($icon):?>
            <i class="button_icon <?= $icon ?>"></i>
        <?php endif; ?>
    </a>
    <?php
    elseif($text || $icon):
            echo $text;
            if($icon):?>
                <i class="button_icon <?= $icon ?>"></i>
                <?php
            endif;
    endif;
    ?>
</button>