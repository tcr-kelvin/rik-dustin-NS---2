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
                        <td>title</td>
                        <td>description</td>
                        <td><a href="/question/create">+</a> </td>
                    </tr>
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$question->id}}</td>
                            <td>{{$question->title}}</td>
                            <td>{{substr($question->description,0,100).'...'}}</td>
                            <td>
                                <a href="{{route('question.show', $question->id)}}" class="btn btn-info btn-sm">
                                    <i href="" class="fas fa-search"> </i>
                                </a>
                                <a href="{{route('question.edit', $question->id)}}" class="btn btn-primary btn-sm">
                                    <i href="" class="fas fa-pencil-alt"> </i>
                                </a>
                                {!! Form::open(['method' => 'DELETE','route' => ['question.destroy', $question->id],'style'=>'display:inline']) !!}
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