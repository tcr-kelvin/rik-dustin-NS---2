@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($user,['route'=>['user.update',$user->id],'method'=>'PATCH']) }}
            @include('grud.form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection