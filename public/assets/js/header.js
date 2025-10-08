document.addEventListener("DOMContentLoaded", () => {
    afficherElement("header__btn--hamburger","header__responsive");
    afficherElement("header__language-toggle","header__language-dropdown");
    changerTheme("header__btn--theme-toggle");
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.dataset.theme = savedTheme;
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