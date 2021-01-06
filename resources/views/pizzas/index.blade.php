@extends('layouts.pizzaslayout')

@section('content')
<div class="wrapper pizza-index">
  <h1>Orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item">
      <img src="/img/C.png" alt="pizza icon">
      <h4><a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }} - {{ $pizza->delivery }}</a></h4>
    </div>
  @endforeach

</div>

@endsection