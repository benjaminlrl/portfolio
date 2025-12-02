<?php if (!isset($utilisateur)):?>
    <section id="section__connection">
        <div class="section__container section__container--center">
            <?php $formConnection = ['class' => 'form-connexion', 'id' => 'form-connexion'];
            echo form_open('',$formConnection);?>
            <h1>Ajouter un nouvel utilisateur</h1>
            <div class="input-wrapper">
                <?= form_label('Identifiant', 'label_new-name',
                    ['for' => 'new-identifiant',
                        'class' => 'text--xxs text--white text--600 text--secondary p-0-4-rem']); ?>
                <div class="input-container">
                    <?php
                    $attributs_user = [
                        'type'=>'text',
                        'placeholder'=>'Votre identifiant',
                        'name'=>'new-identifiant',
                        'id'=>'new-identifiant',
                        'oninvalid'=>"this.setCustomValidity('Saisir votre identifiant')",
                        'onchange'=>"this.setCustomValidity('')",
                        'title'=>"Saisir votre identifiant",
                        'required'=>'required'
                    ];
                    echo form_input($attributs_user);?>
                    <i class='fa-solid fa-user input-icon'></i>
                </div>
                <small class="champIndication">Entre 3 et 13 caractères
                </small>
            </div>

            <div class="input-wrapper">
                <?= form_label('Email', 'label_new-email',
                    ['for' => 'new-email',
                        'class' => 'text--xxs text--white text--600 text--secondary p-0-4-rem']); ?>
                <div class="input-container">
                    <?php
                    $attributs_email = [
                        'type'=>'text',
                        'placeholder'=>'Votre email',
                        'name'=>'new-email',
                        'id'=>'new-email',
                        'oninvalid'=>"this.setCustomValidity('Saisir votre identifiant')",
                        'onchange'=>"this.setCustomValidity('')",
                        'title'=>"Saisir votre identifiant",
                        'required'=>'required'
                    ];
                    echo form_input($attributs_email);?>
                    <i class='fa-solid fa-user input-icon'></i>
                </div>
                <small class="champIndication">Entre 3 et 13 caractères
                </small>
            </div>

            <div class="input-wrapper">
                <?= form_label('Mot de passe', 'input_contact-name',
                    ['for' => 'password',
                        'class' => 'text--xxs text--white text--600 text--secondary p-0-4-rem']); ?>
                <div class="input-container">
                    <?php
                    $attributs_mdp = [
                        'type' => 'password',
                        'name'=>'new-password',
                        'id'=>'new-password',
                        'placeholder' => 'Votre mot de passe',
                        'pattern' => '^(?=.*[A-Z])(?=.*[0-9])(?=.*[\?!*@=%$£\[\]+\/\\\.&]).{13,255}$',
                        'min' => '13',
                        'title' => 'Saisir le mot de passe',
                        'oninvalid' => "this.setCustomValidity('Le mot de passe doit contenir au minimum 13 caractères')",
                        'onchange' => "this.setCustomValidity('')",
                        'required' => 'required'
                    ];
                    echo form_input($attributs_mdp);?>

                    <?php
                    $attributs_mdp_toggle = [
                        'type'=>'button',
                        'class'=>'input-icon input-icon--password-toggle',
                        'id'=>'togglePassword',
                        'title'=>'Afficher/Masquer le mot de passe'
                    ];
                    echo form_button($attributs_mdp_toggle,"<i class='fa-solid fa-eye'></i>");
                    ?>
                </div>
                <small class="champIndication">Minimum 13 caractères
                </small>
            </div>
            <div class="input-wrapper">
                <?= form_label('Confirmer le mot de passe ', 'input_contact-password-wheck',
                    ['for' => 'check-password',
                        'class' => 'text--xxs text--white text--600 text--secondary p-0-4-rem']); ?>
                <div class="input-container">
                    <?php
                    $attributs_mdp_check = [
                        'type' => 'password',
                        'name'=>'check-password',
                        'id'=>'check-password',
                        'placeholder' => 'Confirmer votre mot de passe',
                        'pattern' => '^(?=.*[A-Z])(?=.*[0-9])(?=.*[\?!*@=%$£\[\]+\/\\\.&]).{13,255}$',
                        'min' => '13',
                        'title' => 'Confirmer le mot de passe',
                        'oninvalid' => "this.setCustomValidity('Le mot de passe doit contenir au minimum 13 caractères')",
                        'onchange' => "this.setCustomValidity('')",
                        'required' => 'required'
                    ];
                    echo form_input($attributs_mdp_check);?>

                    <?php
                    $attributs_mdp_toggle = [
                        'type'=>'button',
                        'class'=>'input-icon input-icon--password-toggle',
                        'id'=>'togglePassword',
                        'title'=>'Afficher/Masquer le mot de passe'
                    ];
                    ?>
                </div>
            </div>
            <?php // Générer un token unique pour ce formulaire
            $token = uniqid('connexion_', true);
            $_SESSION['connexion_tokens'][] = $token;?>
            <input type="hidden" name="connexion_token" value="<?= $token //pour ne pas ressoumettre le
            // formulaire au refresh de la page?>">

            <?php
            $attributs_mdp_toggle = [
                'type'=>'submit',
                'class'=>'button button--tertiaire text--xs my-5-vh:',
                'title'=>'Afficher/Masquer le mot de passe'
            ];
            echo form_button($attributs_mdp_toggle,"Ajouter l'utilisateur");
            echo form_close();?>
        </div>
    </section>
<?php endif; ?>
<script>
    // Fonction pour basculer l'affichage du mot de passe
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('mdp');
        const toggleButton = document.getElementById('togglePassword');
        const toggleIcon = toggleButton.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.className = 'fa-solid fa-eye-slash';
            toggleButton.classList.add('visible');
            toggleButton.title = 'Masquer le mot de passe';
        } else {
            passwordInput.type = 'password';
            toggleIcon.className = 'fa-solid fa-eye';
            toggleButton.classList.remove('visible');
            toggleButton.title = 'Afficher le mot de passe';
        }
    }

    // Événement pour le bouton de basculement
    document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);

    // Raccourci clavier pour basculer l'affichage (Ctrl + Alt + P)
    document.addEventListener('keydown', function(e) {
        if (e.ctrlKey && e.altKey && e.key === 'p') {
            e.preventDefault();
            togglePasswordVisibility();
        }
    });

    // Animation au focus des inputs
    const inputs = document.querySelectorAll('.input-box-connexion');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });

        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
</script>
