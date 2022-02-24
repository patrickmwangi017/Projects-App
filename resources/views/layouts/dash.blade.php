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
    <script src="{{ asset('dash.js') }}" defer></script><script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('dash.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div id="app">
        <div id="wrapper">
        <div class="overlay"></div>
            
                <!-- Sidebar -->
            <nav class="navbar navbar-inverse fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                    <div class="sidebar-header">
                        <div class="sidebar-brand"><a href="#">Brand</a></div>
                    </div>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#team">Team</a></li>
                    <li class="dropdown">
                        <a href="#works" class="dropdown-toggle"  data-toggle="dropdown">Works <span class="caret"></span></a>
                            <ul class="dropdown-menu animated fadeInLeft" role="menu">
                                <div class="dropdown-header">Dropdown heading</div>
                                <li><a href="#pictures">Pictures</a></li>
                                <li><a href="#videos">Videeos</a></li>
                                <li><a href="#books">Books</a></li>
                                <li><a href="#art">Art</a></li>
                                <li><a href="#awards">Awards</a></li>
                            </ul>
                        </li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#followme">Follow me</a></li>
                </ul>
            </nav>
                <!-- /#sidebar-wrapper -->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </button>
                    <main class="py-4">
                        {{$slot}}
                    </main>
                </div>
                <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->
    </div>
    @livewireScripts
</body>
</html>
