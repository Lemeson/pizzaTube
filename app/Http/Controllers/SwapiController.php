<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class SwapiController extends Controller
{
    public function index()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://swapi.dev/api/people/');
        $data = json_decode($response->getBody(), true);

        return view('swapi', ['data' => $data]);
    }
}
