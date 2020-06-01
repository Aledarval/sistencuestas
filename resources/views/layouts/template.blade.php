<html>

    <head>
        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('menu')
            <a href="{{route('home.index')}}">Home</a>
            <a href="{{route('empresa.index')}}">Empresa</a>
            @show
            <br/>
            <br/>

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
