<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService 
{
        /**
     * @param HttpClientInterface $client
     */
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    /**
     * @return array
     */
    public function getFranceData() :array
    {
        $response = $this->client->request('GET',
        'https://coronavirusapifr.herokuapp.com/data/france-by-date/11-10-2021'
    );
        return $response->toArray();
    }

}

