@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header text-center">
                <h3>Product List</h3>
            </div>

            <a class="btn btn-primary" href="{{ url('product/create') }}"> Create Product </a>
            <table class="table-bordered table">
                <thead>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Customer Name</th>
                    <th>Manage</th>
                </thead>
                <tbody>
                    @foreach($productList as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->username }}</td>
                            <td>
                                <a href="{{ url('product/'.$product->id) }}" class="btn btn-info btn-xs">Show</a>
                                <a href="{{ url('product/'.$product->id).'/edit' }}" class="btn btn-success btn-xs">Edit</a>

                                {!! Form::open(array('route' => array('product.destroy', $product->id), 'method'=>'delete' )) !!}
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Do you want to delete? ')">Delete</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection