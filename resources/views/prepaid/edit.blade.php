@extends('layout.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($prepaid,['route'=>['prepaid.update',$prepaid->id],'method'=>'PATCH']) }}
            @include('prepaid.Form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection