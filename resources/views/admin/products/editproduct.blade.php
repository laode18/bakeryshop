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
	<a href="{{route('admin.products.index')}}">
		<button class="btn btn-primary"> < Kembali</button>
	</a>
	<br/>
	<br/>
	<br/>
	<h2 align="center">Edit Data Product</h2>
	<br/>
	<br/>
	<br/>
	<div class="row">
	<div class="col-md-6">

	@foreach($product as $p)
	<form action="{{route('admin.products.update')}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}">
        <div class="form-group">
          <label for="exampleFormControlInput1">Nama Produk</label>
          <input type="text" class="form-control" name="name" required="required" value="{{ $p->name }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Id Kategori</label>
          <input type="number" class="form-control" name="id_category" required="required" value="{{ $p->id_category }}"><br/>
        </div>

		<div class="form-group">
          <label for="exampleFormControlInput1">Harga</label>
          <input type="number" class="form-control" name="price" required="required" value="{{ $p->price }}"><br/>
        </div>
		
		<div class="form-group">
          <label for="exampleFormControlInput1">Deskripsi</label>
          <textarea id="ckview" class="form-control" name="description" required="required">{{ $p->description }}</textarea><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Status</label>
          <input type="number" class="form-control" name="status" required="required" value="{{ $p->status }}"><br/>
        </div>

    <div class="form-group">
          <label for="exampleFormControlInput1">Upload</label>
          <input type="file" class="form-control" name="image_url" required="required"><br/>
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