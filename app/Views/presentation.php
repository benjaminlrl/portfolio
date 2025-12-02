<?php
$illustration = ["src"=>"images/illustration_developpement_dos.png",
    "alt"=>"Illustration du portrait de Benjamin Lorieul",
    "class"=>"cell__image cell_image--avatar"];
?>
<!-- Section langues -->
<section id="section__presentation">
    <div class="section__container p-1-rem">
        <div class="grid grid--fit" id="grid__presentation">
            <div class="grid__cell" id="presentation__cell_1">
                <div class="cell__content cell__content--center">
                    <div class="cell__images">
                        <?= img($illustration)?>
                    </div>
                </div>
            </div>
            <div class="grid__cell g-2" id="presentation__cell_2">
                <div class="cell__header">
                    <h2 class="text--xl text--center text--white">À propos</h2>
                </div
                <div class="cell__content cell__content--center">
                    <p class="text--xs text--600 text--start text--opacity-900 text--white">Apprenti développeur web, j'ai découvert le développement informatique en classe de seconde au cours du programme de SNT (Science Numériques et Technologiques).
                        <br><br>
                        Ayant été pris de passion, c'est avec une profonde envie que j'ai décidé naturellement de me diriger vers le BTS SIO SLAM (Service Informatique aux Organisations, Solutions Logicielles et Applications Métier).
                        <br> <br> Réaliser en alternance pour le Ministère des Armées et des anciens Combattants au sein de la DRHAT (Direction des Ressources Humaines de l'Armée de Terre), me permettant d'allier théorie, pratique et professionnalisme.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
