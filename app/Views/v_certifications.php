<?php
$certifications = [
    [
        "titre" => "Atelier RGPD",
        "img" => ["src"=>"images/logos/CNIL_Logo.jpg",
            "alt"=>"",
            "class"=>"cell__projet",
            "title"=>""],
        "logoContexte" => ["src"=>"images/logos/iscb.jpg",
            "alt"=>"ministère des Armées",
            "class"=>"cell__logos-logo logo--xs",
            "title"=>"Certification professionnel"],
        "lien" => "images/certifications/20250901_moocdelacnil_module_1.pdf"
    ],
    [
        "titre" => "PHP",
        "img" => ["src"=>"images/certifications/concevezVotreSiteWebAvecPHPetMySQL.png",
            "alt"=>"",
            "class"=>"cell__projet",
            "title"=>""],
        "logoContexte" => ["src"=>"images/logos/OpenClassRoom_Logo.png",
            "alt"=>"Logo personnel",
            "class"=>"cell__logos-logo logo--xs",
            "title"=>"Certification Open Classroom"],
        "lien" => "images/certifications/concevezVotreSiteWebAvecPHPetMySQL.png"
    ],
    [
        "titre" => "BAC Général",
        "img" => ["src"=>"images/logos/diplome_Logo.jpg",
            "alt"=>"",
            "class"=>"cell__projet",
            "title"=>""],
        "logoContexte" => ["src"=>"images/logos/ministere_education_Logo.png",
            "alt"=>"Avatar",
            "class"=>"cell__logos-logo logo--xs",
            "title"=>"Certification nationale"],
        "lien" => "images/certifications/Releve_de_Notes_BAC.pdf"
    ],
    [
        "titre" => "Pix",
        "img" => ["src"=>"images/logos/PIX_Logo.png",
            "alt"=>"",
            "class"=>"cell__projet",
            "title"=>""],
        "logoContexte" => ["src"=>"images/logos/ministere_education_Logo.png",
            "alt"=>"Avatar",
            "class"=>"cell__logos-logo logo--xs",
            "title"=>"Certification nationale"],
        "lien" => "images/certifications/attestation-pix-20240517.pdf"
    ]
];
?>
<!-- Section certifications -->
<section id="section__certifications">
    <div class="section__container section__container--center">
        <div class="section__title">
            <h2 class="text--m">🎖️&nbsp;Certifications</h2>
            <p class="text--xs text--600 text--center text--opacity-900 my-2-vh">Diplômes et certifications obtenues au fil des années</p>
        </div>
    </div>
    <div class="section__container section__container--center">
        <div class="card grid my-5-vh" id="card__certifications">
            <?php $index = 1;
            foreach ($certifications as $certification) :?>
                <a href="<?= $certification["lien"] ?>" target="_blank" class="grid__cell grid__cell--hover" id="projet_cell_<?= $index ?>"
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
    </div>
</section>