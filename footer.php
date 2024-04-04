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
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2024 College Maisonneuve. Tous droits réservés.</p>
    </div>
    
<h5 class = "menufooter"><?php wp_nav_menu(array(
                "menu"=> "footer",  
                "container" => "nav")); ?></h5>
</footer>

</div>
</body>
</html>