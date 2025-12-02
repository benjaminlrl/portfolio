<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class home extends BaseController
{
    public function index():string{
        $data['titre_page'] = 'Portfolio';
        $data['langue'] = 'fr';

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