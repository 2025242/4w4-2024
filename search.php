<?php get_header(); ?>
<div id="entete" class="global">
    <section class="entete__header">
            <section>
     <div class="banniere">
        <p>Commence ton aventure maintenant Commence ton aventure maintenant Commence ton aventure maintenant Commence ton aventure maintenant Commence ton aventure maintenant Commence ton aventure maintenant  Commence ton aventure maintenant Commence ton aventure maintenant Commence ton aventure maintenant Commence ton aventure maintenant</p>
    </div>
    </section><br>
     
        <h1><?php echo get_bloginfo("name") ?></h1>
        <h2><?php echo get_bloginfo("description") ?></h2><br><br><br>
        <h3>Découvrez des destinations uniques, créez des souvenirs inoubliables</h3>
        
    </section>
    
    <?php get_template_part("gabarits/vague"); ?>
</div>
  <div id="accueil" class="global">

<section>
            <h2>Accueil (h2)</h2>
            <div class="destinations">
            <?php if (have_posts()):
                while(have_posts()): the_post(); ?>
                <div class="carte">
                    <h3><?php the_title(); ?></h3>  
                    <p><?php echo wp_trim_words(get_the_content(),10); ?> </p>
                    <?php the_category(); ?>
                      <!-- ajoute un lien vers l'article   -->
                       <a href="<?php the_permalink(); ?>" class="lien-suite">Suite</a>
                </div> 
                
               <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </section>
   
</div>


<?php get_footer()?>
    </body>

    </html>