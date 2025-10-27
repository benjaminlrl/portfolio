<!-- Section contact -->
<section id="section__contact">
    <div class="section__container section__container--center">
        <div class="section__title my-5-vh">
            <h2 class="text--m text--white">📧&nbsp;Contact</h2>
            <p class="text--xs text--600 text--white text--center text--opacity-900 my-2-vh">Entrons en contact pour toutes demandes</p>
        </div>
    </div>
    <div class="section__container section__container--center">
        <div class="grid grid--xl g-2" id="grid__contact">
            <div class="grid__cell grid__cell--contact" id="contact__cell_1">
                <form action="#" method="POST" class="grid grid__cell--center" id="form__contact">
                    <div class="grid__cell" id="form__contact__cell_1">
                        <div class="cell__content cell__content--row">
                            <h1 class="text--start text--m text--white"><i class="fa-solid fa-messages"></i> Envoyez moi un message</h1>
                        </div>
                    </div>
                    
                    <div class="grid__cell grid__cell--start" id="form__contact__cell_2">
                        <div class="cell__content">
                            <fieldset>
                                <?= form_label('Nom er Prénom', 'input_contact-name',
                                        ['for'=>'input_contact-name',
                                                'class' => 'text--xxs text--white']); ?>
                                <?= form_input([
                                        'type'=>'text',
                                        'name' => 'name',
                                        'id' => 'input_contact-name',
                                        'placeholder' => 'Nom Prénom',
                                        'value' => set_value('name'),
                                        'required' => true]); ?>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_3">
                        <div class="cell__content">
                            <fieldset>
                                <?= form_label('Adresse email', 'input_contact-email',
                                        ['for'=>'input_contact-email',
                                                'class' => 'text--xxs text--white']); ?>
                                <?= form_input([
                                        'type'=>'email',
                                        'name' => 'email',
                                        'id' => 'input_contact-email',
                                        'placeholder' => 'exmple@domaine.fr',
                                        'value' => set_value('email'),
                                        'required' => true]); ?>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_4">
                        <div class="cell__content">
                            <fieldset>
                                <?= form_label('Sujet', 'input_contact-sujet',
                                        ['for'=>'input_contact-sujet',
                                        'class' => 'text--xxs text--white']); ?>
                                <?= form_input(['name' => 'sujet',
                                        'id' => 'input_contact-sujet',
                                        'placeholder' => 'Sujet de votre message',
                                        'value' => set_value('sujet'),
                                        'required' => true]); ?>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_5">
                        <div class="cell__content">
                            <fieldset>
                                <?= form_label('Message', 'input_contact-message',
                                        ['for'=>'input_contact-message',
                                                'class' => 'text--xxs text--white']); ?>
                                <?= form_textarea(['name' => 'message',
                                        'id' => 'input_contact-message',
                                        'placeholder' => 'Votre message',
                                        'value' => set_value('message'),
                                        'rows' => 5,
                                        'required' => true]); ?>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_6">
                        <div class="cell__content cell__content--container cell__content--center">
                            <?= form_button([
                                    'name' => 'consent',
                                    'id' => 'consent-button',
                                    'type' => 'submit',
                                    'class' => 'button button--secondary button--fit text--xs',
                                    'content' => '<i class="fa-solid fa-paper-plane"></i> Envoyer',
                                    'disabled' => 'disabled',
                                    'aria-controls' => 'dialog__contact'
                            ]); ?>
                        </div>
                    </div>
                </form>
            </div>
            <div class="grid__cell grid__cell--contact g-1" id="contact__cell_2">
                <div class="cell__header">
                    <h2 class="text--s  text--white">Suivez-moi</h2>
                </div>
                <div class="cell_content cell__logos--start cell__content--gutter--xs">
                    <a href="#" class="item--social text--m text--white"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="item--social text--m text--white"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
            <div class="grid__cell grid__cell--contact g-1" id="contact__cell_3">
                <div class="cell__header">
                    <span class="valide"></span>
                    <h5 class="text--xs text--600 text--white text--start">Recherche&nbsp;d'alternance&nbsp;3&nbsp;ans - Septembre&nbsp;2026</h5>
                </div>
                <div class="cell_content cell__content--row">
                    <p class="text--xxs text--400 text--white">Je réponds généralement dans l'heure. N'hésitez pas à laisser un message pour discuter d'opportunités.</p>
                </div>
            </div>
            <a href="<?= base_url("/images/portefeuilledecompetense.pdf")?>" target="_blank"
               id="contact__cell_4" class="button button--contact text--xs p-2-5-vh" title="Voir mon portefeuille de compétences - nouvelle fenêtre"><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;Mon CV
            </a>
        </div>
        
    </div>
</section>
<!--  dialog demandant le consentement de l'utilistaeur avant soumissions du formulaire  -->
<dialog class="dialog" id="dialog__contact" aria-modal="true">
    <div class="grid" id="grid__dialog">
        <div class="grid__cell">
            <div class="cell__content cell__content--end">
                <button type="button" class="button button--close text--xxs">Fermer <i class="fa-solid fa-xmark-large"></i></button>
            </div>
        </div>
        <div class="grid__cell">
            <div class="cell__content cell__content--center">
                <fieldset class="fieldset--row fieldset--center">
                    <input type="checkbox" value="oui" name="consentement" id="dialog__consentement" required>
                    <label for="dialog__consentement" class="text--s text--white">J'accepte que seulement mon adresse email soit récoltée dans le but de recevoir une réponses</label>
                </fieldset>
            </div>
        </div>
        <div class="grid__cell">
                <div class="cell__content cell__content--center">
                <button type="button" class="button button--secondary button--disable text--xs" aria-controls="dialog__contact" id="dialog__submit" disabled><i class="fa-solid fa-paper-plane"></i> Envoyer</button>
            </div>
        </div>
    </div>
</dialog>