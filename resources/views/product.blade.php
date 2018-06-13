@extends('layout.app')

@section('content')
<div class="container-full">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                        <p>You are logged in as admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="column-m-10">

            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>description</td>
                    <td>imagepath</td>
                    <td>price</td>
                    <td>CRUD</td>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{substr($product->description,0,100).'...'}}</td>
                        <td><img style="width:100px;"src=" {{$product->imagepath}}" alt="{{$product->name}}"></td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('product.show', $product->id)}}" class="btn btn-info btn-sm">
                                <i href="" class="fas fa-search"> </i>
                            </a>
                            <a href="{{route('product.edit', $product->id)}}" class="btn btn-primary btn-sm">
                                <i href="" class="fas fa-pencil-alt"> </i>
                            </a>
                            {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $product->id],'style'=>'display:inline']) !!}
                            <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
    </div>

</div>