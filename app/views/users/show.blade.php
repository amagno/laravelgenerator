@extends('layouts.scaffold')

@section('main')

<h1>Show User</h1>

<p>{{ link_to_route('users.index', 'Return to All users', array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Username</th>
				<th>Password</th>
				<th>Email</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Departamento_id</th>
				<th>Acesso_id</th>
				<th>Enabled</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $user->username }}}</td>
					<td>{{{ $user->password }}}</td>
					<td>{{{ $user->email }}}</td>
					<td>{{{ $user->firstname }}}</td>
					<td>{{{ $user->lastname }}}</td>
					<td>{{{ $user->departamento_id }}}</td>
					<td>{{{ $user->acesso_id }}}</td>
					<td>{{{ $user->enabled }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
