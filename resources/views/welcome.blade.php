@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}"></a>
            @else
                <a href="{{ route('login') }}"></a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <a>
            <img src="/img/C.png" alt="pizza house logo" width=20% height=20%>
        </a>
        

        <div class="title black-text m-b-md">
            Y.X. P2
        </div>
        <p class="aboutP2">Y.X. Project-2 is a virtual Chinese restaurant. We accept <a href={{ route('pizzas.create') }} class="OrderBtn">orders</a> and delivery food on time. Check out our <a href="/menu" class="OrderBtn">menu</a> for details.</p>
        <p class="mssg">{{ session('mssg') }}</p>



    </div>
</div>
@endsection