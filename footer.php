        <footer>
            <div class="footer-widgets">
                <div class="row">
                    <?php 
                        if(is_active_sidebar('mm_footersidebar')){
                            dynamic_sidebar('mm_footersidebar');
                        }
                    ?>
                </div>
            </div>
            <div class="mainfooter">
                <div class="left">
                    Todos os direitos reservados. 
                    <?php if(get_theme_mod('mm_privacy_url')): ?>
                        - <a href='<?php the_permalink(get_theme_mod('mm_privacy_url'));?>'>Policitica de privacidade</a>
                    <?php endif; ?>
                </div>  
                <div class="right">
                    Criado por Mt
                </div>
                <div class="mainfooter scroll" onclick="top_scroll();">
                    <img src="<?= get_template_directory_uri();?>/assets/images/seta-up.png" />
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>