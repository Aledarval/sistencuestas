<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>AdminLTE 3 | Blank Page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

		<link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	</head>
	<body class="hold-transition sidebar-mini">
		<div class="wrapper">
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
							<i class="fas fa-th-large"></i>
						</a>
					</li>
				</ul>
			</nav>
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<a href="{{route('home.index')}}" class="brand-link">
					<img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">AdminLTE 3</span>
				</a>
				<div class="sidebar">
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
							<img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
							<a href="#" class="d-block">Alexander Pierce</a>
						</div>
					</div>
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<li class="nav-item">
								<a href="{{route('tema.index')}}" class="nav-link active">
									<i class="far fa-circle nav-icon"></i>
									<p>Tema</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</aside>
			<div class="content-wrapper">
				<section class="content-header">
					&nbsp;
				</section>
				<section class="content">
                    @yield('content')
				</section>
			</div>
			<footer class="main-footer">
				<div class="float-right d-none d-sm-block">
					<b>Version</b>
					3.0.5
				</div>
				<strong>Copyright &copy; 2014-2019
                    <a href="http://adminlte.io">AdminLTE.io</a>.
                </strong>
				All rights reserved.
			</footer>
			<aside class="control-sidebar control-sidebar-dark"></aside>
		</div>
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
		<script src="{{ asset('dist/js/demo.jss') }}"></script>
	</body>
</html>
