<?php 
/**
 * The template for displaying the footer
 *
 *
 * @package    Xtiv
 * @since      Xtiv 0.0.1
 */

/**
 * Burger menu is disabled by default, but it is activated
 * by an addEventListener of a javascript function
 */
// get_template_part( 'template-parts/header/burguer' ); 


/**
 * Contact Modal
 */
get_template_part( 'template-parts/header/contact' );

/**
 * The Footer
 */
get_template_part( 'template-parts/footer/site-footer' );

wp_footer(  ); 

?>
    </body>
</html>