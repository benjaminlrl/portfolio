<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_entreprise extends BaseController
{
    public function index(): string{
        $data['titre_page'] = 'Entreprise';
        $data['langue'] = 'fr';

        return view('v_head', $data).
            view('v_header').
            view('v_footer');
    }
}