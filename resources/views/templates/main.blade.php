<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="https://laracasts.com/images/path/laravel-path-achievement-unlocked.png">
    <title>Laravel</title>
    <style>html,body{height:100%;}.wrapper{min-height:100%;display:flex;flex-direction:column;}.main{flex:1 1 auto;}</style>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #F0F3FF;">
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
                                <a class="nav-link" href="{{ route('post.create') }}">Create</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about.index') }}">About</a>
                            </li>
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
