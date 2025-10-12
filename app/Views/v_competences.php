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
?>


<section id="section__competences">
    <div class="section__container section__container--center">
        <div class="section__title" id="section__title-skills">
            <h2 class="text--m">💻&nbsp;Compétences</h2>
        </div>
    </div>
    <div class="section__container p-0">
        <div class="section__title">
            <h2 class="text--m">🎨&nbsp;Front-end</h2>
        </div>
        <div class="langages" id="langages_1">
            <?php $index = 1;
            foreach ($langagesFront as $langage): ?>
            <div class="langage__container langage__container--competence" id="langage_front_<?= $index ?>">
                <div class="container__header my-0">
                    <div class="container__logos container__logos--competence">
                        <?= img($langage['img']) ?>
                    </div>
                </div>
                <div class="langage__container langage__container--center">
                    <h1 class="text--s text--800"><?= $langage['titre'] ?></h1>
                    <p class="text--xs text--400 text--opacity-900"><?= $langage['description'] ?></p>
                </div>
            </div>
            <?php $index++;
            endforeach; ?>
        </div>
    </div>

    <div class="section__container p-0">
        <div class="section__title">
            <h2 class="text--m">🗄️&nbsp;Back-end</h2>
        </div>
        <div class="langages" id="langages_2">
            <?php $index = 1;
            foreach ($langagesBack as $langage): ?>
                <div class="langage__container langage__container--competence" id="langage_front_<?= $index ?>">
                    <div class="container__header my-0">
                        <div class="container__logos container__logos--competence">
                            <?= img($langage['img']) ?>
                        </div>
                    </div>
                    <div class="langage__container langage__container--center">
                        <h1 class="text--s text--800"><?= $langage['titre'] ?></h1>
                        <p class="text--xs text--400 text--opacity-900"><?= $langage['description'] ?></p>
                    </div>
                </div>
                <?php $index++;
            endforeach; ?>
        </div>
    </div>
</section>