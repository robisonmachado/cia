<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Language" content="pt-br">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>CIA - CONTROLE INFORMATIZADO DE ATENDIMENTO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Jquery -->
        <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

        <!-- bootstrap 4.1 jS -->
        <script type="text/javascript" src="{{ asset('js/bootstrap-4.1.0/bootstrap.bundle.min.js') }}"></script>

        <!-- bootstrap 4.1 CSS -->
        <link href="{{ asset('css/bootstrap-4.1.0/bootstrap.min.css') }}" rel="stylesheet">

        <!-- CIA CSS -->
        <link href="{{ asset('css/cia.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
             @yield('style')
        </style>

        <!-- scripts -->
        @yield('script')

    </head>
    <body>

        @auth
        @if (Route::has('login'))
        <header class="container-fluid">
                
            <div class="row justify-content-end justify-content-md-end align-items-center">
                <span class="d-none d-sm-block">Bem-vindo: {{ Auth::user()->name }}</span>
                <a class="btn btn-primary" href="{{ url('/home') }}">Home</a>
                <a class="btn btn-primary" href="{{ route('logout') }}" 
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </header>
        @endif
        @endauth
    


        <section class="container-fluid">
            @yield('content')      
        </section>

        <footer class="container-fluid">
            <div class="wrapper">
                <span class="">copyright &#169; CIA - CONTROLE INFORMATIZADO DE ATENDIMENTO 2018</span>
            </div>
        </footer>

    </body>
</html>
