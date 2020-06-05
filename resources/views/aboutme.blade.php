@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <img src="/img/stanley_it_house.gif" alt="Stanley_its_house" height="300" width="800">
        <div class="title m-b-md">
            About Stanley Profile
        </div>
        @include('menu')
        @foreach($profile as $profiles)
        <br/>
        <div style="width:1000px;">
            <pre style="text-align:left;white-space: pre-wrap; font-size:18px">{{ $profiles -> aboutme}}</pre>
        </div>
        @endforeach
    </div>
</div>
@endsection