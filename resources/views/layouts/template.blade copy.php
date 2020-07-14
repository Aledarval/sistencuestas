<html>
    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
        @stack('style')
    </head>
    <body>
    @section('menu')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('home.index')}}">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('empresa.index')}}">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('estado.index')}}">Estado</a>
                    </li>
                </ul>
                <button class="btn btn-danger" type="submit">Salir</button>
            </div>

        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    @stack('scripts')
</html>
