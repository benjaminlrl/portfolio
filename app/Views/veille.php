<?php
function afficherVeilles( array $veilles): string {
    $html = '<div class="section__container">
        <div class="tiles g-1">';

    $index = 1;
    foreach ($veilles as $veille):
        $html .= '<a href="'. $veille["lien"] .'" class="tile p-5-rem" id="tile_veille_' . $index . '" target="_blank" title="Voir la source - nouvelle fenêtre">
               <div class="tile__header my-0">
                    <div class="tile__header-logos">'
                . img($veille["img"]) .
                '</div>
                </div>
                <div class="tile__content">
                    <h1 class="text--s text--800">' . $veille["titre"] . '</h1>
                    <p class="text--xs text--400 text--opacity-900">' . $veille["description"] . '</p>
                </div>
            </a>';
        $index++;
    endforeach;

    $html .= '</div>
    </div>';

    return $html;
}
?>

<!-- Section compétences -->
<section id="section__veille" class="my-5-vh">
    <div class="section__container section__container--center my-5-rem">
        <div class="section__title">
            <h2 class="text--m">🔎&nbsp;Veille informatique</h2>
            <p class="text--xxs text--600 text--secondary">La veille, c'est ce qui permet de rester à jour sur un ou plusieurs sujets.</p>
        </div>
    </div>
    <?= afficherVeilles($veilles) ?>
</section>