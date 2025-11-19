<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class c_administration extends BaseController
{
    public function index(): string{
        $data['titre_page'] = 'Contact';
        $data['langue'] = 'fr';

        return view('v_head', $data).
            view('v_header').
            view('v_contact').
            view('v_footer');
    }
}