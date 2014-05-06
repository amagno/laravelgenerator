@extends('layouts.scaffold')

@section('main')

<h1>Show AtendimentoEmail</h1>

<p>{{ link_to_route('AtendimentoEmails.index', 'Return to All AtendimentoEmails', array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Email</th>
				<th>Userid</th>
				<th>Datarecebimento</th>
				<th>Dataresposta</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $AtendimentoEmail->email }}}</td>
					<td>{{{ $AtendimentoEmail->userid }}}</td>
					<td>{{{ $AtendimentoEmail->datarecebimento }}}</td>
					<td>{{{ $AtendimentoEmail->dataresposta }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('AtendimentoEmails.destroy', $AtendimentoEmail->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('AtendimentoEmails.edit', 'Edit', array($AtendimentoEmail->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
