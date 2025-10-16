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
        "lien" => "images/certifications/0250901_moocdelacnil_module_1.pdf"
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
        "titre" => "BAC General",
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
<section id="section__certifications" class="py-100">
    <div class="section__container section__container--center">
        <h2 class="text--m">🎖️&nbsp;Certifications</h2>
        <p class="text--xs text--600 text--opacity-900 my-2-vh">Diplômes et certifications obtenues au fil des années</p>
        <div class="grid my-5-vh" id="grid__certifications">
            <?php $index = 1;
            foreach ($certifications as $certification) :?><div class="grid__cell" id="projet_cell_<?= $index ?>">
                <div class="cell__header">
                    <?= img($certification["img"]) ?>
                    <h3 class="text--s"> <?= $certification["titre"] ?></h3>
                </div>
                <div class="cell__content cell__content--footer">
                    <div class="cell__logos cell__logos--start">
                        <?= img($certification["logoContexte"]) ?>
                    </div>
                    <?php if(!empty($certification["lien"])):?>
                        <a href="<?= $certification["lien"] ?>" class="button button--more text--xs text--end"
                           target="_blank">Ouvrir&nbsp;<i class="fa-solid fa-arrow-up-right-from-square text--xs"></i></a>
                    <?php endif; ?>
                </div>
                </div>
                <?php $index++;
            endforeach;?>
        </div>
    </div>
</section>