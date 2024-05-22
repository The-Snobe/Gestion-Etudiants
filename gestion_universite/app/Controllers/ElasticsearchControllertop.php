<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Elasticsearch\ClientBuilder;

class ElasticsearchControllertop extends Controller
{
    protected $elasticsearch;

    public function index(){

        return view('elastic');
    }
    
    public function __construct()
    {
        // Initialiser le client Elasticsearch
        $client = \Elastic\Elasticsearch\ClientBuilder::create()
            ->setHosts(['localhost:9200'])
            ->setBasicAuthentication('elastic', 'NwIqVVd=BYhLmVPsJWgs')
            ->build();

        $this->elasticsearch = $client;

        // Données à insérer dans Elasticsearch
        $data = [
            'id' => 6,
            'title' => 'Materiel',
            'content' => 'Ecran',
            'tags' => ['ciseau1', 'ciseau2', 'iseau3']
        ];

        // Indexer les données dans Elasticsearch
        $params = [
            'index' => 'medx tch',
            'id' => $data['id'],
            'body' => $data
        ];

        $response = $this->elasticsearch->index($params);

        // Vérifier la réponse de l'indexation
        if ($response['result'] === 'created') {
            echo 'Donnée créée avec succès.';
        } else {
            echo 'Échec de la création de la donnée.';
        }

        // Afficher la vue
       
    }
/*
    public function index()
    {
        // Effectuer une recherche Elasticsearch pour récupérer les documents
        $params = [
            'index' => 'medex tch',
            'body' => [
                'query' => [
                    'match_all' => new \stdClass(),
                ],
            ],
        ];

        $response = $this->elasticsearch->search($params);

        // Vérifier si des documents ont été trouvés
        if ($response['hits']['total']['value'] > 0) {
            // Récupérer les documents
            $documents = [];
            foreach ($response['hits']['hits'] as $hit) {
                $documents[] = $hit['_source'];
            }
        } else {
            $documents = [];
        }

        // Passer les documents à la vue
        $data = [
            'documents' => $documents,
        ];

        return view('elastic', $data);
    }
    */

}

