<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="mx-auto flex justify-between items-center px-6">
                <nav class="navbar navbar-expand-lg navbar-light bg-warning mb-2 ">
                    <div class="container">
                        
                        <div class="row">

                            <div class="col-3 col-sm-3">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>

                            <div class="  col-3 text-center">
                                <a class="navbar-brand d-flex align-items-center  " href="{{ url('/movies') }}">
                                    <img class='img-fluid' style="width:70%;" src="{{ asset('logo-imdb.png') }}" alt="IMDB" class="mr-2">
                                </a>
                            </div>
                                                    
                            <div class="collapse navbar-collapse mr-auto text-center" id="mainMenu">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item " "="">
                                        <a class="nav-link" href="{{ url('/movies') }}">Movies</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="{{ url('/artists') }}">Artists</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                      
                    </div>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer>
            <p style='text-align:center; padding-top:15px; font-size:12px;'>Made with love @ 2021 by Anina</p>
        </footer>
    </div>
</body>
</html>
