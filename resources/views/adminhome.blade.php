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
                <h2>user grud</h2>
                <table class="table table-bordered">
            <tr>
                <th style="width: 80px">id</th>
                <th>name</th>
                <th>mail</th>
                <th>password</th>
                <th>Admin</th>
                <th style="width: 140px">
                    <a href="{{route('user.create')}}" class="btn btn-succes btn-sm">
                        <i class="fas fa-plus"></i>
                    </a>
                </th>
            </tr>
            <?php $no = 1; ?>
            @foreach($users as $key => $value)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>***</td>
                    <td>{{ $value->admin }}</td>
                    <td>
                        <a href="{{route('user.show', $value->id)}}" class="btn btn-info btn-sm">
                            <i href="" class="fas fa-search"> </i>
                        </a>
                        <a href="{{route('user.edit', $value->id)}}" class="btn btn-primary btn-sm">
                            <i href="" class="fas fa-pencil-alt"> </i>
                        </a>
                        {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $value->id],'style'=>'display:inline']) !!}
                        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

                <table class="table table-bordered">
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

    </div>
@endsection
