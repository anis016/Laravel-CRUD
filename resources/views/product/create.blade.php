@extends('layout.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('errors.product_error')

            <?php
                $user_values = array();
                foreach($users as $user) {
                    $user_values = $user;
                  //  echo $user;
                }

                // echo $user_values
            ?>


            {!! Form::open(array('url' => 'product')) !!}
                {!! Form::label('name', 'Product Name') !!}
                {!! Form::text('name', null, array('class' => 'form-control' )) !!}

                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description', null, array('class' => 'form-control' )) !!}

                {!! Form::label('quantity', 'Quantity') !!}
                {!! Form::text('quantity', null, array('class' => 'form-control' )) !!}

                {!! Form::label('price', 'Price') !!}
                {!! Form::text('price', null, array('class' => 'form-control' )) !!}

                {!! Form::label('user_id', 'Customer Name') !!}
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="">Select a Customer</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->name }}</option>
                        @endforeach
                    </select>
                {{--{!! Form::select('user_id', array($user->id => $user->name), 'Select A Customer', ['class' => 'form-control'] ) !!}--}}

                {!! Form::submit('Save', array('class' => 'btn btn-default')) !!}

            {!! Form::close() !!}
        </div>
    </div>
@endsection