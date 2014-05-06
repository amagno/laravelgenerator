@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create User</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'users.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('username', 'Username:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('username', Input::old('username'), array('class'=>'form-control', 'placeholder'=>'Username')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('password', 'Password:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('password', Input::old('password'), array('class'=>'form-control', 'placeholder'=>'Password')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Email:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('email', Input::old('email'), array('class'=>'form-control', 'placeholder'=>'Email')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('firstname', 'Firstname:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('firstname', Input::old('firstname'), array('class'=>'form-control', 'placeholder'=>'Firstname')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('lastname', 'Lastname:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('lastname', Input::old('lastname'), array('class'=>'form-control', 'placeholder'=>'Lastname')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('departamento_id', 'Departamento_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('departamento_id', $dpto,  null, array('class' => 'form-control')) }}
              {{----- Form::input('number', 'departamento_id', Input::old('departamento_id'), array('class'=>'form-control')) ----}}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('acesso_id', 'Acesso_id:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('acesso_id', $acs, null, array('class' => 'form-control')) }}
              {{--- Form::input('number', 'acesso_id', Input::old('acesso_id'), array('class'=>'form-control')) ----}}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('enabled', 'Enabled:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::checkbox('enabled') }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

@stop


