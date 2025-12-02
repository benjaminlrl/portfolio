<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class home extends BaseController
{
    public function index():string{
        $data['titre_page'] = 'Portfolio';
        $data['langue'] = 'fr';
        $data['projets'] = [
            [
                "titre" => "RH-Terre",
                "description" => "Refonte du site RH-Terre aux normes DSFR pour le ministère des Armées.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 120 000 militaires, réservistes et familles de militaires afin de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration d'enfants&hellip;).",
                "img" => ["src"=>"images/projets/rh-terre_home.png",
                    "alt"=>"Capture d'écran du site RH-Terre",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/PHP_Logo.png",
                        "alt"=>"Logo PHP",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo PHP"],
                    ["src"=>"images/logos/JavaScript_Logo.png",
                        "alt"=>"Logo JavaScript",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo JavaScript"],
                    ["src"=>"images/logos/Joomla_Logo.png",
                        "alt"=>"Logo Joomla",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo Joomla"]
                ],
                "logoContexte" => ["src"=>"images/logos/Ministère_des_Armées.png",
                    "alt"=>"ministère des Armées",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet professionnel"],
                "lien" => "#",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Faire générer le bon code HTML par le CMS de manière à ce que le template reste maintenable et évolutif avec le DSFR.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail en équipe',
                        "taches"=>["Collaboration avec notre designer UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagner les promotions de deux nouvelles versions de RH-Terre. Mon rôle au sein du   du SI a permis aux équipes des développeurs de gagner 25% de leurs temps consacré à RH-Terre ainsi que d'alléger par 25% les signalements de nos utilisateurs. <br><br> En travaillant en mode projet, j'ai pu acquérir de nouvelles compétences sur GIT, PHP, JS, et Linux en m'adaptant aux évolutions de nos problématiques ainsi qu'aux perturbations externes.",
                "important"=> true
            ],
            [
                "titre" => "Cyber4all",
                "description" => "Ce site est un outil d'apprentissage dynamique sur la cybersécurité destiné au grand public et aux professionnels",
                "description_detail"=>"Cyber4all permets de répondre au besoin de sensibiliser les utilisateurs à la cybersécurité.<br> Vous y trouverez des quizzs pour tous les niveaux, un glossaire complet et évolutif, un espace communautaire, un classements des meilleurs contributeurs, un système de vote pour mettre en avant des termes du glossaire, des redirections vers des outils clés ainsi qu'un système d'administration.",
                "img" => ["src"=>"images/projets/cyber4all.png",
                    "alt"=>"Capture d'écran du site Cyber4all",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/PHP_Logo.png",
                        "alt"=>"Logo PHP",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo PHP"],
                    ["src"=>"images/logos/MySql_Logo.png",
                        "alt"=>"Logo MySql",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo MySql"]
                ],
                "logoContexte" => ["src"=>"images/logos/iscb.jpg",
                    "alt"=>"Logo ISCB",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet scolaire"],
                "lien" => "https://cyber4all.benjaminlorieul.fr/",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Conception de la page d'accueil, du glossaire, de l'espace communautaire et administratif",
                            "Gestion des utilisateurs",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA)",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Synchronisation des votes hebdomadaires",
                            "Créer un code maintenable et périn",
                            "Travail sur le responsive"
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail en équipe',
                        "taches"=>["Collaboration avec notre formatrice de SLAM pour la base de données et amélioration des fonctionnalités",
                            "Collaboration avec un camarade de promo (Lucien Laforêt) pour l'espace des quizzs."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Environnement',
                        "taches"=>["PHP",
                            "JS",
                            "Git",
                            "CodeIgniter 4",
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> true
            ],
            [
                "titre" => "Portfolio",
                "description" => "Portfolio développé afin de mettre en avant mes compétences.",
                "description_detail"=>"",
                "img" => ["src"=>"images/projets/portfolio_home.png",
                    "alt"=>"Capture d'écran de mon portfolio",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/PHP_Logo.png",
                        "alt"=>"Logo PHP",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo PHP"],
                    ["src"=>"images/logos/CodeIgniter_Logo.png",
                        "alt"=>"Logo CodeIgniter 4",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo CodeIgniter 4"]
                ],
                "logoContexte" => ["src"=>"images/portrait_illustration.png",
                    "alt"=>"Avatar",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet personnel"],
                "lien" => "https://github.com/benjaminlrl/portfolio",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> false
            ],
            [
                "titre" => "Plugin cron",
                "description" => "Création d'un plugin compatible Joomla pour pallier une erreur bloquante sur le site RH-Terre.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 180 000 militaires et réservistes de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration de situations...).",
                "img" => ["src"=>"images/projets/pluginMiniOrange.png",
                    "alt"=>"Capture d'écran du site RH-Terre",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/PHP_Logo.png",
                        "alt"=>"Logo PHP",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo PHP"],
                    ["src"=>"images/logos/Joomla_Logo.png",
                        "alt"=>"Logo Joomla",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo Joomla"]
                ],
                "logoContexte" => ["src"=>"images/logos/Ministère_des_Armées.png",
                    "alt"=>"Ministère des Armées",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet professionnel"],
                "lien" => "",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> false
            ],
            [
                "titre" => "Encyclopédie d'Astérix",
                "description" => "Création d'une encyclopédie intéractive en C#.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 180 000 militaires et réservistes de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration de situations...).",
                "img" => ["src"=>"images/projets/EncyclopediAsterix.png",
                    "alt"=>"Capture d'écran de l'encyclopédie d'Astérix",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/Csharp_Logo.png",
                        "alt"=>"Logo Csharp",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo Csharp"],
                    ["src"=>"images/logos/NOSQL_Logo.png",
                        "alt"=>"Logo NOSQL",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo NOSQL"]
                ],
                "logoContexte" => ["src"=>"images/logos/iscb.jpg",
                    "alt"=>"ISCB",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet scolaire"],
                "lien" => "https://github.com/benjaminlrl/Encyclopedie-Asterix",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> true
            ],
            [
                "titre" => "Phishing",
                "description" => "Création d'un site copie, à la demande de mon établissement dans une démarche de sensibilisation au phishing.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 180 000 militaires et réservistes de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration de situations...).",
                "img" => ["src"=>"images/projets/FormCBNdlr.png",
                    "alt"=>"Capture d'écran du site de phishing",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/HTML5_Logo.png",
                        "alt"=>"Logo HTML5",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo HTML5"],
                    ["src"=>"images/logos/CSS3_Logo.png",
                        "alt"=>"Logo CSS3",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo CSS3"],
                    ["src"=>"images/logos/JavaScript_Logo.png",
                        "alt"=>"Logo JavaScript",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo JavaScript"]
                ],
                "logoContexte" => ["src"=>"images/logos/iscb.jpg",
                    "alt"=>"ISCB",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet scolaire"],
                "lien" => "https://github.com/benjaminlrl/Encyclopedie-Asterix",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> false
            ],
            [
                "titre" => "Memory Game",
                "description" => "Création d'un jeu de chiffoumi en C#.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 180 000 militaires et réservistes de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration de situations...).",
                "img" => ["src"=>"images/projets/MemoryGame_Accueil.png",
                    "alt"=>"Capture d'écran de l'encyclopédie d'Astérix",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/Csharp_Logo.png",
                        "alt"=>"Logo Csharp",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo Csharp"]
                ],
                "logoContexte" => ["src"=>"images/logos/iscb.jpg",
                    "alt"=>"ISCB",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet scolaire"],
                "lien" => "https://github.com/benjaminlrl/Encyclopedie-Asterix",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> false
            ],
            [
                "titre" => "Social site",
                "description" => "TP venant d'une vidéo de Grafik'Art, visant à consolider l'apprentissage de HTML5 et CSS3.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 180 000 militaires et réservistes de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration de situations...).",
                "img" => ["src"=>"images/projets/ProjetPagedeBlogMars2024.png",
                    "alt"=>"",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/HTML5_Logo.png",
                        "alt"=>"Logo HTML5",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo HTML5"],
                    ["src"=>"images/logos/CSS3_Logo.png",
                        "alt"=>"Logo CSS3",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo CSS3"]
                ],
                "logoContexte" => ["src"=>"images/portrait_illustration.png",
                    "alt"=>"Avatar",
                    "class"=>"cell__logos-logo logo--xs",
                    "title"=>"Projet personnel"],
                "lien" => "https://www.youtube.com/@grafikart",
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> false
            ],
            [
                "titre" => "Flex site",
                "description" => "Création d'un site dans le but d'apprendre à utiliser les flexbox à la suite de mon apprentissage sur flexbox froggy.",
                "description_detail"=>"RH-Terre est le site administratif de l'armée de Terre permettant à nos 180 000 militaires et réservistes de faciliter leurs démarches administratives (permissions, demandes de Bulletin Mensuel de Solde, déclaration de situations...).",
                "img" => ["src"=>"images/projets/ProjetExceptionalCarsMai2024.png",
                    "alt"=>"",
                    "class"=>"cell__projet",
                    "title"=>""],
                "logoLangages" => [
                    ["src"=>"images/logos/HTML5_Logo.png",
                        "alt"=>"Logo HTML5",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo HTML5"],
                    ["src"=>"images/logos/CSS3_Logo.png",
                        "alt"=>"Logo CSS3",
                        "class"=>"cell__logos-langage",
                        "title"=>"Logo CSS3"]
                ],
                "logoContexte" => ["src"=>"images/portrait_illustration.png",
                    "alt"=>"Avatar",
                    "class"=>"cell__logos-logo cell__logo--xs",
                    "title"=>"Projet personnel"],
                "missions"=>[
                    "mission1"=>[
                        "titre"=>'<i class="fa-light fa-list-check text--accent"></i>&nbsp;Mon rôle',
                        "taches"=>["Prise en main du système design de l'État (DSFR).",
                            "Création d'un template compatible avec le DSFR utilisable par le CMS.",
                            "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA).",
                        ]
                    ],
                    "mission2"=>[
                        "titre"=>'<i class="fa-light fa-lightbulb-gear text--accent"></i>&nbsp;Problèmes rencontrés',
                        "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique.",
                            "Générer le bon code HTML par le CMS sans surcouche CSS de manière à ce que le template reste maintenable.",
                            "Adapter les composants créer par les développeurs au DSFR."
                        ]
                    ],
                    "mission3"=>[
                        "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                        "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre.",
                            "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR."
                        ]
                    ],
                    "mission4"=>[
                        "titre"=>'<i class="fa-light fa-code text--accent"></i>&nbsp;Langages',
                        "taches"=>["PHP",
                            "JS",
                            "Git"
                        ]
                    ]
                ],
                "competences" => [
                    "competence1"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Gérer le patrimoine informatique',
                        "taches"=>[
                            "Recenser et identifier les ressources numériques",
                            "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                            "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                            "Vérifier les conditions de la continuité d’un service informatique",
                            "Gérer des sauvegardes"
                        ]
                    ],
                    "competence2"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Répondre aux incidents et aux demandes d’assistance et d’évolution',
                        "taches"=>[
                            "Collecter, suivre et orienter des demandes",
                            "Traiter des demandes concernant les applications"
                        ]
                    ],
                    "competence3"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Développer la présence en ligne de l’organisation',
                        "taches"=>[
                            "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                            "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                            "Participer à l’évolution d’un site Web exploitant les données de l’organisation."
                        ]
                    ],
                    "competence4"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Travailler en mode projet',
                        "taches"=>[
                            "Analyser les objectifs et les modalités d’organisation d’un projet",
                            "Planifier les activités",
                            "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                        ]
                    ],
                    "competence5"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Mettre à disposition des utilisateurs un service informatique',
                        "taches"=>[
                            "Réaliser les tests d’intégration et d’acceptation d’un service",
                            "Déployer un service",
                            "Accompagner les utilisateurs dans la mise en place d’un service"
                        ]
                    ],
                    "competence6"=>[
                        "titre"=>'<i class="fa-light fa-tag text--accent"></i>&nbsp;Organiser son développement professionnel',
                        "taches"=>[
                            "Mettre en place son environnement d’apprentissage personnel",
                            "Mettre en œuvre des outils et stratégies de veille informationnelle",
                            "Développer son projet professionnel"
                        ]
                    ]
                ],
                "plus"=>"Durant ce projet, j'ai pu accompagné la promotion d'une nouvelle version de RH-Terre. Mon rôle clé au sein du bon fonctionnement du SI a permis aux équipes des développeurs de gagner du temps ainsi que d'alléger par 30 les signalements de nos 180k utilisateurs. <br><br> En travaillant en mode projet j'ai pu tout du long suivre le bon développement de notre site et acquérir des compétences sur GIT, PHP, JS, et Linux en m'adaptant de manière efficace au évolution et perturbations externes.",
                "important"=> false
            ]
        ];
        $data['certifications'] = [
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
        $data['competencesPro'] = [
            "competencesPro" => [
                "competence1"=>[
                    "titre"=>'<i class="fa-light fa-tag text--accent"></i>Gérer le patrimoine informatique',
                    "taches"=>[
                        "Recenser et identifier les ressources numériques",
                        "Mettre en place et vérifier les niveaux d’habilitation associés à un service",
                        "Exploiter des référentiels, normes et standards adoptés par le prestataire informatique",
                        "Vérifier les conditions de la continuité d’un service informatique",
                        "Gérer des sauvegardes"
                    ]
                ],
                "competence2"=>[
                    "titre"=>'<i class="fa-light fa-tag text--accent"></i>Répondre aux incidents et aux demandes d’assistance et d’évolution',
                    "taches"=>[
                        "Collecter, suivre et orienter des demandes",
                        "Traiter des demandes concernant les applications"
                    ]
                ],
                "competence3"=>[
                    "titre"=>'<i class="fa-light fa-tag text--accent"></i>Développer la présence en ligne de l’organisation',
                    "taches"=>[
                        "Participer à la valorisation de l’image de l’organisation sur les médias numériques en tenant compte du cadre juridique et des enjeux économiques",
                        "Référencer les services en ligne de l’organisation et mesurer leur visibilité",
                        "Participer à l’évolution d’un site Web exploitant les données de l’organisation"
                    ]
                ],
                "competence4"=>[
                    "titre"=>'<i class="fa-light fa-tag text--accent"></i>Travailler en mode projet',
                    "taches"=>[
                        "Analyser les objectifs et les modalités d’organisation d’un projet",
                        "Planifier les activités",
                        "Évaluer les indicateurs de suivi d’un projet et analyser les écarts"
                    ]
                ],
                "competence5"=>[
                    "titre"=>'<i class="fa-light fa-tag text--accent"></i>Mettre à disposition des utilisateurs un service informatique',
                    "taches"=>[
                        "Réaliser les tests d’intégration et d’acceptation d’un service",
                        "Déployer un service",
                        "Accompagner les utilisateurs dans la mise en place d’un service"
                    ]
                ],
                "competence6"=>[
                    "titre"=>'<i class="fa-light fa-tag text--accent"></i>Organiser son développement professionnel',
                    "taches"=>[
                        "Mettre en place son environnement d’apprentissage personnel",
                        "Mettre en œuvre des outils et stratégies de veille informationnelle",
                        "Développer son projet professionnel"
                    ]
                ]
            ]
        ];
        $data['langagesFront'] = [
            [
                "titre" => "HTML 5",
                "description" => "Conception de page web",
                "img" => ["src"=>"images/logos/HTML5_Logo.png",
                    "alt"=>"Logo HTML5",
                    "class"=>"tile__logo",
                    "title"=>"Logo HTML5"]
            ],
            [
                "titre" => "CSS 3",
                "description" => "Stylisation de page web",
                "img" => ["src"=>"images/logos/CSS3_Logo.png",
                    "alt"=>"Logo CSS3",
                    "class"=>"tile__logo",
                    "title"=>"Logo CCS3"]
            ],
            [
                "titre" => "JavaScript",
                "description" => "Langage de programmation de scripts",
                "img" => ["src"=>"images/logos/JavaScript_Logo.png",
                    "alt"=>"Logo JavaScript",
                    "class"=>"tile__logo",
                    "title"=>"Logo JavaScript"]
            ]
        ];
        $data['langagesBack'] = [
            [
                "titre" => "PHP",
                "description" => "Langage de programmation libre",
                "img" => ["src"=>"images/logos/PHP_Logo.png",
                    "alt"=>"Logo PHP",
                    "class"=>"tile__logo",
                    "title"=>"Logo PHP"]
            ],
            [
                "titre" => "C#",
                "description" => "Conception de langage informatique",
                "img" => ["src"=>"images/logos/Csharp_Logo.png",
                    "alt"=>"Logo Csharp",
                    "class"=>"tile__logo",
                    "title"=>"Logo Csharp"]
            ],
            [
                "titre" => "MySql",
                "description" => "Langage de programmation libre",
                "img" => ["src"=>"images/logos/MySql_Logo.png",
                    "alt"=>"Logo MySql",
                    "class"=>"tile__logo",
                    "title"=>"Logo MySql"]
            ]
        ];
        $data['langagesFramework'] = [
            [
                "titre" => "CodeIgniter 4",
                "description" => "Framework PHP MVC",
                "img" => ["src"=>"images/logos/CodeIgniter_Logo.png",
                    "alt"=>"Logo CodeIgniter",
                    "class"=>"tile__logo",
                    "title"=>"Logo CodeIgniter"]
            ],
            [
                "titre" => "Joomla",
                "description" => "Système de gestion de contenu",
                "img" => ["src"=>"images/logos/Joomla_Logo.png",
                    "alt"=>"Logo Joomla",
                    "class"=>"tile__logo",
                    "title"=>"Logo Joomla"]
            ]
        ];
        $data['langagesAutres'] = [
            [
                "titre" => "Linux",
                "description" => "Système d'exploitation open source",
                "img" => ["src"=>"images/logos/Linux_Logo.png",
                    "alt"=>"Logo Linux",
                    "class"=>"tile__logo",
                    "title"=>"Logo Linux"]
            ],
            [
                "titre" => "Git",
                "description" => "Logiciel de gestion de versions décentralisé",
                "img" => ["src"=>"images/logos/Git_Logo.png",
                    "alt"=>"Logo Git",
                    "class"=>"tile__logo",
                    "title"=>"Logo Git"]
            ],
            [
                "titre" => "PHP Storm",
                "description" => "Environnement de développement",
                "img" => ["src"=>"images/logos/Phpstorm_Logo.svg",
                    "alt"=>"Logo PHP Storm Jetbrain",
                    "class"=>"tile__logo",
                    "title"=>"Logo PHP Storm Jetbrain"]
            ],
            [
                "titre" => "Virtual Box",
                "description" => "Logiciel de virtualisation",
                "img" => ["src"=>"images/logos/VirtualBox_Logo.png",
                    "alt"=>"Logo Virtual Box",
                    "class"=>"tile__logo",
                    "title"=>"Logo Virtual Box"]
            ],
            [
                "titre" => "PhpMyAdmin",
                "description" => "Système de gestion de bases de données",
                "img" => ["src"=>"images/logos/PhpMyAdmin_Logo.png",
                    "alt"=>"Logo PhpMyAdmin",
                    "class"=>"tile__logo",
                    "title"=>"Logo PhpMyAdmin"]
            ],
            [
                "titre" => "Vs Code",
                "description" => "Environnement de développement",
                "img" => ["src"=>"images/logos/VsCode_Logo.png",
                    "alt"=>"Logo VsCode",
                    "class"=>"tile__logo",
                    "title"=>"Logo VsCode"]
            ],
            [
                "titre" => "Vs Community",
                "description" => "Environnement de développement",
                "img" => ["src"=>"images/logos/Visual_Studio_Logo.png",
                    "alt"=>"Logo Visual Studio Community",
                    "class"=>"tile__logo tile__logo--xs",
                    "title"=>"Logo Visual Studio Community"]
            ]
        ];
        $data['langues'] = [
            [
                "langue" => "France",
                "niveau" => "C2",
                "image" => "images/logos/France_Flag.png"
            ],
            [
                "langue" => "Anglais",
                "niveau" => "B1+",
                "image" => "images/logos/English_Flag.jpg"
            ],
            [
                "langue" => "Espagnol",
                "niveau" => "A2+",
                "image" => "images/logos/Spain_Flag.jpg"
            ]
        ];
        $data['entreprise'] = [
            "titre" => "Ministères des Armées et des anciens Combattants /&nbsp;DRHAT",
            "missions"=>[
                "mission1"=>[
                    "titre"=>'<i class="fa-light fa-laptop text--accent"></i>&nbsp;Refonte du site RH-Terre',
                    "taches"=>["Prise en main du système design de l'État (DSFR)",
                        "Travail sur l'accessibilité afin que le site soit utilisable par tous (RGAA)",
                        "Création d'un template compatible avec le DSFR utilisable par le CMS",
                    ]
                ],
                "mission2"=>[
                    "titre"=>'<i class="fa-light fa-shield-check text--accent"></i>&nbsp;Sécurité',
                    "taches"=>["Création d'un plugin CRON afin de pallier une erreur critique",
                        "Gestion des droits utilisateurs en fonction des groupes attribués"
                    ]
                ],
                "mission3"=>[
                    "titre"=>'<i class="fa-light fa-users text--accent"></i>&nbsp;Travail d\'équipe',
                    "taches"=>["Collaboration avec notre designeuse UX/UI pour l'interface du site RH-Terre",
                        "Collaboration avec l'équipe des développeurs afin de rendre compatible leurs travaux avec le DSFR"
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
        ];
        $data['formations'] = [
            ['etablissementLogo' => 'iscb.jpg',
                'diplome' => 'BTS SIO - En cours',
                'annee' => '2024 - 2026',
                'description' => 'Services Informatiques aux Organisations option Solutions Logicielles et Applications Métiers (<strong>SLAM</strong>) et <strong>Maths 2</strong> réaliser en alternance.',
                'entrepriseLogo' => 'Ministère_des_Armées.png',
                'lien' => 'https://www.iscb.fr/',
                'entrepriseLien' => 'https://www.defense.gouv.fr/'
            ],
            ['etablissementLogo' => 'LEGTA_Logo.png',
                'diplome' => 'BAC GENERAL',
                'annee' => '2021 - 2024',
                'description' => 'Bac général mention <strong>ASSEZ BIEN</strong> option <strong>mathématiques</strong> et <strong>biologie/écologie</strong> au lycée agricole de Fondettes.',
                'lien' => 'https://www.tours-fondettes-agrocampus.fr/',
                'entrepriseLien' => ''
            ]
        ];
        $data['veilles'] = [
            [
                "titre" => "Micode",
                "description" => "Créateur de contenu sur la tech",
                "img" => ["src"=>"images/logos/micode.jpeg",
                    "alt"=>"pp micode",
                    "class"=>"tile__logo",
                    "title"=>"Logo youtube"],
                "lien" => "https://www.youtube.com/channel/UCYnvxJ-PKiGXo_tYXpWAC-w",
            ],

            [
                "titre" => "_Underscore",
                "description" => "Concepts et culture dev",
                "img" => ["src"=>"images/logos/_underscore.jpg",
                    "alt"=>"pp underscore",
                    "class"=>"tile__logo",
                    "title"=>"Logo youtube"],
                "lien" => "https://www.youtube.com/@Underscore_",
            ],
            [
                "titre" => "Benjamin Code",
                "description" => "Tips web dev",
                "img" => ["src"=>"images/logos/benjamincode.jpg",
                    "alt"=>"pp micode",
                    "class"=>"tile__logo",
                    "title"=>"Logo youtube"],
                "lien" => "https://www.youtube.com/c/BenjaminCode",
            ],
            [
                "titre" => "Php Docs",
                "description" => "Documentation officielle de php",
                "img" => ["src"=>"images/logos/PHP_Logo.png",
                    "alt"=>"Logo Php",
                    "class"=>"tile__logo",
                    "title"=>"Logo youtube"],
                "lien" => "https://www.php.net/docs.php",
            ],
            [
                "titre" => "MDN Web Docs",
                "description" => "Documentation officielle Mozilla",
                "img" => ["src"=>"images/logos/mdn_Logo.webp",
                    "alt"=>"pp micode",
                    "class"=>"tile__logo",
                    "title"=>"Logo youtube"],
                "lien" => "https://developer.mozilla.org/fr/",
            ],
        ];
        return view('head',$data).
            view('header').
            view('home').
            view('presentation').
            view('formations').
            view('entreprise').
            view('devenir').
            view('competences').
            view('projets').
            view('certifications').
            view('langues').
            view('veille').
            view('contact').
            view('footer')
            ;
    }

    public function portefeuilleDeCompetences():string{
        $data['titre_page'] = 'Portefeuille de competences';
        $data['langue'] = 'fr';

        return view('head',$data)
            . view('header')
            . view('portefeuille_de_competences')
            . view('contact')
            . view('footer');
    }
}