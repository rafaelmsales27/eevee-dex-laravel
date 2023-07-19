<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poke;

class IndexController extends Controller
{
    public function index(){
        # Get random pokemons from database to show on screen
        // Generate random numbers and store them into an array
        $randoms = [];
        for ($x = 0; $x < 4; $x++) {
            $randoms[] = rand(1, 251);
        }

        // Load records from poke table into the poke_colection variable
        // $poke_colection = Poke::all();
        // $poke_colection = Poke::orderBy('name', 'desc')->get();
        $poke_colection = Poke::whereIn('poke_id', $randoms)->get();

        $error = FALSE;
        $error_message = 'Error happened!';

        return view('index', 
                    ['colection' => $poke_colection]
        );
    }
}
