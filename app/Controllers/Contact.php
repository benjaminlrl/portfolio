<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;
use CodeIgniter\Session\Session;

class contact extends BaseController
{
    protected Session $session;
    public function __construct(){
        $this->session = session();
    }
    public function index():RedirectResponse{
        $email = service('email');

        $config['protocol'] = 'sendmail';
        $config['mailPath'] = '/usr/sbin/sendmail';
        $config['charset']  = 'iso-8859-1';
        $config['wordWrap'] = true;
        $email->initialize($config);



        $email->setFrom('your@example.com', 'Your Name');
        $email->setTo('contact@benjaminlorieul.fr');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        if($email->send()):
            $this->session->setFlashData('success', 'L\'email a bien été envoyé');
        else:
            $this->session->setFlashData('error', 'L\'email n\'a pas pu être envoyé');
            $this->session->setFlashData('email_error', 'L\'email n\'a pas pu être envoyé');
        endif;
        return redirect()->to(base_url());
    }
}