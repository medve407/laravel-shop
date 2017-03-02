@extends('layouts.main')

@section('content')
    <h1>Products</h1>
    <!-- Products -->
    @foreach($products as $product)
        @include('components.product', ['product' => $product])
    @endforeach
@endsection