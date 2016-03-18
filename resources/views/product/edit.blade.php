@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header text-center">
                <h3>Product Edit</h3>
            </div>

            @include('errors.product_error')
            {!! Form::model($product, array('route' => array('product.update', $product->id), 'method'=>'put' )) !!}
                {!! Form::label('name', 'Product Name') !!}
                {!! Form::text('name', $product->name, array('class' => 'form-control' )) !!}

                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', $product->description, array('class' => 'form-control' )) !!}

                {!! Form::label('quantity', 'Quantity') !!}
                {!! Form::text('quantity', $product->quantity, array('class' => 'form-control' )) !!}

                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', $product->price, array('class' => 'form-control' )) !!}

                {!! Form::label('user_id', 'Customer Name') !!}
                <select name="user_id" id="user_id" class="form-control">
                    <option value="{{ $product->user_id }}">{{ $product->username }}</option>
                    @foreach($users as $user)
                        @if( $user->id != $product->user_id )
                            <option value="{{ $user->id }}"> {{ $user->name }}</option>
                        @endif
                    @endforeach
                </select>
                {{--{!! Form::select('user_id', array($user->id => $user->name), 'Select A Customer', ['class' => 'form-control'] ) !!}--}}

                {!! Form::submit('Update', array('class' => 'btn btn-default')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection