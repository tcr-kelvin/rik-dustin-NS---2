@extends('layout.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($simonly,['route'=>['simonly.update',$simonly->id],'method'=>'PATCH']) }}
            @include('simonly.Form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection