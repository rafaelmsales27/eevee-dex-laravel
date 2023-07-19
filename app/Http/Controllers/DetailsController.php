<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poke;

class DetailsController extends Controller
{
    public function index() {
        $name = request('search');
        // get the data from database
        $response = Poke::where('name', $name)->first();

        return view('details',
                    ['poke' => $response]);
    }
    
    public function show($name) {
        // get the data from database
        $response = Poke::where('name', $name)->first();

        return view('details',
                    ['poke' => $response]);
    }
}
