@extends ('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'question.store', 'method'=>'POST']) }}
            @include('question.form_master')
            {{ form::close() }}
            <a class="btn btn-primary" href="/support"> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
@endsection