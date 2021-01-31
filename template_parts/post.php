<article <?php post_class()?> >
    <a href="<?php the_permalink(); ?>">
        <div class="post-item">
            <div class="post-comment-area">
                <?php comments_number('0', '1', '&'); ?>
            </div>
            <div class="post-info">
                <?php if(get_post_format()=='video'): ?>
                    <?php
                        $content = apply_filters('the_content', get_the_content());
                        $video = get_media_embedded_in_content($content, array(
                            'iframe', 'embed', 'object','video'
                        ));
                        if($video){
                            ?>
                                <div class="post-video">
                                    <?= $video[0]; ?>
                                </div>
                            <?php
                            
                        }
                    ?>


                <?php elseif(get_post_format()=='audio'): ?>
                    <?php
                        $content = apply_filters('the_content', get_the_content());
                        $audio = get_media_embedded_in_content($content, array(
                            'iframe', 'audio'
                        ));
                        if($audio){
                            ?>
                                <div class="post-audio">
                                    <?= $audio[0]; ?>
                                </div>
                            <?php
                            
                        }
                    ?>

                <?php elseif(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium', array('class' => 'post-thumb')); ?>
                <?php endif; ?>
                <div class="post-date">
                    <?= get_the_date(); ?>
                </div>
                <div class="post-title">
                    <?php the_title(); ?>
                </div> 
                <div class="post-excerpt">
                    <?php the_excerpt(); ?>
                </div> 
            </div>
        </div>
    </a>
</article>