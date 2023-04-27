<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ResultController extends Controller
{
    public function apiResults() {
        $apiURL = 'https://bepick.net/api/get_pattern/speedkenoladder/default/fd3/20?_=1682619226765';

        // POST Data
        $postInput = [
            'title' => 'Sample Post',
            'body' => "This is my sample curl post request with data",
            'userId' => 22
        ];
  
        // Headers
        $headers = [
            //...
        ];
  
        $response = Http::get($apiURL);
  
        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);
      
        // echo $statusCode;  // status code
        // $ra = rsort($responseBody['list']);
        $ra = collect($responseBody['list'])->sortBy('count')->reverse()->toArray();
        $lists = $ra;
        foreach($lists as $k => $l) {
            $lists[$k]['round'] = collect($l['round'])->sortBy('count')->reverse()->toArray();
        }

        return view('welcome')->with(compact('lists'));
    }
}
