<?php
/**
* Template footer.php
* Ce gabarit est appelé à la fin de chacun des modèle de thème
*
*/
?>

<div id="footer" class="global">
  <footer>
    <div class="footer-content">
      <div>
        <img src="http://127.0.0.1:8080/4w4salma/wp-content/themes/themesalma/image/logo.png" alt="Logo" class="logoFooter">
      </div>
      <div class="footer-section about">
        <h2>À propos</h2>
        <p class="textealigne">Auteur: Bourakkadi Salma</p>
        <p class="textealigne">Adresse: 3800 R. Sherbrooke E, Montréal, QC H1X2A2</p>
      </div>
      <div class="footer-section contact">
        <h2>Description</h2>
        <p class="description">Bienvenue sur Explorer l'inconnu, votre compagnon de voyage ultime pour découvrir les merveilles du monde. Nous sommes passionnés par l'exploration et nous nous engageons à vous fournir les meilleures expériences de voyage, des conseils pratiques et des inspirations pour votre prochaine aventure.</p></p>
 
      </div>
      <div class="footer-section links">
        <h2>Liens </h2>
        <p class="textealigne"><a href="https://2025242.github.io/4w4-2024/">Github Page</a></p>
        <p class="textealigne"><a href="https://www.cmaisonneuve.qc.ca/">College Maisonneuve</a></p>
        <p class="textealigne"><a href="https://github.com/2025242/4w4-2024/tree/tp2">Branche TP2 github</a></p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2024 College Maisonneuve. Tous droits réservés.</p><br>
      <div class="conteneurRecherche">
        <div class="search-form">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
     <?php get_logosociaux(); ?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <h4 class="menufooter">
      <?php wp_nav_menu(array("menu" => "footer", "container" => "nav")); ?>
    </h4>
  </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
