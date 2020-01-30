<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Stream;
class RestaurantsController
{
    public function getRestaurantsGoogle()
    {
        $client = new Client();
        $url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+Bangsue&key=AIzaSyB_6G_5em5sdsUtStU9MsRmqAMGNEq9BDA";
        $response = $client->request( 'GET', $url);
        return $response->getBody();
    }
}
