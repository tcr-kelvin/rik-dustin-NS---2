@extends('layout.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($product,['route'=>['product.update',$product->id],'method'=>'PATCH']) }}
            @include('product.form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection