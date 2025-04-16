<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function types (){

        $types = Http::get('https://api.jikan.moe/v4/genres/anime')->json('data');

        // dd($types);

        return view('anime.types', ['types' => $types]);

    }


    public function animeByType($type_id, $type_name = NULL){

        $animes = Http::get('https://api.jikan.moe/v4/anime?genres='. $type_id . '&limit=20')->json('data');

        // dd($type_id, $type_name);

        // dd($animes);


        return view('anime.bytype', ['animes' => $animes, 'type_name' => $type_name ]);




    }


    public function animeDetail($id){

        
        $anime = Http::get('https://api.jikan.moe/v4/anime/' .$id)->json('data');

        return view('anime.detail', ['anime' => $anime]);


    }

}
