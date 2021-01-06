@extends('layouts.pizzaslayout')

@section('content')
    <div class="wrapper pizza-details">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="phone">Phone - {{ $pizza->phone }}</p>
        <p class="address">Address - {{ $pizza->address }}</p>
        <p class="delivery">Delivery time - {{ $pizza->delivery }}</p>
        <p class="rice">Rice - {{ $pizza->rice }}</p>
        <p class="drinks">Drink - {{ $pizza->drinks }}</p>
        <p class="dishes">Dishes</p>
        <ul>
            @foreach($pizza->dishes as $dish)
                <li>{{ $dish }}</li>
            @endforeach
        </ul>
        <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>
    <a href="/pizzas" class="back"><- back to all orders</a>
@endsection