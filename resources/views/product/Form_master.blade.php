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
        {!! form::label('imagepath','imagepath') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('imagepath') ? 'has-error' : "" }}">
            {{ form::text('imagepath',NULL, ['class'=>'form-control', 'id'=>'imagepath', 'placeholder'=>'imagepath']) }}
            {{ $errors->first('imagepath', '<p class="help-block">:message</p>') }}
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