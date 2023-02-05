@extends('layouts.main-layout')
@section('content')
<h1>AVATARS</h1>
<h2>
    <a href="{{route('avatar.create'
        )}}">
        CREATE A NEW AVATAR </a>
</h2>
<ul>
    @foreach ($avatars as $avatar)
    <li>
        <img src="{{$avatar -> avatarImg}}"
            alt="">
        <span> <strong>Nickname : </strong> {{$avatar -> nickname}}</span>
        <span> <strong><a href="{{route('avatar.delete',['id' => $avatar -> id])}}">DELETE AVATAR </a></span><br> <br>
    </li>

    @endforeach
</ul>
@endsection