@extends('layouts.scaffold')

@section('main')

<h1>Show Attemail</h1>

<p>{{ link_to_route('attemails.index', 'Return to All attemails', array('class'=>'btn btn-lg btn-primary')) }}</p>

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
			<td>{{{ $attemail->email }}}</td>
					<td>{{{ $attemail->userid }}}</td>
					<td>{{{ $attemail->datarecebimento }}}</td>
					<td>{{{ $attemail->dataresposta }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('attemails.destroy', $attemail->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('attemails.edit', 'Edit', array($attemail->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
