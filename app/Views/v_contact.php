<!-- Section contact -->
<section class="py-100" id="section__contact">
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
                                <label for="input__name" class="text--xxs text--white">Nom et Prénom</label>
                                <input type="text" id="input__name" placeholder="Nom prénom" required>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_3">
                        <div class="cell__content">
                            <fieldset>
                                <label for="input__email" class="text--xxs text--white">Adresse email</label>
                                <input type="email" id="input__email" placeholder="exmple@domaine.fr" required>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_4">
                        <div class="cell__content">
                            <fieldset>
                                <label for="input__sujet" class="text--xxs text--white">Sujet</label>
                                <input type="text" id="input__sujet" placeholder="Sujet de votre message" required>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_5">
                        <div class="cell__content">
                            <fieldset>
                                <label for="input__message" class="text--xxs text--white">Votre message</label>
                                <textarea id="input__message" placeholder="Votre message" required></textarea>
                            </fieldset>
                        </div>
                    </div>
                    <div class="grid__cell" id="form__contact__cell_6">
                        <div class="cell__content cell__content--container cell__content--center">
                            <button type="button" class="button button--secondary button--fit text--xs" aria-controls="dialog__contact" disabled><i class="fa-solid fa-paper-plane"></i> Envoyer</button>
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
               id="contact__cell_4" class="button button--tertiaire text--xs p-2-5-vh" title="Voir mon portefeuille de compétences - nouvelle fenêtre"><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;Mon CV
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