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
        $key = env('APP_GOOGLE_MAPS');
        $url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=restaurants+in+nontaburi&key=$key";
        $response = $client->request( 'GET', $url);
        return $response->getBody();
    }
}
