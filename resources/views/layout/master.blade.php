<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('traydes.title') }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/traydes.css') }}">

    {{--add-ons styles--}}
    @yield('styles')

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    {{--navigation bar--}}
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ url('/') }}" class="navbar-brand" style="font-weight: bold; font-variant: small-caps;">{{ config('traydes.title') }}</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li>
                            <a href="{{ url('user/new') }}"><i class="fa fa-plus"></i>&nbsp;New</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user"></i>&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('admin') }}">Admin Dashboard</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('user/my-posts') }}">My Posts</a></li>
                                <li><a href="{{ url('user/account-settings') }}">Settings</a></li>
                                <li><a href="{{ url('user/profile') }}">Profile</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                    @else
                        @if(!Request::is('auth/login'))
                            <li><a href="{{ url('auth/login') }}"><i class="fa fa-sign-in"></i>&nbsp;Login</a></li>
                        @endif

                        @if(!Request::is('auth/register'))
                            <li><a href="{{ url('auth/register') }}"><i class="fa fa-user"></i>&nbsp;Create</a></li>
                        @endif
                    @endif

                </ul>
            </div>
        </div>
    </nav>

    {{--advertisements will be place here--}}
    <div class="container">
        <div class="row">
            <div class="jumbotron">

            </div>

        </div>
    </div>

    {{--main content--}}
    @yield('content')

    {{--footer--}}
    @include('layout.footer')

    <script src="{{ asset('assets/js/traydes.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    {{--add-ons scripts--}}
    @yield('scripts')
</body>
</html>