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
                </div>  
                <div class="right">
                    Criado por Melo Technology
                </div>
                <div class="mainfooter scroll" onclick="top_scroll();">
                    <img src="<?= get_template_directory_uri();?>/assets/images/seta-up.png" />
                </div>
            </div>
        </footer>
    </body>
</html>