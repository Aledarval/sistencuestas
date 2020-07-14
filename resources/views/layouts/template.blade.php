<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Sistema Encuesta</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.styles')
        @stack('style')
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
            @include('layouts.sidebar')
            @include('layouts.menu')
			<div class="content-wrapper">
				<section class="content-header">
					&nbsp;
				</section>
				<section class="content">
                    @yield('content')
				</section>
			</div>
            @include('layouts.footer')
        </div>
        @include('layouts.scripts')
        @stack('scripts')
	</body>
</html>
