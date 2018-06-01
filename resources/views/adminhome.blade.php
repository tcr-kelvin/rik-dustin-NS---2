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
                            <p>You are logged in as Admin</p>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD

        </div>

=======
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
            </div>
>>>>>>> Rik
        </div>
    </div>
@endsection
