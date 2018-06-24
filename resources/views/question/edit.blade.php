@extends('layout.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($question,['route'=>['question.update',$question->id],'method'=>'PATCH']) }}
            @include('question.Form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection