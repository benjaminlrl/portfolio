<?php

$langues = [
    [
        "langue" => "France",
        "niveau" => "C2",
        "image" => "images/France_Flag.png"
    ],
    [
        "langue" => "Anglais",
        "niveau" => "B1+",
        "image" => "images/English_Flag.jpg"
    ],
    [
        "langue" => "Espagnol",
        "niveau" => "A2+",
        "image" => "images/Spain_Flag.jpg"
    ]
];

/**
 * afficherLangue génère le code html pour afficher une langue
 * @param string $langue La langue
 * @param string $niveau de A1 à C3
 * @param string $langueImage Le nom de l'image
 * @return string code html correspondant à la langue
 */
function afficherLangue(string $langue, string $niveau, string $langueImage): string{
    $strokeDashoffset = 0;
    switch ($niveau) {
        case "C2":
            $strokeDashoffset = 0;
            break;
        case "A2+":
            $strokeDashoffset = 260;
            break;
        case "B1+":
            $strokeDashoffset = 226;
            break;

    }
    $html = '<svg width="150" height="150" viewBox="-25 -25 250 250" version="1.1" xmlns="http://www.w3.org/2000/svg" style="transform:rotate(-90deg); background-color: transparent;">
                    <defs>
                        <linearGradient id="gradient" x1="40%" y1="40%" x2="80%" y2="0%">
                            <stop offset="0%" stop-color="#6a05a5" />
                            <stop offset="100%" stop-color="#fa67ff" />
                        </linearGradient>
                        <clipPath id="roundedImage">
                            <rect x="50" y="45" width="100" height="100" rx="5" ry="5"></rect>
                        </clipPath>
                    </defs>
                    <circle r="90" cx="100" cy="100" stroke="url(#gradient)" stroke-width="25px" stroke-linecap="round" fill="transparent" stroke-dasharray="565.48px" stroke-dashoffset="' .$strokeDashoffset .'px"></circle>
                    <image href="' . base_url().$langueImage.'" alt="' .$langue .'" x="50" y="45" height="100px" width="100px" style="transform:rotate(90deg) translate(0px, -196px)" clip-path="url(#roundedImage)"></image>
                </svg>
                <p>' .$niveau .'</p>';
    return $html;
}
?>
<!-- Section langues -->
<section id="section__langues" class="my-5-vh">
    <div class="section__container section__container--center">
        <div class="section__title my-5-vh">
            <h3 class="text--m">🌍&nbsp;Langues</h3>
            <p class="text--xs text--600 text--opacity-900 my-2-vh">Maitrise académique des langues</p>
        </div>
        <div class="grid my-5-vh" id="grid__langues">
            <?php foreach ($langues as $langue): ?>
            <div class="grid__cell grid__cell--center grid__cell--column">
                <?= afficherLangue($langue['langue'], $langue['niveau'], $langue['image']); ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="section__container section__container--center">
        <a href="<?= base_url("/images/certifications/Attestations_de_competence_en_langues_vivantes_V1.pdf")?>" target="_blank"
           class="button button--tertiaire text--xs p-2-vh my-5-vh" title="Voir mon portefeuille de compétences - nouvelle fenêtre"><i class="fa-solid fa-table"></i>&nbsp;Certificat de langues
        </a>
    </div>
</section>
