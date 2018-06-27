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
                        <td>sms</td>
                        <td>callmins</td>
                        <td>data</td>
                        <td>price</td>
                        <td><a href="/simonly/create">+</a> </td>
                    </tr>
                    @foreach($simonlys as $simonly)
                        <tr>
                            <td>{{$simonly->id}}</td>
                            <td>{{$simonly->name}}</td>
                            <td>{{substr($simonly->description,0,100).'...'}}</td>
                            <td>{{$simonly->sms}}</td>
                            <td>{{$simonly->callmins}}</td>
                            <td>{{$simonly->data}}MB</td>
                            <td>{{$simonly->price}}</td>
                            <td>
                                <a href="{{route('simonly.show', $simonly->id)}}" class="btn btn-info btn-sm">
                                    <i href="" class="fas fa-search"> </i>
                                </a>
                                <a href="{{route('simonly.edit', $simonly->id)}}" class="btn btn-primary btn-sm">
                                    <i href="" class="fas fa-pencil-alt"> </i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['simonly.destroy', $simonly->id],'style'=>'display:inline']) !!}
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