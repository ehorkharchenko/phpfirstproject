<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header class="p-3 bg-white border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-dark"> Домашняя страница </a></li>
                <li><a href="/about" class="nav-link px-2 text-dark"> О нас </a></li>
                <li><a href="/review" class="nav-link px-2 text-dark"> Отзывы </a></li>
            </ul>

            @guest
                <div class="text-end">
                    <a href="/login" type="button" class="btn shadow-none me-2"> Вход в ЛК </a>
                    <a href="/register" type="button" class="btn btn-primary"> Регистрация </a>
                </div>
            @else
                <p> {{ Auth::user()->name  }} </p>
                <a class="btn" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            @endguest
        </div>
    </div>
</header>
<div class="container">
    @yield('main_content')
</div>

</body>
</html>
