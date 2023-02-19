<?php

namespace PpMarket\License;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class PpmLicense extends Client
{

    protected $uri = 'https://ppmarket.org';

    public function __construct()
    {
        parent::__construct([
            'base_uri' => $this->uri
        ]);
    }

    public function claim($license)
    {
        $response = $this->post($this->uri . '/claim/license', [
            'form_params' => [
                'password' => $license
            ]
        ]);

        if ($response->getStatusCode() >= 200 && $response->getStatusCode() < 300) {
            return $response->getBody();
        }

        throw new PpmClaimException($response->getBody());
    }
}
