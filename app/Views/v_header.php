<!-- Section header -->
<header id="header">
    <button class="header__btn header__btn--hamburger" id="header__btn--hamburger" aria-controls="header-responsive"
        type="button">
        <i class="fa-solid fa-bars"></i>
    </button>
    <h2 class="header__title" id="header__title">
        <i class="fa-solid fa-code"></i>&nbsp;Portfolio
    </h2>
    <div class="header__responsive" id="header__responsive">
        <nav class="header__nav">
            <div class="header__nav-menu">
                <?= anchor(base_url("#top"),
                        "Accueil",
                        'class="header__nav-link"'); ?>
                <?= anchor(base_url("#section__competences"),
                        "Compétences",
                        'class="header__nav-link"'); ?>
                <?= anchor(base_url("#section__projets"),
                        "Projets", 'class="header__nav-link"'); ?>
                <?= anchor(base_url("#section__entreprises"),
                        "Expériences",
                        'class="header__nav-link"'); ?>
            </div>
            <div class="header__social">
                <?= anchor('https://github.com/benjaminlrl',
                        '<i class="fa-brands fa-github"></i>',
                        'class="header__social-link" target="_blank"'); ?>
                <?= anchor('https://www.linkedin.com/in/benjamin-lorieul-15b5a32bb',
                        '<i class="fa-brands fa-linkedin"></i>',
                        'class="header__social-link" target="_blank"'); ?>
            </div>
        </nav>
        <div class="header__tools">
            <button class="header__btn header__btn--theme-toggle" id="header__btn--theme-toggle">
                <i class="fa-solid fa-moon"></i>
            </button>
            <button class="header__language-toggle" id="header__language-toggle" aria-controls="language-list"
                    type="button">
                <i class="fa-solid fa-language"></i>
            </button>
            <div class="header__language-dropdown" id="header__language-dropdown">
                <?= anchor('?langue=fr',
                        'Français',
                        'class="header__language-option"'); ?>
                <?= anchor('?langue=en',
                        'English',
                        'class="header__language-option"'); ?>
            </div>
        </div>


    </div>
</header>