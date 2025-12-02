<!-- Section certifications -->
<section id="section__certifications">
    <div class="section__container section__container--center my-5-rem">
        <div class="section__title">
            <h2 class="text--m">🎖️&nbsp;Mes&nbsp;certifications</h2>
        </div>
    </div>
    <div class="section__container section__container--center">
        <div class="card card--certification grid my-5-vh" id="card__certifications">
            <?php $index = 1;
            foreach ($certifications as $certification) :?>
                <a href="<?= $certification["lien"] ?>" target="_blank" class="grid__cell grid__cell--hover" id="certification_cell_<?= $index ?>"
                title="Voir ma certification - nouvelle fenêtre">
                    <div class="cell__header">
                        <?= img($certification["img"]) ?>
                        <div class="cell__header--content">
                            <h3 class="text--s"> <?= $certification["titre"] ?></h3>
                        </div>
                    </div>
                    <div class="cell__content cell__content--footer">
                        <div class="cell__logos cell__logos--start">
                            <?= img($certification["logoContexte"]) ?>
                        </div>
                    </div>
                </a>
                <?php $index++;
            endforeach;?>
        </div>
        <p class="text--xxs text--secondary">A venir: freeCodeCamp Responsive Web Design, freeCodeCamp JavaScript, Sololearn PHP/SQL</p>
    </div>
</section>