<html>
    <head>
        <?php wp_head(); ?>
    </head>
<body <?php body_class(''); ?> >    
    <header> 
        <div class="top-header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <?php 
                            if(has_nav_menu('top')){
                                wp_nav_menu(array(
                                    'theme_location'=>'top',
                                    'container'=> false,
                                    'callback_cb'=>false,
                                    'menu_class'=>'nav navbar-nav'
                                ));
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main-header">
            <div class="container">
                <div class="logo">
                    <?php 
                    if(has_custom_logo()){
                        the_custom_logo();
                    }   
                    ?>
                </div>
                <div class="main-nav-border">
                    <div class="main-nav">
                        <?php 
                            if(has_nav_menu('primary')){
                                wp_nav_menu(array(
                                    'theme_location'=>'primary',
                                    'container'=> false,
                                    'callback_cb'=>false,
                                    'menu_class'=>'nav navbar-nav'
                                ));
                            }
                        ?>
                        <div class="search-area">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                    <div class="main-info">
                        <div class="row">
                            <div class="col-sm-8 randompost">
                                <strong>Você já viu?</strong>
                                <?php 
                                    $array = array(
                                        'posts_per_page'=> 1,
                                        'post_type' => 'post',
                                        'orderby' => 'rand'
                                    );
                                    $mm_query = new WP_QUERY($array);
                                    if($mm_query->have_posts()){
                                        while($mm_query->have_posts()){
                                            $mm_query->the_post();
                                            ?>
                                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                            <?php
                                        }

                                        wp_reset_postdata();
                                    }
                                ?>
                            </div>
                            <div class="col-sm-4 socialarea">
                                <div class="socialtxt">
                                    SIGA:
                                </div>
                                <div class="socialicons">
                                    <a href="https://facebook.com" target="_blank">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/facebook.png" alt="facebook" />
                                    </a>
                                    <a href="https://google.com" target="_blank">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/gplus.png" alt="google" />
                                    </a>
                                    <a href="https://instagram.com" target="_blank">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/instagram.png" alt="instagram" />
                                    </a>
                                    <a href="https://twitter.com" target="_blank">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/twitter.png" alt="twitter" />
                                    </a>
                                    <a href="https://youtube.com" target="_blank">
                                        <img src="<?= get_template_directory_uri();?>/assets/images/youtube.png" alt="youtube" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </header>