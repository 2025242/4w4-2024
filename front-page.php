
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
        
    </section>
    
    <?php get_template_part("gabarits/vague"); ?>
</div>
    <div id="accueil" class="global">
      
       
        <section>
            <h2>Destination Populaire</h2>
    <div class="destination">
        <?php if (have_posts()):
            while(have_posts()): the_post(); ?>
                <div class="case">
                    <div class="nft">
                        <div class='main'>
                            <?php
                        // Récupérer le contenu de l'article
                        $content = get_the_content();

                        // Utiliser une expression régulière pour extraire l'URL de l'image
                        preg_match('/<img[^>]+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $content, $matches);
                        
                        // Vérifier si une image a été trouvée dans le contenu
                        if (!empty($matches[1])) {
                            $image_url = $matches[1];
                            echo '<img class="tokenImage" src="' . $image_url . '" alt="NFT" />';
                        } else {
                            // Si aucune image n'a été trouvée dans le contenu, afficher une image par défaut
                            echo '<img class="tokenImage" src="chemin/vers/image-par-defaut.jpg" alt="NFT" />';
                        }
                        ?>
                            <h2><?php the_title(); ?></h2>
                            <p class='description'><?php echo wp_trim_words(get_the_content(), 20); ?></p>
                            <div class='tokenInfo'>
                                <div class="price">
                                    <ins>◘</ins>
                                    <p><?php /* Insérer le prix dynamique */ ?></p>
                                </div>
                                <div class="duration">
                                    <ins> <?php the_category(); ?></ins>
                                    <p><?php /* Insérer la durée dynamique */ ?></p>
                                </div>
                            </div>
                            <hr />
                       
                            <div class='creator'>

                                <p><ins></ins>  <a href="<?php the_permalink(); ?>" class="lien-suite">Suite</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        endif; ?>
    </div>
</section>
    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2>Événement (h2)</h2>
            <p>Les voyages, ces périples qui nous emportent loin de nos habitudes et nous plongent dans l'inconnu, sont une aventure à part entière. Ils offrent un éventail infini de découvertes, de rencontres et d'expériences qui enrichissent nos vies de manière inestimable.

Partir en voyage, c'est s'ouvrir à de nouveaux horizons, tant géographiques que culturels. C'est explorer des contrées lointaines où chaque paysage raconte une histoire, où chaque ville exhale un parfum unique, où chaque rue résonne des échos du passé et du présent entremêlés.

C'est aussi partir à la rencontre de l'autre, de celui qui vit différemment, qui pense autrement, qui parle une langue étrangère. C'est s'imprégner de sa culture, de ses traditions, de sa cuisine, pour mieux comprendre la diversité du monde qui nous entoure.

Mais voyager, c'est également se confronter à l'imprévu, aux imprévus, aux défis qui jalonnent tout périple. C'est apprendre à s'adapter, à improviser, à sortir de sa zone de confort pour mieux apprécier les moments de joie et surmonter les épreuves avec courage et détermination.

Au-delà de la simple découverte, voyager permet aussi de se découvrir soi-même. C'est l'occasion de se confronter à ses peurs, à ses limites, à ses préjugés, pour mieux les dépasser et s'épanouir en tant qu'individu.

Et puis, il y a ces instants magiques, ces souvenirs impérissables que seul le voyage peut offrir. Le coucher de soleil sur une plage déserte, la rencontre fortuite avec un inconnu qui devient un ami, la saveur exquise d'un plat typique dégusté au détour d'une ruelle étroite... autant de moments qui resteront gravés dans notre mémoire pour l'éternité.

En définitive, voyager, c'est bien plus que parcourir des kilomètres sur une carte. C'est une quête de sens, une exploration de soi et du monde qui nous entoure, une source inépuisable de découvertes et d'émotions. Alors, que ce soit à quelques pas de chez soi ou à l'autre bout de la planète, partons à la rencontre de l'aventure qui nous attend, avec curiosité et enthousiasme. Car comme le dit si bien Saint-Augustin : "Le monde est un livre, et ceux qui ne voyagent pas n'en lisent qu'une page</p>
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