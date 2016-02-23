<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">


    <nav class="transparent">
        <div class="nav-wrapper">
            <a href="{{ url('/') }}" class="brand-logo"><img src="{{ asset('/img/logo_giddyup.png') }}" alt="" class="logo"></a>

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">

                <li><a class="waves-effect waves-light btn red darken-3" href="{{ url('/search') }}">Rechercher un trajet</a></li>
                <li><a class="waves-effect waves-light btn amber" href="{{ url('/search') }}">Proposer un trajet</a></li>


                @if (Auth::guest())
                    <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                    <li><a href="{{ url('/login') }}">Se connecter</a></li>
                @else
                    <li><a class="dropdown-button" href="#!" data-activates="menu">{{ Auth::user()->name }} {{ Auth::user()->membre_prenom }}<i class="material-icons right">arrow_drop_down</i></a></li>

                    <ul id='menu' class='dropdown-content'>
                        <li><a href="{{ url('/home') }}">Tableau de bord</a></li>
                        <li><a href="{{ url('/trip-offers/active') }}">Mes annonces</a></li>
                        <li><a href="{{ url('/bookings') }}">Mes réservations</a></li>
                        <li><a href="{{ url('/ratings') }}">Avis</a></li>
                        <li><a href="{{ url('/profile') }}">Profil</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}">Se déconnecter</a></li>
                    </ul>
                @endif

            </ul>
            <ul class="side-nav" id="mobile-demo">
                <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                <li><a href="{{ url('/login') }}">Se connecter</a></li>

                <li><a class="waves-effect waves-light btn" href="{{ url('/search') }}">Rechercher un trajet</a></li>
                <li><a class="waves-effect waves-light btn" href="{{ url('/search') }}">Proposer un trajet</a></li>
            </ul>
        </div>
    </nav>


    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>


    <script type="text/javascript">

        $( document ).ready(function(){

            $(".button-collapse").sideNav();

            $(".dropdown-button").dropdown();

            @yield('script')

         });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 5,// Creates a dropdown of 15 years to control year
            min: true,
        });


    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
