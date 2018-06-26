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
        {!! form::label('description','description') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('description') ? 'has-error' : "" }}">
            {{ form::text('description',NULL, ['class'=>'form-control', 'id'=>'description', 'placeholder'=>'description']) }}
            {{ $errors->first('description', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('sms','sms') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('sms') ? 'has-error' : "" }}">
            {{ form::text('sms',NULL, ['class'=>'form-control', 'id'=>'sms', 'placeholder'=>'sms']) }}
            {{ $errors->first('sms', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('callmins','callmins') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('callmins') ? 'has-error' : "" }}">
            {{ form::text('callmins',NULL, ['class'=>'form-control', 'id'=>'callmins', 'placeholder'=>'callmins']) }}
            {{ $errors->first('callmins', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        {!! form::label('data','data') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('data') ? 'has-error' : "" }}">
            {{ form::text('data',NULL, ['class'=>'form-control', 'id'=>'data', 'placeholder'=>'data']) }}
            {{ $errors->first('data', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        {!! form::label('price','price') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('price') ? 'has-error' : "" }}">
            {{ form::text('price',NULL, ['class'=>'form-control', 'id'=>'price', 'placeholder'=>'price']) }}
            {{ $errors->first('price', '<p class="help-block">:message</p>') }}
        </div>
    </div>
</div>

<div class="form-group">
    {{ form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>