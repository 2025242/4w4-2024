<?php
/*
Template Name: Pays
*/
get_header();
?>
<div class="contenu-pays">
    <?php if ( have_posts() ) : the_post(); ?>
        <div class="conference__contenu">
            <h1><?= get_the_title(); ?></h1>
            <div class="conference__image">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="conference__description">
                <?php the_content(); ?>
            </div>
    <?php echo do_shortcode('[em_pays]'); ?>
</div>
<?php
get_footer();
?>
