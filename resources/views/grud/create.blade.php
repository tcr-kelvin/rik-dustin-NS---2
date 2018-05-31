@extends ('layout')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'user.store', 'method'=>'POST']) }}
            @include('grud.form_master')
            {{ form::close() }}
        </div>
    </div>
@endsection