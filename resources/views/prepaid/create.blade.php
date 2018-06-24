@extends ('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'prepaid.store', 'method'=>'POST']) }}
            @include('prepaid.form_master')
            {{ form::close() }}
            <a class="btn btn-primary" href="{{ route('prepaid.index') }}"> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
@endsection