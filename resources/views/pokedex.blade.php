@extends('layouts.layout')

@section('content')
    <!-- List of all pokemons -->
    <div id="pokedex_container">
        @foreach ($pokes as $poke)
            <div class="pokedex_card">
                <a href="/details?search={{ $poke->name }}">
                    <div class="card h-100" style="width: 14rem;">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"> {{ $poke->name . " #" . $poke->poke_id }}</h5>
                        </div>
                        <img src="{{ $poke->image }}" alt="Pokemon image">
                    </div>
                </a>
            </div>
        @endforeach
    </div>    
    

    <!-- Display pagination links -->
    <!-- {{ $pokes->links() }} -->
    @include('pagination')
@endsection