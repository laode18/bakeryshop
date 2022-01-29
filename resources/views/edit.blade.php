<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BakeryShop - Edit</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<br/>
	<br/>	
	<a href="/datauser">
		<button class="btn btn-primary"> < Kembali</button>
	</a>
	<br/>
	<br/>
	<br/>
	<h2 align="center">Edit Data User</h2>
	<br/>
	<br/>
	<br/>
	<div class="row">
	<div class="col-md-6">

	@foreach($user as $u)
	<form action="/datauser/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $u->id }}">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama</label>
          <input type="text" class="form-control" name="name" required="required" value="{{ $u->name }}"><br/>
        </div>

		<div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="text" class="form-control" name="email" required="required" value="{{ $u->email }}"><br/>
        </div>
		
		<div class="form-group">
          <label for="exampleFormControlInput1">Created_At</label>
          <input type="text" class="form-control" name="created_at" required="required" value="{{ $u->created_at }}"><br/>
        </div>
		
		<input type="submit" class="btn btn-secondary" name="Simpan Data">
		<br/>
		<br/>
	</form>
	@endforeach

	</div>
	</div>
	</div>
</body>
</html>