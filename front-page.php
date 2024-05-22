<?php get_header(); ?>
    
<div id="entete" class="global">
    <section class="entete__header">
            <section>
     <div class="banniere">
        <p>Bienvenue dans un monde sans frontières, où chaque destination est une aventure à découvrir ! Bienvenue dans un monde sans frontières, où chaque destination est une aventure à découvrir ! Bienvenue dans un monde sans frontières, où chaque destination est une aventure à découvrir ! Bienvenue dans un monde sans frontières, où chaque destination est une aventure à découvrir !</p>
    </div>
  
    </section><br>
     
        <h1><?php echo get_bloginfo("name") ?></h1>
        <h2><?php echo get_bloginfo("description") ?></h2><br><br><br>
        <h3>Découvrez des destinations uniques, créez des souvenirs inoubliables</h3>
        <a href="http://127.0.0.1:8080/4w4salma/inscription/" class="bouton">Inscription</a>
        <?php get_logosociaux(); ?>
    </section>
    
    <?php get_template_part("gabarits/vague"); ?>
</div>
    <div id="accueil" class="global">
      
       <div class="container">
        
    <section>
        <h2>Destinations Populaires</h2>
        <div class="destination">
            <?php if (have_posts()):
                while (have_posts()): the_post(); ?>
                    <?php 
                    if (!in_category('galerie')) { // Ignorer les articles de la catégorie "galerie"
                        get_template_part('gabarits/categorie', 'carte');
                    }
                    ?>
                <?php endwhile;
            endif; ?>
        </div>
    </section>
    <section>
        <h2>Galerie</h2>
        <div class="galerie">
            <?php
            // Requête personnalisée pour récupérer les articles de la catégorie "galerie"
            $args = array(
                'category_name' => 'galerie',
                'posts_per_page' => 10, // Ajuste ce nombre selon tes besoins
            );
            $galerie_query = new WP_Query($args);
            
            if ($galerie_query->have_posts()) :
                while ($galerie_query->have_posts()) : $galerie_query->the_post(); ?>
                    <?php get_template_part('gabarits/categorie', 'galerie'); ?>
                <?php endwhile;
                wp_reset_postdata(); // Réinitialiser la requête globale de WordPress
            endif; ?>
        </div>
    </section>

</div>

    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2> Le voyage</h2>
            <p> <?php
                // Appel du shortcode directement dans le fichier front-page.php
                echo do_shortcode('[em_destination]');
                ?></p>
        </section>
        
        <section>   
            <?php
                // Appel du shortcode directement dans le fichier front-page.php
                echo do_shortcode('[em_destination]');
                ?>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>les destinations par catégorie</h2>
            <article class = "destination">
            <?php
            $categories = get_categories();
            foreach ($categories as $elm_categorie){
                $nom = $elm_categorie->name;
                $description = wp_trim_words ($elm_categorie-> description, 15);
                $nombre_destination = $elm_categorie-> count;
                $categorie_url = get_category_link($elm_categorie->term_id)
?>
            <div  class = "carte">
                    <h3> <?php echo $nom;?><h3>
                    <p>  <?php echo $description;?> </p>
                    <p> Nombre de destination: <?php echo  $nombre_destination; ?> </p>
                    <a href = "<?php echo $categorie_url ?>"> Voir la destination </a>

            </div>

           <?php }?>
            
            </article>
              <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-footer);"class="shape-fill"></path>
      </svg>
        </section>
 
    </div>
<?php get_footer(); ?>