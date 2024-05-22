<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Elasticsearch\ClientBuilder;
use App\Models\ElasticsearchModel;

class ElasticsearchController extends Controller
{
    protected $elasticsearch;

    public function __construct()
    {
       // Initialiser le client Elasticsearch
       $client = \Elastic\Elasticsearch\ClientBuilder::create()
       ->setHosts(['localhost:9200'])
       ->setBasicAuthentication('elastic', 'NwIqVVd=BYhLmVPsJWgs')
       ->build();

   $this->elasticsearch = $client;
    }

    public function addDataView()
    {
        return view('add_data_view');
    }

    public function addData()
    {
        // Récupérer les données soumises par le formulaire
        $nom = $this->request->getPost('nom');
        $age = $this->request->getPost('age');

        // Créer le document à ajouter
        $document = [
            'nom' => $nom,
            'age' => $age
        ];

        // Indexer le document dans Elasticsearch
        $params = [
            'index' => 'personne',
            'body'  => $document
        ];

        $response = $this->elasticsearch->index($params);

        // Rediriger vers une page de confirmation ou une autre action
        return redirect()->to('/elasticsearch/add');
    }
}
