<?php 
/* 
 * Portafolio Github Block 
 * of Front-page
 * 
 * 
 * @package    Xtiv
 * @since      Xtiv 0.0.1
 */

$argumentos = array(
    'post_type'           => 'project',
    'posts_per_page'      => -1,
);

$the_query = new WP_Query($argumentos);
?>

<section class="portafolio-github__carousel">
    <div class="splide splide--portafolio-github">
        <div class="splide__track">
            <ul class="splide__list">

                <?php
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {
                        $the_query->the_post(  );
                        ?>
                        <li class="splide__slide">
                            <div class="portafolio-github__item">
                                <figure>
                                    <img src="<?php echo esc_url( $img_1 ); ?>" alt="">
                                </figure>
                                <div class="portafolio-github__body">
                                    <h3><?php esc_html_e( $title_1 ); ?></h3>
                                    <p><?php esc_html_e( $text_1 ); ?></p>
                                </div>
                            </div>
                        </li>
                    <?php
                    } 
                } ?>

            </ul>
        </div>
        <?php
        //get_template_part( 'template-parts/front-page/arrow' );
        ?>
    </div>
</section>