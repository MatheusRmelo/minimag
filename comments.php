<?php 
    if(post_password_required()){
        return;
    }
    if(have_comments()){
        foreach($comments as $comment){
            ?> 
            <div class="mm-comment">
                <div class="mm-comment-photo">
                    <?= get_avatar($comment, 60); ?>
                </div>
                <div class="mm-comment-area">
                    <strong><?php comment_author(); ?></strong> - <?php comment_date(); ?> <br /><br />

                    <?php comment_text(); ?>
                </div>
            </div>
        <?php 
        }

        the_comments_pagination();
    }
    $mm_comment_form = array(
        'comment_field' => '<textarea name="comment"></textarea>',
        'fields' => array(
            'author'=>'Nome:<input type="text" name="author"/><br/>',
            'email' =>'E-mail: <input type="text" name="email"/><br/>',
            'url'=>'Site: <input type="text" name="author"/><br/>'),
        'class_submit' => 'botao',
        'label_submit'=>'Envie seu comentário',
        'title_reply' => 'Deixe um comentário'
    );
    comment_form($mm_comment_form);


?>