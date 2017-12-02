@extends('welcome')

@section('content')
    <form action="/login" method="post">
        {{ csrf_field() }}
        Tel: <input name="login-tel" type="text">
        <input type="submit" value="login">
    </form>
@endsection