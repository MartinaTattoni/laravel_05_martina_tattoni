<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        return view ('Welcome');

    }


    public function anime(){

        return view ('Anime-page');

    }


    public function manga(){

        return view ('Manga-page');

    }
}
