@extends('layouts.scaffold')

@section('main')

<h1>All Attemails</h1>

<p>{{ link_to_route('attemails.create', 'Add New Attemail', null, array('class' => 'btn btn-lg btn-success')) }}</p>

<hr>
<h4>Buscar</h4>


@if ($attemails->count())
	<table class="table table-bordered table-striped">
		<thead>

			<tr>
				<th>Email <span class="glyphicon glyphicon-sort"></span></th>
				<th>Userid <span class="glyphicon glyphicon-sort"></span></th>
				<th>Datarecebimento <span class="glyphicon glyphicon-sort"></span></th>
				<th>Dataresposta <span class="glyphicon glyphicon-sort"></span></th>
			</tr>
            <tr>
                <th><input type="text" name="searchtable" class="form-control" placeholder="Buscar...."></th>
                <th><input type="text" name="searchtable" class="form-control" placeholder="Buscar...."></th>
                <th><input type="text" name="searchtable" class="form-control" placeholder="Buscar...."></th>
                <th><input type="text" name="searchtable" class="form-control" placeholder="Buscar...."></th>
            </tr>
		</thead>

		<tbody>
			@foreach ($attemails as $attemail)
				<tr class="data-row">
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
			@endforeach
		</tbody>
	</table>
@else
	There are no attemails
@endif

@stop
