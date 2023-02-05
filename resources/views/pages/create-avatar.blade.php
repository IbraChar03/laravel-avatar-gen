@extends('layouts.main-layout')
@section('content')
<form action="{{route('avatar.request')}}"
    method="POST">
    @csrf
    <label for="nickname">Nickname : </label>
    <input type="text"
        name="nickname"
        id=""> <br> <br>
    <label for="email">Email Address : </label>
    <input type="text"
        name="email"
        id=""> <br> <br>
    <label for="avatarImg">Avatar Url : </label>
    <input type="text"
        name="avatarImg"
        id=""> <br> <br>
    <input type="submit"
        value="CREATE AVATAR">

</form>

@endsection