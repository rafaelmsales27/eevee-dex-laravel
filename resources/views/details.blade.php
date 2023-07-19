@extends('layouts.layout')

@section('content')

<!-- Response from search -->
<div id="details_container" class="container px-lg-5">

    <div class="row mx-lg-n5">

        <div class="col py-3 px-lg-5">

            <div class="card" id="reponse_container">
                <div class="card-body">
                    <h5 class="card-title">{{ $poke->name }} #{{ $poke->poke_id }}</h5>
                </div>
                <img src="{{ $poke->image }}" alt="pokemon picture" class="card-img-top">
            </div>

        </div>

        <div class="col py-3 px-lg-5">

            <div class="card" id="details_card">
                <h5> Details: </h5>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item row ">
                        <div class="col-auto" style="float: left;">Height: </div>
                        <div class="col-auto" style="float: left;"> {{ $poke->height / 10; }} m</div>
                    </li>

                    <li class="list-group-item row">
                        <div class="col-auto" style="float: left;">Weight: </div>
                        <div class="col-auto" style="float: left;">{{ $poke->weight / 10 }} kg</div>
                    </li>

                    <li class="list-group-item row">
                        <div class="col-auto text-capitalize" style="float: left; padding-top: 2px;"><span class="type {{ $poke->type1 }}"></span></div>
                        @if ($poke->type != NULL)
                            <div class="col-auto text-capitalize" style="float: left; padding-top: 2px;"><span class="type {{ $poke->type2 }}"></span></div>
                        @endif
                    </li>

                </ul>

            </div>

        </div>
    </div>
</div>

@endsection