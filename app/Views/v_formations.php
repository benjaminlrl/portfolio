<?php
$formations=[
        ['etablissementLogo' => 'iscb.jpg',
                'diplome'=>'BTS SIO - En cours',
                'annee'=>'2024 - 2026',
                'description'=>'Services Informatiques aux Organisations option Solutions Logicielles et Applications Métiers (SLAM) réalisé en alternance.',
                'entrepriseLogo'=>'Ministère_des_Armées.png',
                'lien'=>'https://www.iscb.fr/',
                'entrepriseLien'=>'https://www.defense.gouv.fr/'
        ],
        ['etablissementLogo' => 'LEGTA_logo.png',
                'diplome'=>'BAC GENERAL',
                'annee'=>'2021 - 2024',
                'description'=>'Bac général mention ASSEZ BIEN option mathématiques et biologie/écologie au lycée agricole de Fondettes.',
                'lien'=>'https://www.tours-fondettes-agrocampus.fr/',
                'entrepriseLien'=>''
        ],
        ['etablissementLogo' => '',
                'diplome'=>'Diplôme Nationale du Brevet',
                'annee'=>'2018 - 2021',
                'description'=>'Obtention du DNB au collège Lucie et Raymond Aubrac de Luynes.',
                'lien'=>'',
                'entrepriseLien'=>''
        ]
];
?>
<!-- Section formations -->
<section id="section__formations">
    <div class="section__container section__container--center">
        <h2 class="text--l">🎓&nbsp;Formation</h2>
        <p class="text--xs text--600 text--opacity-900 my-2-vh">Mes formations académiques</p>
        <div class="grid grid--xl my-5-vh" id="grid__formation">
            <?php $index = 1;
            foreach($formations as $formation): ?>
                <div class="grid__cell grid__cell--middle">
                    <div class="grid__cell-formation" id="formation_cell_<?= $index ?>">
                        <div class="cell__logos cell__content--column cell__content--gutter--s">
                            <a href="<?= !empty($formation['lien'])? $formation['lien']:''; ?>">
                            <?php if(!empty($formation['etablissementLogo'])):
                                $imgEtablissement = ["src"=>"images/logos/".$formation['etablissementLogo'],
                                        "alt"=>"Logo ".$formation['etablissementLogo'],
                                        "class"=>"cell__logos-logo",
                                        "title"=>"Logo ".$formation['etablissementLogo']];
                                echo img($imgEtablissement);
                            endif; ?>
                            </a>
                            <a href="<?= !empty($formation['entrepriseLien'])? $formation['entrepriseLien']:''; ?>">
                            <?php if(isset($formation['entrepriseLogo']) && !empty($formation['entrepriseLogo'])):
                                $imgEntreprises = ["src"=>"images/logos/".$formation['entrepriseLogo'],
                                        "alt"=>"Logo ".$formation['entrepriseLogo'],
                                        "class"=>"cell__logos-logo",
                                        "title"=>"Logo ".$formation['entrepriseLogo']];
                                echo img($imgEntreprises);
                            endif; ?>
                            </a>
                        </div>
                        <div class="cell__content cell__content--center cell__content--gutter--s">
                            <h4 class="text--m"><?= $formation['diplome']?></h4>
                            <p class="text--xxs text--400 text--opacity-900"><?= $formation['description']?></p>
                        </div>
                    </div>
                    <span class="separator__formation-date"></span>
                    <div class="grid__cell-date" id="formation_cell_<?= $index ?>_bis">
                        <div class="cell__content cell__content-start cell__content--row cell__content--gutter--s">
                            <?= $index===1?'<i class="fa-solid fa-spinner-scale text--m"></i>':
                            '<i class="fa-solid fa-calendars text--m"></i>' ?>
                            <p class="text--xs text--opacity-900 formation__date"><?= $formation['annee']?></p>
                        </div>
                    </div>
                </div>
                <?php $index++;
            endforeach; ?>
        </div>
    </div>
</section>
<?php
$illustration = ["src"=>"images/illustration_devenir.png",
        "alt"=>"Illustration du portrait de Benjamin Lorieul",
        "class"=>"cell__image cell_image--avatar",
        "title"=>"Portrait de Benjamin Lorieul"];
?>
<section id="section__devenir">
    <div class="section__container">
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
                    <h2 class="text--l text--start">Objectifs professionnels</h2>
                </div
                <div class="cell__content cell__content--center">
                    <p class="text--xs text--600 text--start text--opacity-900">A la suite de l'obtention de mon BTS SIO SLAM, je souhaiterais intégrer une école d'ingénieur en alternance dans le domaine de la cybersécurité orienté développement web.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
