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
        <p>Auteur: Bourakkadi salma</p>
          <p>Adresse:3800 R. Sherbrooke E, Montréal, QC H1X 2A2</p>
          <a href="https://2025242.github.io/4w4-2024/">lien github</a>
      
      </div>

      <div class="footer-section contact">
        <h2>Contactez-nous</h2>
        <p>Besoin d'aide pour planifier votre prochain voyage ou avez-vous des questions concernant nos services ? N'hésitez pas à nous contacter. Notre équipe dévouée est là pour vous aider et répondre à toutes vos interrogations.</p><br>
        <p>Email: [explorerlinconnu@email.com]</p>
        <p>Téléphone: (514) 254-7131</p>
          <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      </div>

      <div class="footer-section links">
        <h2>Liens rapides</h2>
         <p>AUTRE</p>
          <p>//</p><br>
          <h4 class = "menufooter"><?php wp_nav_menu(array(
                "menu"=> "footer",  
                "container" => "nav")); ?></h4>
       <ul>

    </div>
    </div>  

    <div class="footer-bottom">
      <p>&copy; 2024 College Maisonneuve. Tous droits réservés.</p>
    </div>
    

</footer>

</div>
<?php wp_footer() ?>
</body>
</html>