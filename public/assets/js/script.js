document.addEventListener("DOMContentLoaded", () => {
    afficherElement("header__btn--hamburger","header__responsive");
    afficherElement("header__language-toggle","header__language-dropdown");
    //afficherModal("dialog__contact");
    afficherModalContact();
    changerTheme("header__btn--theme-toggle");
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.dataset.theme = savedTheme;
});

window.addEventListener('scroll', function() {
    afficherBoutonTop();
});

/**
 * afficherElement permet d'attribuer de la visibilité du menu avec le bouton hamburger.
 *
 * @param {string} idBtn id du bouton qui déclenche l'affichage du menu
 * @param {string} idMenu id du menu
 * @author Benjamin Lorieul
 * @since 1.0.0
 */
function afficherElement(idBtn, idMenu) {
    const boutonMenu = document.getElementById(idBtn);
    const menu = document.getElementById(idMenu);
    boutonMenu.addEventListener("click", () => {
        menu.classList.toggle("visible");
    })
    // Fermer en cliquant ailleurs
    document.addEventListener("click", (e) => {
        // Si le clic n'est ni sur le bouton ni dans le menu
        if (!boutonMenu.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.remove("visible");
        }
    });
}


/**
 * changerTheme permet de changer le thème d'affichage du site
 * en modifiant l'attribut data-theme de la balise html.
 * Modifie également l'icone du bouton de gestion du thème
 * @param idBtn
 */
function changerTheme(idBtn) {
    const boutonTheme = document.getElementById(idBtn);
    const iconTheme = boutonTheme.querySelector('i');

    // Initialiser le thème et l'icône selon l'état actuel
    const initialiserTheme = () => {
        const themeActuel = document.documentElement.dataset.theme || 'light';
        if (themeActuel === 'dark') {
            iconTheme.className = 'fa-solid fa-sun-bright';
        } else {
            iconTheme.className = 'fa-solid fa-moon';
        }
    };

    // Initialiser au chargement
    initialiserTheme();

    boutonTheme.addEventListener('click', function () {
        const themeActuel = document.documentElement.dataset.theme || 'light';

        if (themeActuel === "light") {
            document.documentElement.dataset.theme = "dark";
            iconTheme.classList.replace('fa-moon', 'fa-sun-bright');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.dataset.theme = "light";
            iconTheme.classList.replace('fa-sun-bright', 'fa-moon');
            localStorage.setItem('theme', 'light');
        }
    });
}


/**
 * afficherBoutonTop gère l'affichage du bouton de retour en haut de page.
 *
 * @author Benjamin Lorieul
 * @since 1.0.0
 */
function afficherBoutonTop(){
    const bouton = document.getElementById("button_to_top");

    // Calcule 120% de la hauteur de l'écran
    const seuilScroll = window.innerHeight;

    // Position actuelle du scroll
    const scrollActuel = window.scrollY;

    // Affiche/cache le bouton
    scrollActuel >= seuilScroll ?
        bouton.classList.add("visible") :
        bouton.classList.remove("visible");
}


/// Système de chargement progressif des projets
document.addEventListener('DOMContentLoaded', function() {
    const cardProjets = document.getElementById('card__projets');
    const btnVoirPlus = document.getElementById('button_plus_projets');
    const projets = cardProjets.querySelectorAll('[id^="projet_cell_"]');

    let currentState = 'initial'; // initial, intermediate, all

    // Configuration responsive
    function getDisplayConfig() {
        const width = window.innerWidth;

        if (width < 900) {
            // Mobile : affichage par 2 projets
            return {
                initial: 2,
                increment: 2,
                type: 'items'
            };
        } else if (width < 1160) {
            // Tablette : affichage par ligne (2 projets par ligne)
            return {
                initial: 3,  // 2 lignes = 4 projets
                increment: 3, // +1 ligne = 2 projets
                type: 'rows'
            };
        } else {
            // Desktop : affichage par ligne (3 projets par ligne)
            return {
                initial: 4,  // 2 lignes = 6 projets
                increment: 4, // +1 ligne = 3 projets
                type: 'rows'
            };
        }
    }

    // Initialiser l'affichage
    function initDisplay() {
        const config = getDisplayConfig();
        currentState = 'initial';

        // Cacher tous les projets
        projets.forEach((projet, index) => {
            if (index < config.initial) {
                projet.style.display = 'flex';
                projet.classList.add('visible');
            } else {
                projet.style.display = 'none';
                projet.classList.remove('visible');
            }
        });

        // Mettre à jour le bouton
        updateButton();
    }

    // Mettre à jour le texte du bouton
    function updateButton() {
        const visibleCount = document.querySelectorAll('#card__projets .grid__cell.visible').length;

        if (currentState === 'initial') {
            btnVoirPlus.innerHTML = 'Voir&nbsp;plus';
        } else if (currentState === 'intermediate') {
            btnVoirPlus.innerHTML = 'Voir&nbsp;tous&nbsp;les&nbsp;projets';
        } else if (currentState === 'all') {
            btnVoirPlus.innerHTML = 'Cacher&nbsp;les&nbsp;projets';
        }

        // Afficher le bouton seulement s'il y a des projets cachés ou si tous sont visibles
        if (visibleCount >= projets.length && currentState !== 'all') {
            btnVoirPlus.style.display = 'none';
        } else {
            btnVoirPlus.style.display = 'inline-block';
        }
    }

    // Afficher plus de projets
    function showMore() {
        const config = getDisplayConfig();
        const visibleProjets = document.querySelectorAll('#card__projets .grid__cell.visible');
        const visibleCount = visibleProjets.length;

        if (currentState === 'initial') {
            // Première étape : afficher les projets suivants
            let toShow = config.increment;
            let shown = 0;

            projets.forEach((projet, index) => {
                if (index >= visibleCount && index < visibleCount + toShow) {
                    projet.style.display = 'flex';
                    projet.classList.add('visible');
                    shown++;
                }
            });

            currentState = 'intermediate';
            updateButton();
        } else if (currentState === 'intermediate') {
            // Deuxième étape : afficher TOUS les projets restants
            let shown = 0;
            projets.forEach((projet, index) => {
                if (index >= visibleCount) {
                    projet.style.display = 'flex';
                    projet.classList.add('visible');
                    shown++;
                }
            });

            currentState = 'all';
            updateButton();
        } else if (currentState === 'all') {
            // Troisième étape : cacher les projets (retour à l'état initial)
            initDisplay();
        }
    }

    // Event listener unique sur le bouton
    btnVoirPlus.addEventListener('click', showMore);

    // Réinitialiser au redimensionnement
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            initDisplay();
        }, 250);
    });

    // Initialisation
    initDisplay();
});

function afficherModalContact() {
    const form = document.getElementById("form__contact");
    const modal = document.getElementById("dialog__contact");

    const openModalBtn = document.querySelector('[aria-controls="dialog__contact"]'); // bouton principal
    const modalSubmitBtn = document.getElementById("dialog__submit"); // bouton dans la modale
    const modalCloseBtn = modal.querySelector(".button--close");

    if (!form || !modal || !openModalBtn || !modalSubmitBtn || !modalCloseBtn) {
        console.error("Un ou plusieurs éléments sont manquants");
        return;
    }

    // Fonction utilitaire : récupérer tous les champs requis dans un conteneur donné
    const getRequiredFields = container => 
        Array.from(container.querySelectorAll("input[required], textarea[required], select[required]"));

    const isValid = container => getRequiredFields(container).every(field => field.checkValidity());

    // Met à jour l'état des boutons
    function updateButtonsState() {
        openModalBtn.disabled = !isValid(form);
        modalSubmitBtn.disabled = !isValid(modal);
    }

    // Ouvrir la modale
    openModalBtn.addEventListener("click", (e) => {
        e.preventDefault();
        modal.showModal();
    });

    // Fermer la modale
    modalCloseBtn.addEventListener("click", () => {
        modal.close();
    });

    // Soumission réelle du formulaire
    modalSubmitBtn.addEventListener("click", () => {
        if (isValid(modal)) {
            modal.close();
            form.submit();
        } else {
            alert("Veuillez remplir tous les champs requis dans la modale.");
        }
    });

    // Mettre à jour les boutons à chaque interaction
    document.addEventListener("input", updateButtonsState);
    document.addEventListener("change", updateButtonsState);

    // Initialiser les boutons à l'ouverture
    updateButtonsState();
}

document.addEventListener("DOMContentLoaded", afficherModalContact);

/**
 * @param idModal id de l amodal
 */
let scrollPosition = 0; // Variable globale

function afficherModal(idModal) {
    const dialog = document.getElementById(idModal);
    if (dialog) {
        dialog.showModal();
        // Focus sur le bouton de fermeture pour l'accessibilité
        const closeButton = dialog.querySelector('.button__modal--close');
        if (closeButton) {
            setTimeout(() => closeButton.focus(), 100);
        }
    }
}

// Fonction pour fermer une modal de projet
function fermerModal(idModal) {
    const dialog = document.getElementById(idModal);
    if (dialog) {
        dialog.close();
    }
}