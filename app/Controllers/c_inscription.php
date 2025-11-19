<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\m_inscription;
use CodeIgniter\Config\Services;
class c_inscription extends BaseController
{
    public function validerAjout(){
        //Mise ne place du service
        $validation = service('validation');
        //Règles de validation des données
        $validation->setRules([
            'new-identifiant' => 'required|min_length[3]',
            'new-prenom' => 'required|min_length[3]',
            'new-nom' => 'required|min_length[3]',
            'new-email' => 'required|valid_email',
            'password' => 'required|min_length[10]'
        ],
            //gestion des messages d'erreurs
            [
                'new-identifiant' => ['required' => 'Votre nom est obligatoire','min_length' => '3 car minimum'],
                'new-prenom' => ['required' => 'Le prenom est obligatoire','min_length' => '3 car minimum'],
                'new-nom' => ['required' => 'Le nom est obligatoire','min_length' => '3 car minimum'],
                'new-email' => ['required' => 'Le email est obligatoire','valid_email' => 'Votre email n\'est pas valide'],
                'password' => ['required' => 'Le mot de passe est obligatoire','min_length' => '10 car minimum'],

            ]);
        //récupère les données
        $data = [
            'new-identifiant' => $this->request->getPost('new-identifiant'),
            'new-prenom' => $this->request->getPost('new-prenom'),
            'new-nom' => $this->request->getPost('new-nom'),
            'new-email' => $this->request->getPost('new-email'),
            'password' => $this->request->getPost('password')
        ];
        
        //contrôle de validation des règles sur les données
        if($validation->run($data)):
            $dataValide = $validation->getValidated();
            //sauvegarder les informations dans la base de données
            $inscriptionModel = new m_inscription();
            $inscriptionModel->ajoutContact($dataValide);

            $data['titre_page'] = 'Accueil';
            $data['langue'] = 'fr';

            return view('v_head', $data).
                view('v_header').
                view('v_inscription').
                view('v_footer');
        endif;
    }
}