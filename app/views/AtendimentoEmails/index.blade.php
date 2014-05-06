@extends('layouts.scaffold')

@section('main')

<h1>All AtendimentoEmails</h1>

<p>{{ link_to_route('AtendimentoEmails.create', 'Add New AtendimentoEmail', null, array('class' => 'btn btn-lg btn-success')) }}</p>

@if ($AtendimentoEmails->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Email</th>
				<th>Userid</th>
				<th>Datarecebimento</th>
				<th>Dataresposta</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($AtendimentoEmails as $AtendimentoEmail)
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
			@endforeach
		</tbody>
	</table>
@else
	There are no AtendimentoEmails
@endif

@stop
