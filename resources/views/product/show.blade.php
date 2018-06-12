@extends('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="">
                <h2> Show Post</h2><br>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="form-group">
                <strong>name : </strong>
                {{ $product->name}}
            </div>
            <div class="form-group">
                <strong>mail : </strong>
                {{ $product->email}}
            </div>
            <div class="form-group">
                <strong>password : </strong>
                {{ $product->password}}
            </div>
            <div class="form-group">
                <strong>admin rights : </strong>
                {{ $product->admin}}
            </div>
            <br/>
            <a class="btn btn-primary" href="{{ route('product.index') }}"> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
@endsection
