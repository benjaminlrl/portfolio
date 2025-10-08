<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_home extends BaseController
{
    public function index():string{
        $data['titre_page'] = 'Accueil';
        $data['langue'] = 'fr';

        return view('v_head',$data).
            view('v_header').
            view('v_home').
            view('v_presentation').
            view('v_formations')
            //view('v_competences').
            //view('v_langues').
            //view('v_certifications').
            //view('v_footer-contact')
            ;
    }
}