@extends("layout")

@section("title") Регистрация @endsection

@section("main_content")
    <form method="post" action="/sign-up">
        @csrf
        <div class="form-floating mb-3 mt-3 mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="name@example.com">
            <label for="name"> Имя </label>
        </div>
        <div class="form-floating mb-3 mt-3 mb-3">
            <input type="text" name="surname" class="form-control" id="surname" placeholder="name@example.com">
            <label for="surname"> Фамилия </label>
        </div>
        <div class="form-floating mb-3 mt-3 mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="email">Email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            <label for="password">Пароль</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="repeatPassword" class="form-control" id="repeatPassword" placeholder="Password">
            <label for="repeatPassword">Повторите пароль</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="showPass" onclick=" togglePass(); ">
            <label class="form-check-label" for="showPass">
                показать пароли
            </label>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Зарегистрироватся</button>
    </form>
    <script>

        function togglePass () {

            const pass = document.getElementById('password');
            const repeat_pass = document.getElementById('repeatPassword');

            if ( document.getElementById('showPass').checked ) {
                pass.setAttribute("type", "text");
                repeat_pass.setAttribute("type", "text");
            } else {
                pass.setAttribute("type", "password");
                repeat_pass.setAttribute("type", "password");
            }
        }

    </script>
@endsection()
