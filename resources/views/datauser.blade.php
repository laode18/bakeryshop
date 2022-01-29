@extends('layouts.back.inc.app')
@section('content')

	<div class="container">
	<br/>
	<br/>
	<br/>
	<h2 align="center">Data User</h2>
	<br/>
	<a href="/datauser/tambah">
		<button class="btn btn-success">+ Tambah User</button>
	</a>
	<br/>
	<br/>
	
	<div class="table-responsive">
	<table class="table table-bordered">
		<thead class="table-dark">
		<tr>
			<th><font color="white">Name</font></th>
			<th><font color="white">Email</font></th>
			<th><font color="white">Created_At</font></th>
			<th><font color="white">Opsi</font></th>
		</tr>
		</thead>
		@foreach($user as $u)
		<tbody>
		<tr>
			<td>{{ $u->name }}</td>
			<td>{{ $u->email }}</td>
			<td>{{ $u->created_at }}</td>
			<td>
				<a href="/datauser/edit/{{ $u->id }}">Edit</a>
				|
				<a href="/datauser/hapus/{{ $u->id }}">Hapus</a>
			</td>
		</tr>
		</tbody>
		@endforeach
	</table>
	</div>
	</div>
	<br/>
	<br/>
	<br/>

@endsection