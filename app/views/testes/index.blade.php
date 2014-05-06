@extends('layouts.scaffold')

@section('main')

<h1>All Testes</h1>

<p>{{ link_to_route('testes.create', 'Add New Testis', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($testes->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Nome</th>
				<th>Sobrenome</th>
				<th>Idade</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($testes as $teste)
				<tr>
					<td>{{{ $teste->nome }}}</td>
					<td>{{{ $teste->sobrenome }}}</td>
					<td>{{{ $teste->idade }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('testes.destroy', $teste->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('testes.edit', 'Edit', array($teste->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no testes
@endif

@stop
