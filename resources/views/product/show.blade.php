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
                <strong>description : </strong>
                {{ $product->description }}
            </div>
            <div class="form-group">
                <strong>image : </strong>
                <img src="../{{ $product->imagepath}}" alt="{{ $product->name}} style="width="150px">
            </div>
            <div class="form-group">
                <strong>price : </strong>
                {{ $product->price}}
            </div>
            <br/>
            <a class="btn btn-primary" href="{{ route('product.index') }}"> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
@endsection
