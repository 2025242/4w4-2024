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
      <div class="footer-section about">
        <h2>À propos de nous</h2>
        <p>Bienvenue sur Explorer l'inconnu, votre compagnon de voyage ultime pour découvrir les merveilles du monde. Nous sommes passionnés par l'exploration et nous nous engageons à vous fournir les meilleures expériences de voyage, des conseils pratiques et des inspirations pour votre prochaine aventure.</p>
        <!-- Ajoutez d'autres informations à propos de votre entreprise ici -->
      </div>

      <div class="footer-section contact">
        <h2>Contactez-nous</h2>
        <p>Besoin d'aide pour planifier votre prochain voyage ou avez-vous des questions concernant nos services ? N'hésitez pas à nous contacter. Notre équipe dévouée est là pour vous aider et répondre à toutes vos interrogations.</p><br>
        <p>Email: [explorerlinconnu@email.com]</p>
        <p>Téléphone: (514) 254-7131</p>
      </div>

      <div class="footer-section links">
        <h2>Liens rapides</h2>
         <p>Vous pouvez également nous suivre sur les réseaux sociaux pour rester informé des dernières actualités, offres spéciales et inspirations de voyage.</p>
          <p>Suivez-nous sur:</p><br>
        <ul>
          <li><a href="#">Accueil</a></li>
              <li><a href="https://www.facebook.com/groups/voyagedanslesud/">Facebook</a></li>
                  
                      <li><a href="https://www.instagram.com/explore/tags/voyages/top/">Instagram
</a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2024 College Maisonneuve. Tous droits réservés.</p>
    </div>
    
<h4 class = "menufooter"><?php wp_nav_menu(array(
                "menu"=> "footer",  
                "container" => "nav")); ?></h4>
</footer>

</div>
</body>
</html>