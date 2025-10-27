<!-- Section entreprise actuelle -->
<?php
$entreprise = [
        "titre" => "Ministères des Armées /&nbsp;DRHAT",
        "missions"=>[
                "mission1"=>[
                        "titre"=>'<i class="fa-light fa-laptop text--accent"></i>&nbsp;Refonte du site RH-Terre',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                                "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                                "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                        ]
                ],
                "mission2"=>[
                        "titre"=>'<i class="fa-light fa-shield-check text--accent"></i>&nbsp;Sécurité',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                                "Gestion des droits utilisateurs en fonction des groupes attribués."
                        ]
                ],
                "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                                "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                ],
                "mission4"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                                "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                ]
        ],
        "img" => ["src"=>"images/siege_mda.webp",
                "alt"=>"Logo CSS3",
                "class"=>"cell__logo",
                "title"=>"Logo CCS3"],
        "logos"=> [
                "logo1"=>[
                        "src"=>"images/logos/Ministère_des_Armées.png",
                        "alt"=>"Logo CSS3",
                        "class"=>"cell__logos-logo",
                        "title"=>"Logo CCS3"
                ],
                "logo2" => [
                        "src"=>"images/logos/DRHAT.png",
                        "alt"=>"Logo CSS3",
                        "class"=>"cell__logos-logo",
                        "title"=>"Logo CCS3"
                ]

        ]
];?>
<section id="section__entreprises">
    <div class="section__container section__container--center">
        <div class="section__title my-5-vh">
            <h2 class="text--m">💼&nbsp;Mon expérience</h2>
            <p>Mon parcours professionnel en alternance</p>
        </div>
    </div>
    <div class="section__container section__container--center">
        <div class="card grid grid--m my-5-vh" id="card__entreprise">
            <div class="grid__cell" id="">
                <div class="cell__header">
                    <?= img($entreprise["img"]) ?>
                    <div class="cell__header--content">
                        <div class="cell__content">
                            <div class="grid g-2" id="grid__entreprise_header">
                                <div class="grid__cell">
                                    <div class="cell__logos">
                                        <?php foreach ($entreprise["logos"] as $logo): ?>
                                        <?= img($logo) ?>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="grid__cell grid__cell--middle g-1">
                                        <h3 class="text--m"> <?= $entreprise["titre"] ?></h3>
                                        <p class="text--s text--tertiaire">Webmaster (en&nbsp;alternance)</p>
                                        <p class="text--xxs text--tertiaire"><i class="fa-light fa-calendars text--accent"></i>&nbsp;2024&nbsp;-&nbsp;2026  <i class="fa-light fa-location-dot text--accent"></i>&nbsp;Tours,&nbsp;France</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="cell__content p-2-vh">
                    <h4 class="text--s"><i class="fa-light fa-building-memo text--accent"></i>&nbsp;À propos du poste</h4>
                    <p class="text--xxs">En tant que webmaster en alternance avec le ministère des Armées à la Direction des Ressources Humaines de l'Armée de Terre, je participe activement au développement et à la maintenance du site RH-Terre.</p>
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
