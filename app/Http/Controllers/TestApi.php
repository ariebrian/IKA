<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Request as Req2;
use GuzzleHttp\Message\Response;


class TestApi extends Controller
{
    //
    public function index()
    {
        $client = new Client();
        $response = $client->get('http://localhost:8000/api/profile/1');

        dd($response);
    }
}
