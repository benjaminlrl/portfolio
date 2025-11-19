<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_connexion extends BaseController
{
    public function index():string{
        $data['titre_page'] = 'Accueil';
        $data['langue'] = 'fr';

        return view('v_head',$data).
            view('v_header').
            view('v_creer-user').
            view('v_connexion').
            view('v_contact').
            view('v_footer')
            ;
    }
}