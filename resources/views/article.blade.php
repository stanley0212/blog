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
                Blog
            </div>
            @include('menu')
            <div style="width:1000px;">
            <div id="bb2">
            <div>Posted by {{ $info -> name }} {{ $info -> created_at }}</div>
            <H1>{{ $info -> title}}</H1>
            <div id="infobb2">{{ $info -> info }}</div><br/>
            <div id="comment">Comment</div>
            </div>
            <div id="sliderbar">最新文章
            
            </div>
            <div id="sliderbar1">
            @foreach($newpost as $newposts)  
                <ui>
                    <li style="margin-top: 20px;"><a href="/article/{{$newposts -> id}}">{{$newposts -> title}}</a></li>
                </ui>
            @endforeach
            </div>
            <div style='clear:both;'></div>
            </div>
    </div>
</div>
@endsection