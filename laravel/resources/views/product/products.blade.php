@extends('layouts.main')

@section('content')
    <h1>Products</h1>
    <!-- Products -->
    @foreach($products as $product)
        @include('components.product', ['product' => $product])
    @endforeach
    @if(count($products) == 0)
        <h1> There is no products. Sorry :(</h1>
    @endif
@endsection