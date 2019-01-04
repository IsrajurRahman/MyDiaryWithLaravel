<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard/img/apple-icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>My Diary</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('dashboard/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('dashboard/css/paper-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('dashboard/css/demo.css') }}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('dashboard/css/themify-icons.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                   HELLO  {{ Auth::user()->name }}
                </a>
            </div>

            <ul class="nav">
                <li class="{{ Request::segment(1) === 'home' ? 'active' : null }}">
                    <a href="{{ url('/home') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="{{ Request::segment(1) === 'notes' ? 'active' : null }}">
                    <a href="{{ url('/notes') }}">
                        <i class="ti-notepad"></i>
                        <p>Notes</p>
                    </a>
                </li>
                <li class="{{ Request::segment(1) === 'numbers' ? 'active' : null }}">
                    <a href="{{ url('/numbers') }}">
                        <i class="ti-mobile"></i>
                        <p>Numbers</p>
                    </a>
                </li>
<!--                 <li>
    <a href="user.html">
        <i class="ti-list-ol"></i>
        <p>To Do</p>
    </a>
</li>
<li>
    <a href="user.html">
        <i class="ti-user"></i>
        <p>Profile</p>
    </a>
</li> -->
                <!-- <li class="active-pro">
                    <a href="#">
                        <i class="ti-comments"></i>
                        <p>Chat With Friends</p>
                    </a>
                </li> -->
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="ti-power-off"></i>
                                <p>{{ __('Logout') }}</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">

             @yield('content')

            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>,  <i class="fa fa-heart heart"></i> by <a href="#">Israjur Rahman</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('dashboard/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{ asset('dashboard/js/bootstrap-checkbox-radio.js') }}"></script>

    <!--  Charts Plugin -->
    <script src="{{ asset('dashboard/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('dashboard/js/bootstrap-notify.js') }}"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="{{ asset('dashboard/js/paper-dashboard.js') }}"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('dashboard/js/demo.js') }}"></script>

    @yield('jscontent')

</html>