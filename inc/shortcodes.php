<?php 
/**
 * Blog Posts on Front-Page
 * 
 *
 * @package    Xtiv
 * @since      Xtiv 0.0.1
 */



// Front-page
function curriculum_button($atts = '') {
    ob_start();
    $atributos = shortcode_atts( 
        [ 
            'link_curriculum' => '#',
        ],
        $atts 
    );

    get_template_part( 
        'template-parts/front-page/curriculum',
        '', 
        $args = [
            'link_curriculum' => $atributos['link_curriculum'],
        ]
    );

    return ob_get_clean();
}
add_shortcode( 'curriculum', 'curriculum_button' );


function portafolio_github_block() {
    ob_start();
    get_template_part( 'template-parts/front-page/portafolio-github');
    return ob_get_clean();
}
add_shortcode( 'portafolio-github', 'portafolio_github_block' );
