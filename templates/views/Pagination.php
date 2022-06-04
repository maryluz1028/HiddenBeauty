<?php
$posts=$args['posts'] ?? '';
$total_pages = $posts->max_num_pages;
if ($total_pages > 1):
    $current_page = max(1, get_query_var('paged'));
    ?>
    <div class="pagination w-full lg:col-span-2 text-center">
        <?php
        echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('« Anterior'),
            'next_text'    => __('Siguiente »'),
        ));
        ?>
    </div>
    <?php
endif; 
?>