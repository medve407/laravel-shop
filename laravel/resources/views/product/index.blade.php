@extends('layouts.main')

@section('content')
    @include('components.product',['product' => $product])
@endsection