<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://justingolden.me/pokemon-types-css/types.min.css">
    <!-- Favicon attribution: Icon by Roundicons Freebies -->
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <title>Eevee-Dex</title>
    <!-- Importing bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F5F5F5;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="img/eevee-dex-text.png" alt="eevee dex written in pokemon font (logo)" height="32px"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $homeActive }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $pokedexActive }}" href="/pokedex">Poké-dex</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $aboutActive }}" href="/about" tabindex="-1" aria-disabled="true">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-image img-fluid p-1" id="bg_img">

    @yield('content')

    </div>

    <!-- Footer -->
    <footer>
        <div id="footer">
            <div class="card-footer text-muted" style="background-color: #F5F5F5;">
                Pokémon is a trademark of The Pokémon Company, all rights reserved
            </div>
        </div>
    </footer>

    <!-- Importing bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>