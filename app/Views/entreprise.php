<!-- Section entreprise actuelle -->
<?php
?>
<section id="section__entreprises">
    <div class="section__container section__container--center my-2-rem">
        <div class="section__title">
            <h2 class="text--m">💼&nbsp;Mon expérience professionnelle</h2>
        </div>
    </div>
    <div class="section__container section__container--center">
        <div class="card card--entreprise grid grid--m my-5-vh" id="card__entreprise">
            <div class="grid__cell" id="">
                <div class="cell__header">
                    <?= img($entreprise["img"]) ?>
                    <div class="cell__header--content">
                        <div class="cell__content">
                            <div class="grid g-2" id="grid__entreprise_header">
                                <div class="grid__cell grid__cell--middle g-1">
                                        <h3 class="text--m"> <?= $entreprise["titre"] ?></h3>
                                        <p class="text--s text--tertiaire">Webmaster (en&nbsp;alternance)</p>
                                        <p class="text--xxs text--tertiaire"><i class="fa-light fa-calendars text--accent"></i>&nbsp;2024&nbsp;-&nbsp;2026  <i class="fa-light fa-location-dot text--accent"></i>&nbsp;Tours,&nbsp;France</p>
                                </div>
                                <div class="grid__cell">
                                    <div class="cell__logos">
                                        <?php foreach ($entreprise["logos"] as $logo): ?>
                                            <?= img($logo) ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="cell__content p-2-vh">
                    <h4 class="text--s"><i class="fa-light fa-building-memo text--accent"></i>&nbsp;Mon&nbsp;poste</h4>
                    <p class="text--xxs">En tant que webmaster en alternance avec le ministère des Armées à la Direction des Ressources Humaines de l'Armée de Terre, je participe activement aux évolutions et à la maintenance du site RH-Terre.</p>
                    <div class="grid grid--missions g-1 " id="grid__missions_entreprise">
                    <?php foreach($entreprise["missions"] as $mission): ?>
                        <div class="grid__cell">
                            <div class="cell__content">
                                <h5 class="text--xs"><?= $mission["titre"]?></h5>
                                <?php $list = $mission["taches"];
                                    $attributes = ["class"=>"text--xxs text--500 g-0-4 tache"];
                                    echo ul($list, $attributes); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
