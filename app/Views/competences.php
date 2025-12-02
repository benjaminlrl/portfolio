<?php


function afficherCompetences(string $titre, array $competences): string {
    $html = '<div class="section__container">
        <div class="section__title">
            <h2 class="text--m">' . $titre . '</h2>
        </div>
        <div class="langages">';

    $index = 1;
    foreach ($competences as $competence):
        $html .= '<button class="tile" id="tile_competence_' . $index . '">
                <div class="tile__header my-0">
                    <div class="tile__header-logos">'
                . img($competence["img"]) .
                '</div>
                </div>
                <div class="tile__content">
                    <h1 class="text--s text--800">' . $competence["titre"] . '</h1>
                    <p class="text--xs text--400 text--opacity-900">' . $competence["description"] . '</p>
                </div>
            </button>';
        $index++;
    endforeach;

    $html .= '</div>
    </div>';

    return $html;
}
?>

<!-- Section compétences -->
<section id="section__competences">
    <div class="section__container section__container--center my-5-rem">
        <div class="section__title">
            <h2 class="text--m">💻&nbsp;Mes&nbsp;compétences&nbsp;techniques</h2>
        </div>
    </div>
    <?= afficherCompetences("🎨&nbsp;Front-end", $langagesFront) ?>
    <?= afficherCompetences("🗄️&nbsp;Back-end", $langagesBack) ?>
    <?= afficherCompetences("🏗️&nbsp;Framework & CMS", $langagesFramework) ?>
    <?= afficherCompetences("🧩&nbsp;Complémentaires", $langagesAutres) ?>

    <div class="section__container section__container--center my-5-rem">
        <div class="section__title my-15-5-vh">
            <h2 class="text--m">🧑‍💼&nbsp;Mes&nbsp;compétences&nbsp;proffesionnelles</h2>
        </div>
    </div>
    <div class="section__container section__container--center">
        <div class="grid grid--competences-pro g-1">
            <?php foreach($competencesPro["competencesPro"] as $competence): ?>
                <div class="grid__cell p-2-1-vh">
                    <div class="cell__content">
                        <h5 class="text--s my-1-rem g-1"><?= $competence["titre"]?></h5>
                        <?php
                        $list = $competence["taches"];
                        $attributes = ["class"=>"text--xxs text--500 g-0-4 tache"];
                        echo ul($list, $attributes);
                        ?>
                        <div class="cell__content cell__content--center">
                            <button class="button button--tertiaire my-2-vh text--xs">Voir les projets</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="section__container section__container--center">
        <a href="<?= base_url("/portefeuille_de_competences")?>" target="_blank"
           class="button button--tertiaire text--xs p-2-vh my-5-vh" title="Voir mon portefeuille de compétences - nouvelle fenêtre"><i class="fa-solid fa-table"></i>&nbsp;Portefeuille&nbsp;de&nbsp;compétences
        </a>
    </div>
</section>