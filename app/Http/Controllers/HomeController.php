<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use \GuzzleHttp\Client as HttpClient;

class HomeController extends Controller
{
    public function index(){
        $response = null;
        $apiKey = env('BITCOIN_API');

        /* sending a request to receive data from api */
        $client = new HttpClient();
        $res = $client->get(
            $apiKey,
            array()
        );

        $statusCode = $res->getStatusCode();
        if ($statusCode === Response::HTTP_OK) {
            $response = json_decode($res->getBody(), true);
        }

        return view('home', ['data' => $response]);
    }
}
