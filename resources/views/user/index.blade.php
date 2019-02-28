<!DOCTYPE html>
<html>
<head>
	<title>List user</title>
</head>
<body>
	<div>
		<a href="{{ url('users/create') }}">Add New</a>
	</div>
	<table>
		<thead>
			<tr>
				<th>stt</th>
				<th>email</th>
				<th>password</th>
				<th>Edit</th>
				<th>Delete</th>

			</tr>
		</thead>
		<?php $i = 0; ?>
		<tbody>
			@foreach($userList as $user)
			<tr>
				<td><?php echo ++$i; ?></td>
				<td><p>{{$user->email}}</p></td>
				<td><p>{{$user->password}}</p></td>
				<td><a href="{{ url('users') }}/{{$user->id}}/edit">Edit</a></td>
				<td>
					<form action="{{ url('users/'.$user->id) }}" method="POST">
						@csrf
						{{ method_field('DELETE') }}
						<button type="submit">
							DELETE
						</button>
						
					</form>

				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>