<?php
/***comment list*******/
if(have_comments()):
    ?>
<div class="post-comments-list mb-8">
    <h3><?php comments_number('0 comentarios','1 comentario');  ?></h3>
    <ol>
        <?php WP_list_comments();?>
    </ol>
</div>
<?php
endif;
/**end comment list**/

/***comment form***/
$argsCommentFrm=array(
    'title_reply'=>'Deja un comentario',
    'fields'=>array(
        'author'=>'<p class="comment-form-author"><input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="Nombre"></p>',
        'email'=>'<p class="comment-form-email"><input id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required" placeholder="Email"></p>',
        'url'=>'<p class="comment-form-url"><input id="url" name="url" type="text" value="" size="30" maxlength="200" placeholder="Sitio web"></p>'
    ),
    'comment_field'=>'<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required" placeholder="Ingresar comentario"></textarea></p>'
);
comment_form($argsCommentFrm);
/**end commnet form**/
?>