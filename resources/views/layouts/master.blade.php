<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper" id="app">

    @include('partials._sidebar')

    <div class="main-panel">

    @include('partials._navbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    @yield('content')

                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    <!--
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-coffee cofee"></i> by <a href="">Richard Trujillo</a>
                    -->
                </div>
            </div>
        </footer>

    </div>
</div>


@yield('partials')

</body>

    <!--   Core JS Files   -->
    <script src="/assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<!-- <script src="/assets/js/chartist.min.js"></script> -->

    <!--  Notifications Plugin    -->
    <script src="/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="/assets/js/paper-dashboard.js"></script>


    @if (Route::is('admin.dashboard'))
	<script type="text/javascript">
    	$(document).ready(function(){
        	// demo.initChartist();
    	});
	</script>
    @endif

    @if (session('message'))
	<script type="text/javascript">
    	$(document).ready(function(){

        	// demo.initChartist();

        	$.notify({
            	icon: 'ti-check',
            	message: "{{ session('message') }}"

            },{
                type: '{{ session('status') }}',
                timer: 4000
            });

    	});
	</script>
    @endif

    <script src="{{ asset('js/app.js') }}"></script>

</html>
