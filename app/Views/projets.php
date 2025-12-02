<?php

?>
<!-- Section projets -->
<section id="section__projets">
    <div class="section__container section__container--center my-2-rem">
        <div class="section__title g-1">
            <h2 class="text--m">🚀&nbsp;Mes&nbsp;projets</h2>
            <p class="text--xxs text--secondary">Pour en savoir plus sur un projet, cliquez sur celui-ci</p>
        </div>
    </div>
    <div class="section__container section__container--center">
        <?= form_open("", ["class" => "grid grid--xl"]); ?>
        <?= form_fieldset('Filtrer les projets', ["class" => "fieldset--row g-2 text--600 text--primary text--s"]); ?>
        <?php
        $optionsCompetences = [
                ''  => 'Aucun filtre',
                'glpi'  => 'Gérer le patrimoine informatique',
                'raieaddaed' => 'Répondre aux incidents et aux demandes d’assistance et d’évolution',
                'dlpeldl'  => 'Développer la présence en ligne de l’organisation',
                'temp' => 'Travailler en mode projet',
                'madduusi' => 'Mettre à disposition des utilisateurs un service informatique',
                'osdp' => 'Organiser son développement professionnel',
            ];
        $dataCompetences = [
                'id'=>'competence_projet',
                'name'=>'competence_projet',
                'class'=>'text--xs p-0-4-rem'

        ];
        $optionsContexte = [
                ''  => 'Aucun filtre',
                'perso'  => 'Projets personnels',
                'pro'    => 'Projets professionnels',
                'scolaire'  => 'Projets scolaires',
        ];
        $dataContexte = [
                'id'=>'contexte_projet',
                'name'=>'contexte_projet',
                'class'=>'text--xs p-0-4-rem'

        ];
        $optionsOrdre = [
                ''  => 'Aucun filtre',
                'asc'  => 'A à Z',
                'desc'    => 'Z à A',
                'recent'  => 'Récent d\'abord',
                'ancien'  => 'Ancien d\'abord',
        ];
        $dataOrdre = [
                'id'=>'ordre_projet',
                'name'=>'ordre_projet',
                'class'=>'text--xs p-0-4-rem'

        ];
        $attributesLabel = [
                "class"=>"text--xxs text--secondary text--600 mt-1-rem"
        ];?>
        <div class="input-group g-0-2">
            <?= form_label("Compétences", "competence_projet", $attributesLabel); ?>
            <?= form_dropdown($dataCompetences, $optionsCompetences, '',["placeholder"=>"Compétences"]);?>
        </div>
        <div class="input-group g-0-2">
            <?= form_label("Contexte", "contexte_projet", $attributesLabel); ?>
            <?= form_dropdown($dataContexte, $optionsContexte, '',["placeholder"=>"Contexte"]); ?>
        </div>
        <div class="input-group g-0-2">
            <?= form_label("Ordre","ordre_projet", $attributesLabel); ?>
           <?= form_dropdown($dataOrdre, $optionsOrdre, '',["placeholder"=>"Ordre"]); ?>
        </div>
        <?php echo form_fieldset_close();
        echo form_close();?>
        <div class="card grid my-5-vh" id="card__projets">
            <?php $index = 1;
            foreach ($projets as $projet) :
                ($projet["important"]===true)? $important = "projet--important": $important = ""; ?>

                <button type="button"
                        class="grid__cell grid__cell--hover <?= $important?>"
                        id="projet_cell_<?= $index ?>"
                        title="Voir mon projet"
                        onclick="afficherModal('dialog__projet_<?= $index ?>')"
                        aria-label="Voir les détails du projet <?= $projet['titre'] ?>">
                    <div class="cell__header">
                        <?= img($projet["img"]) ?>
                        <div class="cell__header--content">
                            <h3 class="text--s"> <?= $projet["titre"] ?></h3>
                        </div>
                        <?php if($index === 1): ?>
                            <p class="badge badge--recent"><i class="fa-solid fa-bolt"></i> RÉCENT</p>
                        <?php endif ?>
                        <?php if($projet["important"]===true && $index != 1):?>
                            <p class="badge badge--important"><i class="fa-solid fa-star"></i> IMPORTANT</p>
                        <?php endif ?>
                    </div>
                    <div class="cell__content cell__content--start">
                        <p class="text--xxs text--start text--opacity-900 text--500 text--secondary"> <?= $projet["description"] ?></p>
                        <p class="text--xxs text--start text--opacity-900 text--300 text--secondary">décembre 2024</p>
                        <div class="cell__logos cell__logos--start">
                            <?php foreach($projet["logoLangages"] as $lang):?>
                                <?= img($lang) ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="cell__content cell__content--footer">
                        <div class="cell__logos cell__logos--start">
                            <?= img($projet["logoContexte"]) ?>
                        </div>
                        <!-- Lien "Voir plus" séparé du button (si nécessaire) -->
                        <?php if(!empty($projet["lien"])):?>
                            <a href="<?= $projet["lien"] ?>"
                               class="button button--more text--xs"
                               target="_blank"
                               aria-label="Voir le projet <?= $projet['titre'] ?> sur le site externe">
                                Voir&nbsp;plus&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </button>



                <!-- Dialog unique pour chaque projet (ID UNIQUE) -->
                <dialog class="dialog dialog--projet p-0" id="dialog__projet_<?= $index ?>" aria-modal="true" aria-labelledby="dialog_titre_<?= $index ?>">
                        <div class="card grid grid--full">
                            <div class="grid__cell grid__cell--header">
                                <div class="cell__header">
                                    <?= img($projet["img"]) ?>
                                    <button type="button"
                                            class="button button__modal--close text--xxs"
                                            onclick="fermerModal('dialog__projet_<?= $index ?>')"
                                            aria-label="Fermer la fenêtre de détails">
                                        Fermer&nbsp;<i class="fa-solid fa-xmark"></i>
                                    </button>
                                    <div class="cell__header--content">
                                    </div>
                                </div>

                                <?php if(isset($projet["missions"])): ?>
                                    <div class="cell__content">
                                        <h4 class="text--m"><i class="fa-light fa-building-memo text--accent"></i>&nbsp;<?= $projet["titre"] ?></h4>
                                        <p class="text--xs text--secondary"><?= $projet["description_detail"] ?></p>
                                        <div class="grid grid--missions g-1" id="grid__missions">
                                            <?php foreach($projet["missions"] as $mission): ?>
                                                <div class="grid__cell p-2-1-vh">
                                                    <div class="cell__content">
                                                        <h5 class="text--s"><?= $mission["titre"]?></h5>
                                                        <?php
                                                        $list = $mission["taches"];
                                                        $attributes = ["class"=>"text--xxs text--500 g-0-4 tache"];
                                                        echo ul($list, $attributes);
                                                        ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if(!empty($projet["plus"])):?>
                            <div class="cell__content p-2-vh my-2-vh">
                                <p class="text--xs text--600 text--start text--secondary"><?= $projet["plus"] ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if(!empty($projet["lien"])):?>
                                <div class="cell__content cell__content--center p-2-vh my-2-vh">
                                    <a href="<?= $projet["lien"] ?>"
                                       class="button button--tertiaire text--xs"
                                       target="_blank">
                                        Accéder au projet&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i>
                                    </a>
                                </div>
                            <?php endif; ?>
                    </div>
                </dialog>

                <?php $index++;
            endforeach;?>
        </div>
        <button type="button" class="button button--tertiaire" id="button_plus_projets">Voir&nbsp;plus de projets</button>
    </div>
</section>

