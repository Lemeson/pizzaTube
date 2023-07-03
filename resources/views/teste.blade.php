@foreach ($pizzas as $pizza)
    <p>{{ $pizza->nomePizza }}</p>
    <p>{{ $pizza->valorPizza }}</p>
@endforeach
