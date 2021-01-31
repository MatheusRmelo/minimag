<?php 
function mm_layout_customizer($wp_customize){
    $wp_customize->add_setting('mm_topmenushow', array('default'=>'yes'));
    $wp_customize->add_setting('mm_searchshow', array('default'=>'yes'));
    $wp_customize->add_setting('mm_privacy_url', array('default'=>''));


    $wp_customize->add_section('mm_layout_section', array(
        'title' => 'Opções de Layout',
        'priority' => 2,
        'panel'=>'opcoes'
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mm_topmenushow',
            array(
                'label' => 'Mostrar Menu Superior',
                'section'=>'mm_layout_section',
                'settings'=>'mm_topmenushow',
                'type'=>'checkbox',
                'choices'=> array(
                    'yes'=>'Sim'
                )
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mm_searchshow',
            array(
                'label' => 'Mostrar Busca',
                'section'=>'mm_layout_section',
                'settings'=>'mm_searchshow',
                'type'=>'checkbox',
                'choices'=> array(
                    'yes'=>'Sim'
                )
            )
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'mm_privacy_url',
            array(
                'label' => 'Página de Politica de privacidade',
                'section'=>'mm_layout_section',
                'settings'=>'mm_privacy_url',
                'type'=>'dropdown-pages'
            )
        )
    );
}
?>