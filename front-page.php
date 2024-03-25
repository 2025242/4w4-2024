
<?php get_header(); ?>
    
<div id="entete" class="global">
    <section class="entete__header">
        <h1><?php echo get_bloginfo("name") ?></h1>
        <h2><?php echo get_bloginfo("description") ?></h2>
        <h3>Découvrez des destinations uniques, créez des souvenirs inoubliables</h3>
        <button>Destination Populaire</button>
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
            <h2>Galerie (h2)</h2>
        </section>
  <?php  get_template_part('gabarits/vague'); ?>
    </div>
<?php get_footer(); ?>