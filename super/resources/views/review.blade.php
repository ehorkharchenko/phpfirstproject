@extends('layout')

@section('title') Отзывы @endsection

@section('main_content')
    <h1> Добавить отзыв </h1>

    @if( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error )
                    <li> {{ $error  }} </li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        @csrf
        <input class="form-control d-none" type="text" name="fullname" id="fullname" value="{{ Auth::user()->name }} {{ Auth::user()->surname  }}"><br>
        <input class="form-control d-none" type="email" name="email" id="email" value="{{ Auth::user()->email }}"><br>
        <input class="form-control" type="text" name="subject" id="subject" placeholder="Тема отзыва"><br>
        <textarea class="form-control" name="message" id="message" placeholder="Введите ваш отзыв"></textarea><br>
        @guest
            <p class="alert alert-danger"> Для того чтобы оставить отзыв войдите в акаунт </p>
        @else
            <button class="btn btn-warning" type="submit"> Оставить отзыв </button>
        @endguest
    </form>

    <h1> Отзывы пользователей </h1>

    @foreach( $reviews as $el )
        <div class="alert">
            <p> <h3 class="d-inline">{{ $el->fullname  }}</h3> <span>{{ $el->created_at }}</span> </p>
            <p>{{ $el->subject }}<span style=" color: #555; letter-spacing: 1px; "> {{ $el->email  }}</span> </p>
            <p>{{ $el->message  }}</p>
        </div>
    @endforeach
@endsection
