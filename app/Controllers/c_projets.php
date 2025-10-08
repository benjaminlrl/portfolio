<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_projets extends BaseController
{
    public function index():string{
        $data['titre_page'] = 'Projets';
        $data['langue'] = 'fr';

        return view('v_head',$data).
            view('v_header').
            view('v_projets').
            view('v_footer');
    }
}