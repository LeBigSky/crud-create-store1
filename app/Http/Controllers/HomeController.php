<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        $pokemons= Pokemon::all();
        return view('home', compact('pokemons'));
    }
}
