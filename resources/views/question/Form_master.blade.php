<div class="row">
    <div class="col-sm-2">
        {!! form::label('title','title') !!}
    </div>
    <div class="col-sm-10">
        <div class="form-group {{ $errors->has('title') ? 'has-error' : "" }}">
            {{ form::text('title',NULL, ['class'=>'form-control', 'id'=>'title', 'placeholder'=>'title']) }}
            {{ $errors->first('title', '<p class="help-block">:message</p>') }}
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

<div class="form-group">
    {{ form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>