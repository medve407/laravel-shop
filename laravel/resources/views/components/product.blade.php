<div class="panel panel-default">
    <div class="panel-heading">{{ $product->title }}</div>
    <div class="panel-body">
        <p>Image</p>
        <p>{{ $product->shortDescription }}</p>
        <p>{{ $product->longDescription }}</p>
        <p>{{ $product->price }}</p>
        <p><a href="#" class="btn btn-primary" role="button">To cart</a> <a href="{{ url('product/'. $product->id) }}" class="btn btn-default" role="button">Details</a></p>
    </div>
</div>