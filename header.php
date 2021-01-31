<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
        <?php wp_head(); ?>
    </head>
<body <?php body_class(''); ?> >    
    <header> 
        <?php if(get_theme_mod('mm_topmenushow')=='yes'): ?>
            <div class="top-header">
                <nav class="navbar navbar-default">
                    <div class="container">

                        <div class="navbar-header">
                            <div class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </div>
                        </div>

                        <div class="collapse navbar-collapse" id="navbar">
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
        <?php endif; ?>

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
                            <?php 
                                if(get_theme_mod('mm_searchshow')=='yes'){
                                    get_search_form();
                                }
                            ?>
                        </div>
                    </div>
                    <?php if(is_home()||is_single()): ?>
                    <div class="main-info">
                        <div class="row">
                            <div class="col-sm-8 randompost">
                                <strong>Você já viu?</strong>
                                <?php 
                                    if(function_exists('wpp_get_mostpopular')){
                                        wpp_get_mostpopular(array(
                                            'limit' => 1,
                                            'wpp_start'=>'',
                                            'wpp_end'=>'',
                                            'post_html'=>'<a href="{url}">{text_title}</a>'
                                        ));
                                    }else{
                                        $mm_query = new WP_QUERY(array(
                                            'posts_per_page'=> 1,
                                            'post_type' => 'post',
                                            'orderby' => 'rand'
                                        ));
                                        if($mm_query->have_posts()){
                                            while($mm_query->have_posts()){
                                                $mm_query->the_post();
                                                ?>
                                                <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                                                <?php
                                            }
    
                                            wp_reset_postdata();
                                        }
                                    }

                                    
                                ?>
                            </div>
                            <div class="col-sm-4 socialarea">
                                <div class="socialtxt">
                                    SIGA:
                                </div>
                                <div class="socialicons">
                                    <?php if(get_theme_mod('mm_facebook')): ?>
                                        <a href="<?= get_theme_mod('mm_facebook') ?>" target="_blank">
                                            <img src="<?= get_template_directory_uri();?>/assets/images/facebook.png" alt="facebook" />
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('mm_gplus')): ?>
                                        <a href="<?= get_theme_mod('mm_gplus') ?>" target="_blank">
                                            <img src="<?= get_template_directory_uri();?>/assets/images/gplus.png" alt="google" />
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('mm_instagram')): ?>
                                        <a href="<?= get_theme_mod('mm_instagram') ?>" target="_blank">
                                            <img src="<?= get_template_directory_uri();?>/assets/images/instagram.png" alt="instagram" />
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('mm_twitter')): ?>
                                        <a href="<?= get_theme_mod('mm_twitter') ?>" target="_blank">
                                            <img src="<?= get_template_directory_uri();?>/assets/images/twitter.png" alt="twitter" />
                                        </a>
                                    <?php endif; ?>
                                    <?php if(get_theme_mod('mm_youtube')): ?>
                                        <a href="<?= get_theme_mod('mm_youtube') ?>" target="_blank">
                                            <img src="<?= get_template_directory_uri();?>/assets/images/youtube.png" alt="youtube" />
                                        </a>
                                    <?php endif; ?>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
        <?php if(get_header_image()): ?>
            <div class="container custom-header">
                <img src="<?php header_image();?>" />
            </div>  
        <?php endif;?>
       
    </header>
  