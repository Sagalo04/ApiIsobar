<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HeroesController extends Controller
{
    public function getHeroes($page){
        $heroes = HTTP::get("https://gateway.marvel.com/v1/public/characters?ts=1000&limit=9&offset=$page&apikey=345d1a90c95c65fcbe249e2906cef261&hash=5d1b5769ce0f6716c78da23702ad53e0");
        $heroesArray = $heroes->json();
        return response() -> json($heroesArray,200);
    }

    public function getSingleHeroe($id){
        $heroe = HTTP::get("https://gateway.marvel.com/v1/public/characters/$id?ts=1000&apikey=345d1a90c95c65fcbe249e2906cef261&hash=5d1b5769ce0f6716c78da23702ad53e0");
        $heroeArray = $heroe->json();
        return response() -> json($heroeArray,200);
    }
}
