<?php

namespace App\Models;

use CodeIgniter\Model;
use Elasticsearch\ClientBuilder;

class ElasticsearchModel extends Model
{
    protected $elasticsearch;

    public function __construct()
    {
        parent::__construct();

        // Initialiser le client Elasticsearch
        $clientBuilder = \Elastic\Elasticsearch\ClientBuilder::create();
        $clientBuilder->setHosts(['localhost:9200']);
        $this->elasticsearch = $clientBuilder->build();
    }

    public function addData($index, $document)
    {
        $params = [
            'index' => $index,
            'body'  => $document
        ];

        return $this->elasticsearch->index($params);
    }
}
