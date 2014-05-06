@extends('layouts.scaffold')

@section('main')

<h1>All Acessos</h1>

<p>{{ link_to_route('acessos.create', 'Add New Acesso', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($acessos->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($acessos as $acesso)
				<tr>
					<td>{{{ $acesso->name }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('acessos.destroy', $acesso->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('acessos.edit', 'Edit', array($acesso->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no acessos
@endif

@stop
