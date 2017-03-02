@extends('layouts.main')

@section('content')
    <h1>Your cart</h1>

    @php $kosar = session('kosar.items'); @endphp
    @if ( isset($kosar) && $kosar >0 )
        @for($i=1;$i <count($kosar);$i++)
            @include('components.product', ['product' => App\Product::find($kosar[$i])])
        @endfor
    @else
        <h2>Your cart is empty (:</h2>
    @endif

@endsection