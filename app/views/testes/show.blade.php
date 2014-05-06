@extends('layouts.scaffold')

@section('main')

<h1>Show Testis</h1>

<p>{{ link_to_route('testes.index', 'Return to All testes', array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nome</th>
				<th>Sobrenome</th>
				<th>Idade</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
