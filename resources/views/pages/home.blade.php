@extends('layouts.main-layout')
@section('content')
<h1>AVATARS</h1>
<ul>
    @foreach ($avatars as $avatar)
    <li>
        <img src="{{$avatar -> avatarImg}}"
            alt="">
        <span> <strong>Nickname : </strong> {{$avatar -> nickname}}</span> <br> <br>
    </li>

    @endforeach
</ul>
@endsection