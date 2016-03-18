@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header text-center">
                <h3>Product Details</h3>
            </div>

            <dl>
                <dt>Product Name</dt>
                <dd>{{ $product->name }}</dd>

                <dt>Description</dt>
                <dd>{{ $product->description }}</dd>

                <dt>Quantity</dt>
                <dd>{{ $product->quantity }}</dd>

                <dt>Price</dt>
                <dd>{{ $product->price }}</dd>

                <dt>Customer Name</dt>
                <dd>{{ $product->username }}</dd>
            </dl>
        </div>
    </div>
@endsection