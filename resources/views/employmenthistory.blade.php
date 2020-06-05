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
            Employment History
        </div>
        @include('menu')
        <pre style="color:#fff">{{$i=1}}</pre>
        @foreach($total as $totals)
        <div style="width:1000px;">
        <br/>
        <p style="text-align:left;font-weight:bold; color:black;">{{$i}} => {{ $totals -> SDate }} - {{ $totals -> EDate }} - {{ $totals -> Company }} - {{ $totals -> Occ }} <br/><br/></p>
        <div style="text-align:left; white-space: pre-wrap; font-size:18px">{{ $totals -> Details }}</div>
        </div>
        <pre style="color:#fff">{{$i+=1}}</pre>
        @endforeach
        <br/>
        <br/>
        <br/>
        <br/>
    </div>
</div>
@endsection