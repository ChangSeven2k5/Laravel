<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function getData() {
        $reponse = Http::get("https://jsonplaceholder.typicode.com/posts");
        $data = $reponse ->json();
        return view("api")-> with("data", $data);
    }
}
