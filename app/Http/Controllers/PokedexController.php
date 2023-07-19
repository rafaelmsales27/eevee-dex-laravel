<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poke;

class PokedexController extends Controller
{
    public function index(){

        $pokes = Poke::paginate(10);

        return view('pokedex', ['pokes' => $pokes]);
    }
}
