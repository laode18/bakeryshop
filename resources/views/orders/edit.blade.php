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
	<a href="{{route('orders.index')}}">
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

	@foreach($order as $o)
	<form action="{{route('orders.update')}}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $o->id }}">
        <div class="form-group">
          <label for="exampleFormControlInput1">User Id</label>
          <input type="text" class="form-control" name="user_id" required="required" value="{{ $o->user_id }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Status</label>
          <input type="text" class="form-control" name="status" required="required" value="{{ $o->status }}"><br/>
        </div>

		<div class="form-group">
          <label for="exampleFormControlInput1">Harga</label>
          <input type="number" class="form-control" name="total_price" required="required" value="{{ $o->total_price }}"><br/>
        </div>
		
		<div class="form-group">
          <label for="exampleFormControlInput1">Alamat</label>
          <input type="text" class="form-control" name="address" required="required" value="{{ $o->address }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Desa/Kelurahan</label>
          <input type="text" class="form-control" name="address_line2" required="required" value="{{ $o->address_line2 }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Kecamatan</label>
          <input type="text" class="form-control" name="district" required="required" value="{{ $o->district }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Kota</label>
          <input type="text" class="form-control" name="city" required="required" value="{{ $o->city }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Provinsi</label>
          <input type="text" class="form-control" name="province" required="required" value="{{ $o->province }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Kode Pos</label>
          <input type="number" class="form-control" name="zip_code" required="required" value="{{ $o->zip_code }}"><br/>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput1">Nomor Telepon</label>
          <input type="text" class="form-control" name="phone_number" required="required" value="{{ $o->phone_number }}"><br/>
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