<?php

namespace App\Models;

use Elasticsearch\ClientBuilder;

class ElasticsearchModeltop
{
    protected $elasticsearch;

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

    // Ajoutez ici des méthodes pour interagir avec Elasticsearch, par exemple search(), index(), delete(), etc.
    public function search($index, $query)
{
    $params = [
        'index' => $index,
        'body'  => [
            'query' => $query,
        ],
    ];

    return $this->elasticsearch->search($params);
}

public function index($index, $document)
{
    $params = [
        'index' => $index,
        'body'  => $document,
    ];

    return $this->elasticsearch->index($params);
}

public function delete($index, $id)
{
    $params = [
        'index' => $index,
        'id'    => $id,
    ];

    return $this->elasticsearch->delete($params);
}

// Vous pouvez ajouter d'autres méthodes selon vos besoins, telles que update(), bulk(), etc.

}
