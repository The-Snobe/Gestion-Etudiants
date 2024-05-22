<?php


namespace App\Models;

use CodeIgniter\Model;
use Elasticsearch\ClientBuilder;

class PromotionModel extends Model
{
    protected $table      = 'promotion';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['intitule'];

    protected $useTimestamps = true;
    protected $createdField  = 'date_creation';
    protected $updatedField  = 'date_modification';
    protected $deletedField  = 'date_suppression';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $elasticsearch; // Propriété pour le client Elasticsearch

    public function __construct()
    {
        $clientBuilder = \Elastic\Elasticsearch\ClientBuilder::create();
        $clientBuilder->setHosts([$this->getConfig()]);
        $this->elasticsearch = $clientBuilder->build();
    }

    protected function getConfig()
    {
        $config = new \Config\Elasticsearch();
        $host = $config->host;
        $port = $config->port;
        $username = $config->username;
        $password = $config->password;

        $connectionString = "{$host}:{$port}";

        if (!empty($username) && !empty($password)) {
            $connectionString = "{$username}:{$password}@{$connectionString}";
        }

        return $connectionString;
    }
    protected function initializeElasticsearch()
    {
        $this->elasticsearch = \Elastic\Elasticsearch\ClientBuilder::create()->build();
    }

    public function searchPromotions($keyword)
    {
        $params = [
            'index' => 'medx tch',
            'body'  => [
                'query' => [
                    'match' => [
                        'intitule' => $keyword
                    ]
                ]
            ]
        ];

        $response = $this->elasticsearch->search($params);

        // Traitez la réponse Elasticsearch selon vos besoins
        if (isset($response['hits']['hits'])) {
            $hits = $response['hits']['hits'];

            // Exemple : Parcourir les résultats et afficher les intitulés
            foreach ($hits as $hit) {
                $intitule = $hit['_source']['intitule'];
                echo $intitule . "<br>";
            }
        }

        return $response;
    }

    public function createPromotion($data)
    {
        // Exemple : Création d'une promotion dans la base de données
        $this->insert($data);

        // Exemple : Indexer la promotion dans Elasticsearch
        $params = [
            'index' => 'medx tch',
            'id'    => $data['id'],
            'body'  => $data
        ];

        $response = $this->elasticsearch->index($params);

        return $response;
    }

    public function updatePromotion($id, $data)
    {
        // Exemple : Mettre à jour la promotion dans la base de données
        $this->update($id, $data);

        // Exemple : Mettre à jour la promotion dans Elasticsearch
        $params = [
            'index' => 'medx tch',
            'id'    => $id,
            'body'  => [
                'doc' => $data
            ]
        ];

        $response = $this->elasticsearch->update($params);

        return $response;
    }

    public function deletePromotion($id)
    {
        // Exemple : Supprimer la promotion de la base de données
        $this->delete($id);

        // Exemple : Supprimer la promotion de Elasticsearch
        $params = [
            'index' => 'medx tch',
            'id'    => $id
        ];

        $response = $this->elasticsearch->delete($params);

        return $response;
    }

    // Autres méthodes du modèle pour les opérations CRUD ou Elasticsearch

    // ...
}












/*namespace App\Models;

use Elasticsearch\Client;
use CodeIgniter\Model;

class PromotionModel extends Model
{
    protected $table      = 'promotion';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['intitule'];

    protected $useTimestamps = true;
    protected $createdField  = 'date_creation';
    protected $updatedField  = 'date_modification';
    protected $deletedField  = 'date_suppression';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}*/