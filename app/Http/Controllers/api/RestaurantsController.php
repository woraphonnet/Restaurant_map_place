<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Psr7\Stream;
class RestaurantsController
{
    protected $key;
    protected $url;
    protected $address;
    protected $address_type;
    protected $radius;

    public function __construct()
    {
        $this->key = env('APP_GOOGLE_MAPS');
        $this->address = 'nonthaburi';
        $this->address_type = 'food';
        $this->radius = '';
        
        $this->url = "https://maps.googleapis.com/maps/api/place/textsearch/json?query=$this->address_type $this->address&radius=$this->radius&key=$this->key";
    }

    public function index()
    {
        $client = new Client();
        $response = $client->request( 'GET', $this->url);
        return $response->getBody();
    }

    public function seach()
    {
        dd($this->key);
    }

    public function typeAddress()
    {
        $type = [
            ['name'=>'airport','icon'=>"fa fa-map-marker"],
            ['name'=>'atm','icon'=>"fa fa-map-marker"],
            ['name'=>'bakery','icon'=>"fa fa-map-marker"],
            ['name'=>'bank','icon'=>"fa fa-map-marker"],
            ['name'=>'bar','icon'=>"fa fa-map-marker"],
            ['name'=>'beauty_salon','icon'=>"fa fa-map-marker"],
            ['name'=>'cafe','icon'=>"fa fa-map-marker"],
            ['name'=>'gym','icon'=>"fa fa-map-marker"],
            ['name'=>'hair_care','icon'=>"fa fa-map-marker"],
            ['name'=>'hardware_store','icon'=>"fa fa-map-marker"],
            ['name'=>'hospital','icon'=>"fa fa-map-marker"],
            ['name'=>'night_club','icon'=>"fa fa-map-marker"],
            ['name'=>'police','icon'=>"fa fa-map-marker"],
            ['name'=>'restaurant','icon'=>"fa fa-map-marker"],
            ['name'=>'school','icon'=>"fa fa-map-marker"],
            ['name'=>'shopping_mall','icon'=>"fa fa-map-marker"],
            ['name'=>'store','icon'=>"fa fa-map-marker"],
            ['name'=>'supermarket','icon'=>"fa fa-map-marker"],
            ['name'=>'zoo','icon'=>"fa fa-map-marker"],
        ];
        return $type;
    }
}
