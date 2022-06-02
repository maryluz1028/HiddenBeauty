<div class="search-modal fixed top-0 bottom-0 left-0 right-0 bg-color-rgba" id="search_modal">
    <div class="w-full h-full flex flex-col justify-center items-center">
    <?php get_template_part('templates/views/Button',null,[
                'id'=>'btn_close_modal',
                'icon'=>'fas fa-times',
                'class'=>'buttton-close-modal button-bg-none button-color-black button-border-none button-size'
            ]);?>
    <div class="search-form-container w-full p-8">
        <?php
        get_search_form();
        ?>
    </div>
    </div>
</div>