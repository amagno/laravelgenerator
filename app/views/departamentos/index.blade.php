@extends('layouts.scaffold')

@section('main')

<h1>All Departamentos</h1>

<p>{{ link_to_route('departamentos.create', 'Add New Departamento', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($departamentos->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($departamentos as $departamento)
				<tr>
					<td>{{{ $departamento->name }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('departamentos.destroy', $departamento->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('departamentos.edit', 'Edit', array($departamento->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no departamentos
@endif

@stop
