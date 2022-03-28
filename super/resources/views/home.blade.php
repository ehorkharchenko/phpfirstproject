@extends('layout')

@section('main_content')
  <h1>Домашняя страница</h1>
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
      @csrf
      <button type="submit"> log out </button>
  </form>
@endsection
