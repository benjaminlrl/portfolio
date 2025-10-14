<?php
$langagesFront = [
    [
        "titre" => "HTML 5",
        "description" => "Conception de page web",
        "img" => ["src"=>"images/logos/HTML5_Logo.png",
                "alt"=>"Logo HTML5",
                "class"=>"cell__logo",
                "title"=>"Logo HTML5"]
    ],
    [
        "titre" => "CSS 3",
        "description" => "Stylisation de page web",
        "img" => ["src"=>"images/logos/CSS3_Logo.png",
                "alt"=>"Logo CSS3",
                "class"=>"cell__logo",
                "title"=>"Logo CCS3"]
    ],
    [
        "titre" => "JavaScript",
        "description" => "Langage de programmation de scripts",
        "img" => ["src"=>"images/logos/JavaScript_Logo.png",
                "alt"=>"Logo JavaScript",
                "class"=>"cell__logo",
                "title"=>"Logo JavaScript"]
    ]
];
$langagesBack = [
        [
                "titre" => "PHP",
                "description" => "Langage de programmation libre",
                "img" => ["src"=>"images/logos/PHP_Logo.png",
                        "alt"=>"Logo PHP",
                        "class"=>"cell__logo",
                        "title"=>"Logo PHP"]
        ],
        [
                "titre" => "C#",
                "description" => "Conception de langage informatique",
                "img" => ["src"=>"images/logos/Csharp_Logo.png",
                        "alt"=>"Logo Csharp",
                        "class"=>"cell__logo",
                        "title"=>"Logo Csharp"]
        ],
        [
                "titre" => "MySql",
                "description" => "Langage de programmation libre",
                "img" => ["src"=>"images/logos/MySql_Logo.png",
                        "alt"=>"Logo MySql",
                        "class"=>"cell__logo",
                        "title"=>"Logo MySql"]
        ]
];

$langagesFramework = [
        [
                "titre" => "CodeIgniter 4",
                "description" => "Framework PHP MVC",
                "img" => ["src"=>"images/logos/CodeIgniter_Logo.png",
                        "alt"=>"Logo CodeIgniter",
                        "class"=>"cell__logo",
                        "title"=>"Logo CodeIgniter"]
        ],
        [
                "titre" => "Joomla",
                "description" => "Système de gestion de contenu",
                "img" => ["src"=>"images/logos/Joomla_Logo.png",
                        "alt"=>"Logo Joomla",
                        "class"=>"cell__logo",
                        "title"=>"Logo Joomla"]
        ]
];

$langagesAutres = [
        [
                "titre" => "Linux",
                "description" => "Système d'exploitation open source",
                "img" => ["src"=>"images/logos/Linux_Logo.png",
                        "alt"=>"Logo Linux",
                        "class"=>"cell__logo",
                        "title"=>"Logo Linux"]
        ],
        [
                "titre" => "Git",
                "description" => "Logiciel de gestion de versions décentralisé",
                "img" => ["src"=>"images/logos/Git_Logo.png",
                        "alt"=>"Logo Git",
                        "class"=>"cell__logo",
                        "title"=>"Logo Git"]
        ],
        [
                "titre" => "PHP Storm",
                "description" => "Environnement de développement",
                "img" => ["src"=>"images/logos/Phpstorm_Logo.svg",
                        "alt"=>"Logo PHP Storm Jetbrain",
                        "class"=>"cell__logo",
                        "title"=>"Logo PHP Storm Jetbrain"]
        ],
        [
                "titre" => "Virtual Box",
                "description" => "Logiciel de virtualisation",
                "img" => ["src"=>"images/logos/VirtualBox_Logo.png",
                        "alt"=>"Logo Virtual Box",
                        "class"=>"cell__logo",
                        "title"=>"Logo Virtual Box"]
        ],
        [
                "titre" => "PhpMyAdmin",
                "description" => "Système de gestion de bases de données",
                "img" => ["src"=>"images/logos/PhpMyAdmin_Logo.png",
                        "alt"=>"Logo PhpMyAdmin",
                        "class"=>"cell__logo",
                        "title"=>"Logo PhpMyAdmin"]
        ],
        [
                "titre" => "Vs Code",
                "description" => "Environnement de développement",
                "img" => ["src"=>"images/logos/VsCode_Logo.png",
                        "alt"=>"Logo VsCode",
                        "class"=>"cell__logo",
                        "title"=>"Logo VsCode"]
        ],
        [
                "titre" => "Vs Community",
                "description" => "Environnement de développement",
                "img" => ["src"=>"images/logos/Visual_Studio_Logo.png",
                        "alt"=>"Logo Visual Studio Community",
                        "class"=>"cell__logo cell__logo--xs",
                        "title"=>"Logo Visual Studio Community"]
        ]
];

function afficherCompetences(string $titre, array $competences): string {
    $html = '<div class="section__container">
        <div class="section__title">
            <h2 class="text--m">' . $titre . '</h2>
        </div>
        <div class="langages">';

    $index = 1;
    foreach ($competences as $competence):
        $html .= '<div class="langage__container langage__container--competence" id="langage_front_' . $index . '">
                <div class="container__header my-0">
                    <div class="container__logos container__logos--competence">'
                . img($competence["img"]) .
                '</div>
                </div>
                <div class="langage__container langage__container--center">
                    <h1 class="text--s text--800">' . $competence["titre"] . '</h1>
                    <p class="text--xs text--400 text--opacity-900">' . $competence["description"] . '</p>
                </div>
            </div>';
        $index++;
    endforeach;

    $html .= '</div>
    </div>';

    return $html;
}
?>

<!-- Section compétences -->
<section id="section__competences" class="my-5-vh py-100">
    <div class="section__container section__container--center">
        <div class="section__title" id="section__title-skills">
            <h2 class="text--m text--white">💻&nbsp;Compétences</h2>
            <p class="text--xs text--600 text--white text--opacity-900 my-2-vh">Découvrez mes compétences acquises</p>
        </div>
    </div>
    <?= afficherCompetences("🎨&nbsp;Front-end", $langagesFront) ?>
    <?= afficherCompetences("🗄️&nbsp;Back-end", $langagesBack) ?>
    <?= afficherCompetences("🏗️&nbsp;Framework & CMS", $langagesFramework) ?>
    <?= afficherCompetences("🧩&nbsp;Complémentaires", $langagesAutres) ?>
    <div class="section__container section__container--center">
        <a href="<?= base_url("/images/portefeuilledecompetense.pdf")?>" target="_blank"
           class="button button--tertiaire text--xs p-2-vh my-5-vh" title="Voir mon portefeuille de compétences - nouvelle fenêtre"><i class="fa-solid fa-table"></i>&nbsp;Portefeuille&nbsp;de&nbsp;compétences</a>
    </div>
</section>