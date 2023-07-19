@extends('layouts.layout')

@section('content')
    <!-- Flash message bar -->
    <header>
        @if (0)
            <div class="alert alert-warning" role="alert">
                Nothing
            </div>
        @endif
    </header>

    <main>
        <!-- ACTUAL CONTENT -->
        <!-- Search box -->
        <div id="search_container" class="h-100 d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                <div class="search-box">
                    <form class="search-form d-flex align-items-center flex-nowrap" action="details" method="get">
                        <input type="text" autocomplete="off" class="form-control form-input" name="search" placeholder="Pokemon Name">
                        <button type="submit" class="btn btn-light search-btn">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Floater cards -->
    <div id="card_container">
        @foreach($colection as $poke)
            <a href="/details?search={{ $poke->name }}">
                <div class="card h-100" style="width: 14rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $poke->name }}</h5>
                    </div>
                    <img src="{{ $poke->image }}" alt="pokemon picture" class="card-img">
                </div>
            </a>
        @endforeach
    </div>
@endsection