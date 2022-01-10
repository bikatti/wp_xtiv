<?php 
/* 
 * Archive
 * 
 * 
 * @package    Xtiv
 * @since      Xtiv 0.0.1
 */ 

get_header( );
?>

<main class="page archive">
    <?php        
    if (have_posts()) {
        get_template_part( 'template-parts/query/blog');
    } else {
        get_template_part( 'template-parts/query/blog');
    }
    ?>
</main>

<?php 
get_footer( );