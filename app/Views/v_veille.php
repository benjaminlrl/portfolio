<?php
$veilles = [
    [
        "titre" => "Micode",
        "description" => "Créateur de contenu sur la tech",
        "img" => ["src"=>"images/logos/micode.jpeg",
            "alt"=>"pp micode",
            "class"=>"cell__logo",
            "title"=>"Logo youtube"],
        "lien" => "https://www.youtube.com/channel/UCYnvxJ-PKiGXo_tYXpWAC-w",
    ],

    [
        "titre" => "_Underscore",
        "description" => "Concepts et culture dev",
        "img" => ["src"=>"images/logos/_underscore.jpg",
            "alt"=>"pp underscore",
            "class"=>"cell__logo",
            "title"=>"Logo youtube"],
        "lien" => "https://www.youtube.com/@Underscore_",
    ],
    [
        "titre" => "Benjamin Code",
        "description" => "Tips web dev",
        "img" => ["src"=>"images/logos/benjamincode.jpg",
            "alt"=>"pp micode",
            "class"=>"cell__logo",
            "title"=>"Logo youtube"],
        "lien" => "https://www.youtube.com/c/BenjaminCode",
    ],
    [
        "titre" => "Php Docs",
        "description" => "Documentation officielle de php",
        "img" => ["src"=>"images/logos/PHP_Logo.png",
            "alt"=>"Logo Php",
            "class"=>"cell__logo",
            "title"=>"Logo youtube"],
        "lien" => "https://www.php.net/docs.php",
    ],
    [
        "titre" => "MDN Web Docs",
        "description" => "Documentation officielle Mozilla",
        "img" => ["src"=>"images/logos/mdn_Logo.webp",
            "alt"=>"pp micode",
            "class"=>"cell__logo",
            "title"=>"Logo youtube"],
        "lien" => "https://developer.mozilla.org/fr/",
    ],
];
function afficherVeilles( array $veilles): string {
    $html = '<div class="section__container">
        <div class="langages">';

    $index = 1;
    foreach ($veilles as $veille):
        $html .= '<a href="'. $veille["lien"] .'" class="langage__container langage__container--competence" id="veille_' . $index . '">
                <div class="container__header my-0">
                    <div class="container__logos container__logos--competence">'
            . img($veille["img"]) .
            '</div>
                </div>
                <div class="langage__container langage__container--center">
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
    <div class="section__container section__container--center">
        <div class="section__title section__title--bg my-5-vh">
            <h2 class="text--m">🔎&nbsp;Veille informatique</h2>
        </div>
    </div>
    <?= afficherVeilles($veilles) ?>
</section>