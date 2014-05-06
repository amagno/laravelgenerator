@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Testis</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($teste, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('testes.update', $teste->id))) }}

        <div class="form-group">
            {{ Form::label('nome', 'Nome:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('nome', Input::old('nome'), array('class'=>'form-control', 'placeholder'=>'Nome')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('sobrenome', 'Sobrenome:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('sobrenome', Input::old('sobrenome'), array('class'=>'form-control', 'placeholder'=>'Sobrenome')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('idade', 'Idade:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'idade', Input::old('idade'), array('class'=>'form-control')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('testes.show', 'Cancel', $teste->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop