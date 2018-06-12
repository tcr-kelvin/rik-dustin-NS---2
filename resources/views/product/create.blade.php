@extends ('layout.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::open(['route'=>'product.store', 'method'=>'POST']) }}
            @include('product.form_master')
            {{ form::close() }}
            <a class="btn btn-primary" href="{{ route('product.index') }}"> <i class="fas fa-chevron-right"></i></a>
        </div>
    </div>
@endsection