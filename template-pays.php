<?php
/*
Template Name: Pays
*/
get_header();
?>

<div class="contenu-pays">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="pays__contenu">
            <h1 class="pays__titre"><?= get_the_title(); ?></h1>
            <div class="pays__image">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="pays__description">
                <?php the_content(); ?>
            </div>
        </div>
    <?php endwhile; endif; ?>
    <?php echo do_shortcode('[em_pays]'); ?>
</div>
<?php
get_footer();
?>