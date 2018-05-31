<div class="row">
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

<div class="row">
    <div class="col-sm-2">
        {!! form::label('admin','admin') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('admin') ? 'has-error' : "" }}">
            {{ form::text('admin',NULL, ['class'=>'form-control', 'id'=>'admin', 'placeholder'=>'admin-right']) }}
            {{ $errors->first('admin', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>