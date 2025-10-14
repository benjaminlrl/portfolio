<?php
$illustration = ["src"=>"images/illustration_developpement_dos.png",
    "alt"=>"Illustration du portrait de Benjamin Lorieul",
    "class"=>"cell__image cell_image--avatar",
    "title"=>"Portrait de Benjamin Lorieul"];
?>
<!-- Section langues -->
<section id="section__presentation">
    <div class="section__container">
        <div class="grid grid--fit" id="grid__presentation">
            <div class="grid__cell" id="presentation__cell_1">
                <div class="cell__content cell__content--center">
                    <div class="cell__images">
                        <?= img($illustration)?>
                    </div>
                </div>
            </div>
            <div class="grid__cell" id="presentation__cell_2">
                <div class="cell__header">
                    <h2 class="text--xl text--white">A propos</h2>
                </div
                <div class="cell__content cell__content--center">
                    <p class="text--xs text--600 text--justify text--opacity-900 text--white">Apprenti développeur web spécialisé en développement d'applications, je cultive ma passion pour le code à travers mon alternance au sein de la DRHAT du Ministère des Armées. De la conception à la mise en production, j'apprécie chaque étape du cycle de développement.
                        <br>
                        <br>
                        Mon objectif : créer des expériences utilisateur fluides grâce à une architecture technique solide.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
