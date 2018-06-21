@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-success">
                        <p>You are logged in as USER</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        {{ Form::model($user,['route'=>['user.update',$user->id],'method'=>'PATCH']) }}
                        @include('grud.form_master')
                        {{ Form::close() }}
                    </div>
                    <div class="col-sm-2">
                        {!! form::label('name','name') !!}
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : "" }}">
                            {{ form::text('name',NULL, ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'name']) }}
                            {{ $errors->first('name', '<p class="help-block">:message</p>') }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-2">
                        {!! form::label('email','email') !!}
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : "" }}">
                            {{ form::text('email',NULL, ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'email']) }}
                            {{ $errors->first('email', '<p class="help-block">:message</p>') }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        {!! form::label('password','password') !!}
                    </div>
                    <div class="col-sm-10">
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : "" }}">
                            {{ form::text('password',NULL, ['class'=>'form-control', 'id'=>'password', 'placeholder'=>'password']) }}
                            {{ $errors->first('password', '<p class="help-block">:message</p>') }}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {{ form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
