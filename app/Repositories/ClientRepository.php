<?php

namespace App\Repositories;

use App\Models\Client;

class ClientRepository
{
    public function createClient($data)
    {
        $client = Client::create($data);

        return $client;
    }
}