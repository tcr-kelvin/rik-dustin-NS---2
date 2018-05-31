@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
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
            <table class="admin-table">
                <tbody>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>description</td>
                        <td>imagepath</td>
                        <td>price</td>
                        <td>created at</td>
                        <td>updated at</td>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{substr($product->description,0,100).'...'}}</td>
                            <td><img style="width:100px;"src=" {{$product->imagepath}}" alt="{{$product->name}}"></td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->updated_at}}</td>
                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>
    </div>

@endsection
