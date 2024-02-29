<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thème wordpress de Salma</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@700&display=swap" rel="stylesheet">

  </head>
  <body>
    <div id="entete" class="">
      <header class="entete__header">
        <h1>Thème wordpress de salma (h1)<br>   </h1>
        <h2>4W4 - Concepetion d'interface <span> et dévelopement web</span></h2>
        <h3>TIM-Collège de Maisonneuve</h3><br>
                <button>Nous joindre</button>
                <button>Bibliothèque</button>
                <button>Omnivox</button>
                <button>Emploi</button>
                <button>Événement</button>
     
      </header>
       
    <div class="vague">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var( --couleur-arriere-accueil);"class="shape-fill"></path>
      </svg>
    </div>

    </div>
    <div id="accueil" class="global">
   
      <section>
        <h2>Acceuil (h2)</h2>
        <section>
        <div class="titreCour">Cours</div>
        <div class="cartes-cours">
  <?php
  // Récupère les articles de type "post" (cours)
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
  );

  $cours_query = new WP_Query($args);

  if ($cours_query->have_posts()) {
    while ($cours_query->have_posts()) {
      $cours_query->the_post();

            // Récupère le titre
      $titre_cours = get_the_title();

      // Trouve la durée dans le titre (assumant que la durée est entre parenthèses)
      preg_match('/\((.*?)\)/', $titre_cours, $matches);
      $duree_cours = isset($matches[1]) ? $matches[1] : '';

      // Trouve le sigle du cours
      preg_match('/^([\dA-Z-]+)\s/', $titre_cours, $sigle_matches);
      $sigle_cours = isset($sigle_matches[1]) ? $sigle_matches[1] : '';

      // Supprime la durée et le sigle du titre
      $titre_cours_sans_duree_sigle = trim(str_replace(array("($duree_cours)", "$sigle_cours"), '', $titre_cours));

      // Affiche la carte du cours
      echo '<div class="carte-cours">';
      echo '<h5>' . esc_html($sigle_cours) . '<br>' . esc_html($titre_cours_sans_duree_sigle) . '</h5>';
      echo '<p>' . esc_html(wp_trim_words(get_the_content(), 20)) . '</p>';
      echo '<span>Durée : ' . esc_html($duree_cours) . '</span>';
      echo '</div>';
    }
    wp_reset_postdata(); // Réinitialise la requête post
  } else {
    echo '<p>Aucun cours trouvé.</p>';
  }
  ?>
</div>

</div>
      </section>
    </div>
    <div id="evenement" class="global diagonal">
      <section>
        <h3>Évement (h3)</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </section>
    </div>
    <div id="galerie" class="global">
      <section>
        <h4>Galerie (h4)</h4>
        <div class="image">
        <img src="image/image1.jpg"width="300" height="200">
        <img src="image/image2.jpg"width="300" height="200">
        <img src="image/image3.jpg"width="300" height="200">
      </div>
      
      </section>
      <div class="vaguefooter">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var( --couleur-arriere-footer);" class="shape-fill"></path>
        </svg>
    </div>
    </div>
    <div id="footer" class="global">
      
      <footer>
        <h5>Footer(h5)</h5><br>
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
            <p>Téléphone:  (514) 254-7131</p>
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

    <div class="footer-bottom">
        <p>&copy; 2024 College Maisonneuve. Tous droits réservés.</p>
    </div>
  </body>
</html>
 