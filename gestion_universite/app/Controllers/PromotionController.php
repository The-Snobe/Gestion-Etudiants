<?php

namespace App\Controllers;

use App\Models\PromotionModel;
use CodeIgniter\Controller;
use Elasticsearch\ClientBuilder;

class PromotionController extends BaseController
{
    public function index()
    {
         // Charger la bibliothèque de formulaire
         helper('form');
         
        return view('promotion');
    }

    public function saveProfession()
    {
        $professionModel = new PromotionModel();
        $profession = $this->request->getPost('profession');

        $data = [
            'profession' => $profession
        ];

        // Enregistrement dans la base de données
        $professionModel->insert($data);

        // Enregistrement dans Elasticsearch
        $client = \Elastic\Elasticsearch\ClientBuilder::create()
         ->setHosts(['localhost:9200'])
         ->setBasicAuthentication('elastic', 'NwIqVVd=BYhLmVPsJWgs')
         ->build();
        $params = [
            'index' => 'professions',
            'body' => $data
        ];
        $client->index($params);

        // Redirection ou affichage d'un message de succès
        return redirect()->to('/profession');
    }
}
