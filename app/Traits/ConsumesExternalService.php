<?php
namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{

    public function performRequest($method, $requestUrl, $formParams = [], $headers = [], $secret = "")
    {

        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        if ($secret !="") {
            $headers['Authorization'] = "Bearer".$secret;
        }

        $response = $client->request($method, $requestUrl, ['form_params' => $formParams, 'headers' => $headers]);

        return $response->getBody()->getContents();
    }
}
