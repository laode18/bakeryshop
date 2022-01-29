<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>BakeryShop - Tambah</title>
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
	<h2 align="center">Tambah Data User</h2>
	<br/>
	<br/>
	<br/>
	<div class="row">
	<div class="col-md-6">

	<form action="/datauser/store" method="post">
		{{ csrf_field() }}
		<div class="form-group">
          <label for="exampleFormControlInput1">Id</label>
          <input type="number" class="form-control" name="id" required="required"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Name</label>
          <input type="text" class="form-control" name="name" required="required"><br/>
        </div>

		<div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input type="text" class="form-control" name="email" required="required"><br/>
        </div>

    <div class="form-group">
          <label for="exampleFormControlInput1">Password</label>
          <input type="text" class="form-control" name="password" required="required"><br/>
        </div>
		
		<div class="form-group">
          <label for="exampleFormControlInput1">Created_At</label>
          <input type="text" class="form-control" name="created_at" required="required"><br/>
        </div>

		<input type="submit" class="btn btn-secondary" name="Simpan Data">
		<br/>
		<br/>
	</form>

	</div>
	</div>
	</div>
</body>
</html>