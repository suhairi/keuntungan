<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BPIP : E-Dividen</title>

    <!-- Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        html, body {
            font-family: 'Lato';
            margin-right: 5px;
            margin-left: 5px;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    e-Dividen
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>

                    @if(!Auth::guest())

                        @if(auth()->user()->level->name == 'SYS_ADMIN')
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Preset <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('admin.preset.markah') }}"><i class="glyphicon glyphicon-pencil"></i> Markah</a></li>
                                    <li><a href="{{ route('admin.preset.users') }}"><i class="glyphicon glyphicon-pencil"></i> Pengguna</a></li>
                                    <li><a href="{{ route('admin.preset.bank') }}"><i class="glyphicon glyphicon-pencil"></i> Bank</a></li>
                                </ul>
                            </li>
                        @endif

                            {{--PPK--}}
                            @if(auth()->user()->level->id == 7 /*'PENGURUS BESAR PPK'*/)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Daftar <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('ppk.rekod.users') }}"><i class="glyphicon glyphicon-pencil"></i> Kerani Akaun</a></li>
                                    </ul>
                                </li>
                            @endif

                            @if(auth()->user()->level->id == 8 /*'KERANI AKAUN'*/)
                                <li><a href="{{ route('ppk.rekod.permohonan') }}"> Permohonan</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        Pre - Set <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ route('ppk.rekod.ppk') }}"> Detail PPK</a></li>
                                        <li><a href="{{ route('ppk.rekod.pengurus') }}">Pengurus</a></li>                                                                                
                                        <li><a href="{{ route('ppk.rekod.permarkahan') }}"> Permarkahan</a></li>
                                        <li><a href="{{ route('ppk.rekod.penerima') }}"> Penerima</a></li>

                                    </ul>
                                </li>
                            @endif


                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>

                    @else
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            @include('_notifications')
        </div>
    </div>
    @yield('content')



    <!-- JavaScripts -->
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
