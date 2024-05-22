<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use Elasticsearch\ClientBuilder;

class ElasticsearchDelete extends Controller
{

    protected $elasticsearch;

    public function index(){

        return view('elastic');
    }
    
    public function __construct()
    {
        // Initialiser le client Elasticsearch
        $clientBuilder = \Elastic\Elasticsearch\ClientBuilder::create();
        $clientBuilder->setHosts(['localhost:9200']);
        $this->elasticsearch = $clientBuilder->build();
    }

    public function delete()
    {
        // ID du document à supprimer
        $id = 5;

        // Paramètres de la requête de suppression
        $params = [
            'index' => 'medx tch',
            'id' => $id,
        ];

        // Supprimer le document
        $response = $this->elasticsearch->delete($params);

        // Vérifier la réponse de la suppression
        if ($response['result'] === 'deleted') {
            echo 'Donnée supprimée avec succès.';
        } else {
            echo 'Échec de la suppression de la donnée.';
        }
    }
}
