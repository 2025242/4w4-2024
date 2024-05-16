<?
/*
*tempate
*/?>
<div class="case">
                    <div class="nft">
                       <div class='main'>
                            <?php
                        // Récupérer le contenu de l'article

                        $content = get_the_content();

                      // Récupérer l'URL de l'image mise en avant
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large');

    // Vérifier si une image mise en avant existe
    if (!empty($featured_image_url)) {
        echo '<img class="tokenImage" src="' . esc_url($featured_image_url) . '" alt="NFT" />';
    } else {
        // Si aucune image mise en avant n'est définie, afficher une image par défaut
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
        