@extends('layouts.back.inc.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col">
			<h2>Tambah Product</h2>
			<br />
			@if(count($errors))
			<div class="form-group">
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
			@endif
			<br />
			<form action="{{ route('admin.products.store') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Nama Produk</label>
					<input type="text" name="name" class="form-control" placeholder="Nama Produk">
				</div>
				<div class="form-group">
					<label>Id Kategori</label>
					<input type="number" name="id_category" class="form-control" placeholder="Id Kategori">
				</div>
				<br />
				<div class="form-group">
					<label>Harga</label>
					<input type="number" name="price" class="form-control" placeholder="Harga">
				</div>
				<br />
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea id="ckview" name="description" class="form-control" rows="3" placeholder="Deskripsi"></textarea>
				</div>
				<div class="form-group">
					<label>Status</label>
					<input type="number" name="status" class="form-control" placeholder="Status">
				</div>
				<br />
				<div class="form-grup">
					<label>Upload</label>
					<input type="file" name="image_url" class="form-control">
				</div>
				<br />
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>

@endsection