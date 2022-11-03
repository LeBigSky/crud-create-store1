<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store (Request $request){
        $store= new Pokemon();
        $store->nom = $request->nom;
        $store->type = $request->type;
        $store->niveau = $request->niveau;

        $store->save();
        return redirect()->route('home');
    }
    public function crea(){
        return view('pages/creation');
    }
}

