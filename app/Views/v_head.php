<!-- HEAD -->
<!DOCTYPE html>
<html lang="fr" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le portfolio de Benjamin Lorieul, apprenti développeur web, en alternance pour le ministère des Armées, étudiant au CFA ISCB.">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <!-- Font: Poppins Zen Dots-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Share+Tech+Mono&family=Zen+Dots&display=swap" rel="stylesheet">
    <?= link_tag(base_url('/assets/css/style.css')) ?>
    <script src="<?= base_url('/assets/js/header.js')?>" defer></script>
    <link rel="icon" href="<?= base_url('/images/portrait_illustration.png')?>" type="image/x-icon">
    <title><?= isset($titre_page)? $titre_page:''; ?></title>
</head>
<body id="top">
<a href="#top" class="button button--to-top" id="button_to_top" title="Remontez en haut de la page"><i class="fa-solid fa-arrow-up text--m"></i></a>