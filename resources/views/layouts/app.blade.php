<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('pageTitle') :: {{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

</head>
<body class="bodybg">
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-dark p-0 topnav sticky-top">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('icon/IKAMOCKUP.png') }}" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        @guest
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="{{ Request::segment(1) === 'login' ? 'active' : null }}" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                                </li>
                                <li class="nav-item">
                                    @if (Route::has('register'))
                                        <a class="{{ Request::segment(1) === 'register' ? 'active' : null }}" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                                    @endif
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('/') }}">{{ __('Kembali') }}</a>
                                </li>
                        @else
                            <ul class=" nav navbar-nav ml-auto navbar-right">
                                <li class="nav-item">
                                    <a class="{{ Request::segment(1) === 'dashboard' ? 'active' : null }}" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="{{ Request::segment(1) === 'forum' ? 'active' : null }}" href="{{ route('forum') }}">{{ __('Forum') }}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="{{ Request::segment(1) === 'newsfeed' ? 'active' : null }}" href="{{ route('newsfeed') }}">{{ __('Newsfeed') }}</a>
                                </li>
                                
                                <!-- Dropdown -->
                                <li class="dropdown nav-item">
                                    <a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('icon/profile.png') }}" style="height:20px"><span class="caret"></span>
                                    </a>
                                    <div id="profile-submenu" class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="/profile/{{auth()->id()}}">Profile</a>
                                        <a class="dropdown-item font-weight-bold" href="#" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('Keluar') }}</a>
                                    </div>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <div class="footer">
        <p>Copyright &copy Prodentic 2018 | Only for Permitted Users</p>
    </div>
</body>
</html>
