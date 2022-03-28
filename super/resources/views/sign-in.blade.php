@extends("layout")

@section("title") Вход в личный кабинет @endsection

@section("main_content")

    <form method="post" action="/sign-in">
        @csrf
        <div class="form-floating mb-3 mt-3 mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Пароль</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="remember-me"> запомнить меня
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>

@endsection
