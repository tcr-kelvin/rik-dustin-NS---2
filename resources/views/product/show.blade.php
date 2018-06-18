@extends ('layout')

@section ('content')

    {{--header--}}
    @include ('layout.partials.header')
    <main>
        <section class="section">
            <div class="row">
                <div class="column-2 content-column">
                    <h2 class="content-title pull-left">{{$product->name}}</h2>

                    <div class="content-line"></div>
                    <h4 class="pull-right teleking-fakebutton">€{{$product->price}}</h4>
                    <p class="pull-left content-text">
                        {{$product->description}}
                    </p>
                    <div class="content-button-wrap">
                        <a class="content-button teleking-button pull-right"href="#">+ Winkelwagen</a>
                        <a class="content-button teleking-button pull-right"href="#">+ Verlanglijstje</a>
                    </div>
                </div>
                <div class="column-2 content-column">
                    <img class="content-img pull-right" src="{{$product->imagepath}}" alt="{{$product->name}}">
                </div>
            </div>
        </section>
    </main>
    {{--footer--}}
    @include ('layout.partials.footer')
@endsection

{{--@extends('layout.app')--}}

{{--@section('content')--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-10">--}}
            {{--<div class="">--}}
                {{--<h2> Show Post</h2><br>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-10">--}}
            {{--<div class="form-group">--}}
                {{--<strong>name : </strong>--}}
                {{--{{ $product->name}}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<strong>description : </strong>--}}
                {{--{{ $product->description }}--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<strong>image : </strong>--}}
                {{--<img src="../{{ $product->imagepath}}" alt="{{ $product->name}} style="width="150px">--}}
            {{--</div>--}}
            {{--<div class="form-group">--}}
                {{--<strong>price : </strong>--}}
                {{--{{ $product->price}}--}}
            {{--</div>--}}
            {{--<br/>--}}
            {{--<a class="btn btn-primary" href="{{ route('product.index') }}"> <i class="fas fa-chevron-right"></i></a>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}
