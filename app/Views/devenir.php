<?php
$illustration = ["src"=>"images/illustration_devenir.png",
    "alt"=>"Illustration du portrait de Benjamin Lorieul",
    "class"=>"cell__image cell_image--avatar"];
?>
<section id="section__devenir">
    <div class="section__container p-1-rem">
        <div class="grid grid--fit" id="grid__devenir">
            <div class="grid__cell" id="formation__cell_1">
                <div class="cell__content cell__content--center">
                    <div class="cell__images">
                        <?= img($illustration)?>
                    </div>
                </div>
            </div>
            <div class="grid__cell g-2" id="formation__cell_2">
                <div class="cell__header" id="devenir__title">
                    <h2 class="text--l text--start">Mes objectifs professionnels</h2>
                </div
                <div class="cell__content cell__content--center">
                    <p class="text--xs text--600 text--start text--opacity-900">À la suite de l'obtention de mon BTS SIO SLAM, je souhaiterais intégrer une licence professionnelle en alternance dans le domaine de la cybersécurité.
                        <br><br>
                        À la suite de cette licence, je me dirigerais vers un cycle ingénieurs afin de devenir ingénieur dans la cybersécurité dans la perspective de lié mon expérience de développeur informatique et d'agent de cybersécurité.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>