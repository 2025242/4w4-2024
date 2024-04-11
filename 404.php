<?php get_header(); ?>

<div>
  <div id="entete" class="global">
    <section class="entete__header">
<div class="container404">
    <div class="fond404">
        <h2>Erreur 404</h2><br><br><br>
        <h5>Vous essayez d'accéder à une page qui n'existe pas.<br>Pour revenir à la page d'accueil, cliquez sur le lien suivant :</h5><br>
        <h3 class="lien"><a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name');?></a></h3><br><br>
        <div class="search-form"><?php get_search_form()?></div>
    </div> 

    <div class="image-Logo">
        <img src="http://127.0.0.1:8080/4w4salma/wp-content/uploads/2024/04/logo.png" alt="Description de l'image">
    </div>
</div>
    <ul class="categories-list">
    <?php
    $categories = get_categories();
    foreach ($categories as $category) {
        echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
    }
    ?>
</ul>
    </section>
    <?php get_template_part("gabarits/vague"); ?>


  </div>

<div id="galerie" class="global">
  <div class="vaguefooter">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var( --couleur-arriere-footer);" class="shape-fill"></path>
    </svg>
  </div>
</div>
<div id="footer" class="global">

  <footer>
  
    <div class="footer-content">
      <div class="footer-section about">
        <h2>À propos de nous</h2>
        <p>Elle représente notre idéal, notre aspiration, notre objectif ultime...</p>
        <!-- Ajoutez d'autres informations à propos de votre entreprise ici -->
      </div>

      <div class="footer-section contact">
        <h2>Contactez-nous</h2>
        <p>Adresse: 3800 R. Sherbrooke E, Montréal, QC H1X 2A2</p>
        <p>Email: ad.internationale@cmaisonneuve.qc.ca.</p>
        <p>Téléphone: (514) 254-7131</p>
      </div>

      <div class="footer-section links">
        <h2>Liens rapides</h2>
        <ul>
          <li><a href="#">Accueil</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Produits</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
 <div  class = "search-form"><?php get_search_form()?></div>
    <div class="footer-bottom">
      <p>&copy; 2024 College Maisonneuve. Tous droits réservés.</p>
    </div>
 <h4 class = "menufooter"><?php wp_nav_menu(array(
                "menu"=> "footer",  
                "container" => "nav")); ?></h4>
</footer>
    </body>

    </html>