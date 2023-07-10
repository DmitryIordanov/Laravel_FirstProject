<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/adminPanel.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" href="https://laracasts.com/images/path/laravel-path-achievement-unlocked.png">
    <title>Laravel</title>
</head>
<body>

    @can('view', auth()->user())
        @include('includes/admin/adminPanel')
    @endcan

    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('main.index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('post.index') }}">Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index') }}">About</a>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="width: 200px;">
                                        <div style="display: flex;padding: 0 16px; align-items: center;">
                                            <img style="align-items: center;" width="50" height="50" src="https://www.freeiconspng.com/uploads/person-icon-blue-18.png" alt="">
                                            <div style="padding-left: 5px;">
                                                <span>Name: {{ Auth::user()->name }}</span>
                                                <span>Status: {{ Auth::user()->role }}</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="main">
            <div class="container">
                @yield('content')
            </div>
        </div>

        <footer class="footer">
            <nav class="navbar bg-dark" style="background: #F0F3FF;">
                <div class="container-fluid" style="display: flex; justify-content: center;">
                    <p style="padding-top: 25px; color: #fff;">Ⓒ Developed by Iordanov Dmitry 2023</p>
                </div>
            </nav>
        </footer>
    </div>

    <script src="{{ asset('js/app.css') }}"></script>

</body>
</html>
