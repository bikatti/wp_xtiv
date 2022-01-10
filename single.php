<?php 
/**
 * The post
 *
 *
 * @package    Xtiv
 * @since      Xtiv 0.0.1
 */

get_header();
?>

<main class="post">

<?php
    if (have_posts()) {
        while(have_posts()) {
            the_post(  );
            ?>
            <article class="page__container">
                <div class="page__content">
                    <?php 
                    get_template_part( 'template-parts/post/header-post' ); 
                    get_template_part( 'template-parts/post/content' );

                    ?>
                </div>
            </article>
            <?php
        }
    } else {
        echo "<p>Esta página no tiene contenido</p>";
    }
    ?>
</main>

<?php
get_footer();