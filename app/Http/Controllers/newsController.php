<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class newsController extends Controller
{
    public function getNews()
    {
        $client = new Client();
        $response = $client->get('https://newsapi.org/v2/top-headlines?country=us&apiKey=80771565c7a341ac8d6a065fbe22a3da');

        $data = json_decode($response->getBody(), true);

        return view('news', ['news' => $data['articles']]);
    }
}
