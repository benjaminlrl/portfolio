<?php
$logo_MinistereDesArmees = ["src"=>"images/logos/Ministère_des_Armées.png",
        "alt"=>"Logo Ministère des Armées",
        "class"=>"cell__logos-logo",
        "title"=>"Logo Ministère des Armées"];
$logo_DRHAT = ["src"=>"images/logos/DRHAT.png",
        "alt"=>"Logo DRHAT",
        "class"=>"cell__logos-logo",
        "title"=>"Logo DRHAT"];
$logo_ISCB = ["src"=>"images/logos/iscb.jpg",
        "alt"=>"Logo ISCB",
        "class"=>"cell__logos-logo",
        "title"=>"Logo ISCB"];
$portrait = ["src"=>"images/portrait_illustration.png",
        "alt"=>"Illustration",
        "class"=>"cell__image cell_image--avatar",
        "title"=>"Portrait de Benjamin Lorieul"];
?>
<!-- Section accueil -->
<section id="section__home">
    <div class="section__container">
        <div class="grid my-5-vh" id="grid__home">
            <div class="grid__cell" id="home_cell_1">
                <div class="cell__header cell__content--md-end">
                    <h1 class="text--xxl text--end">Benjamin&nbsp;Lorieul</h1>
                </div>
                <div class="cell__content cell__content--md-end cell__content--gutter--xs">
                    <p class="text--l text--end text--opacity-900">Apprenti&nbsp;développeur&nbsp;web</p>
                    <p class="text--m text--end text--opacity-900">BTS&nbsp;SIO&nbsp;SLAM&nbsp;2<sup class="text--s">ème</sup>&nbsp;année</p>
                    <p class="text--xs text--end text--secondary">ISCB&nbsp;/&nbsp;Ministère&nbsp;des&nbsp;Armées&nbsp;DRHAT</p>
                    <div class="cell__logos">
                        <?= img($logo_ISCB)?>
                        <?= img($logo_MinistereDesArmees)?>
                        <?= img($logo_DRHAT)?>
                    </div>
                </div>
            </div>
            <div class="grid__cell" id="home_cell_2">
                <div class="cell__content cell__content--center">
                    <div class="cell__images cell__images--bg-blur">
                        <?= img($portrait)?>
                    </div>
                </div>
            </div>
            <div class="grid__cell grid__cell--footer grid__cell--center" id="home_cell_footer">
                <div class="cell__content cell__content--center">
                    <a href="#section__presentation" class="button button--tertiaire button--scale">
                        Me découvrir
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
