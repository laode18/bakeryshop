@extends('layouts.back.inc.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col">
			<h2>Product</h2>
			<div>
				<a href="{{ route('admin.products.create') }}" class="btn btn-primary">Tambah Produk</a>
			</div>
			<br />
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead class="table-dark">
						<tr>
							<th><font color="white">Id</font></th>
							<th><font color="white">Nama</font></th>
							<th><font color="white">Price</font></th>
							<th><font color="white">Created at</font></th>
							<th width="25%"><font color="white">Image</font></th>
							<th><font color="white">Opsi</font></th>
						</tr>
					</thead>
					<tbody>
						@foreach($product as $p)
						<tr>
							<td>{{ $p->id }}</td>
							<td>{{ $p->name }}</td>
							<td>{{ $p->price }}</td>
							<td>{{ $p->created_at }}</td>
							<td class="p-0">
								<img src="{{ url('storage/images/'.$p->image_url) }}" class="img-thumbnail" width="200" height="200">
							</td>
							<td>
								<a href="/productsadmin/edit/{{ $p->id }}">Edit</a>
								|
								<a href="/productsadmin/{{ $p->id }}">Hapus</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection