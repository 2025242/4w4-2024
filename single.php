<?php get_header(); ?>
<div id="accueil" class="global">
    <section>
        <div class="cours">
        <?php if (have_posts()): the_post(); ?>
            <div class="carte">
                <h2><?php the_title() ?></h2>  
                <p><?php the_content(); ?></p>
                <div class="info-meteo">
                    <p>Température minimum: <span class="temperature-min"><?php the_field('temperature_minimum');?></span></p>
                    <p>Température maximum: <span class="temperature-max"><?php the_field('temperature_maximum');?></span></p>
                    <p>Ville avoisinantes: <span class="ville-avoisinante"><?php the_field('ville_avoisinante');?></span></p>
                </div>
                <div class="image-container">
                    <?php the_post_thumbnail('large')?>
                </div>
            </div> 
        <?php endif; ?>
        </div>
    </section>
</div>
<div id="galerie" class="global">
  <?php get_template_part('gabarits/vague'); ?>
</div>
<?php get_footer(); ?>
