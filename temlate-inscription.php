<?php
/**
 * Template name: Inscription
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <?php if ( have_posts() ) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <div class="conference__contenu">
            <div class="conference__image">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="conference__description">
                <?php the_content();?>
            </div>
            <div class="conference__details">
                <p><span>Adresse de l'événement :</span> <?php the_field('adresse'); ?></p>
                <p><span>Date et heure de l'événement :</span> <?php the_field('dates_et_heures'); ?></p>
            </div>
        </div>
    <?php endif;?>
</main><!-- #main -->
<?php get_footer(); ?>
