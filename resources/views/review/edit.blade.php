@extends('layout.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::model($review,['route'=>['review.update',$review->id],'method'=>'PATCH']) }}
            @include('review.Form_master')
            {{ Form::close() }}
        </div>
    </div>
@endsection