@extends('layouts.back.inc.app')
@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col">
			<h2>Order</h2>
			
			<br />
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead class="table-dark">
						<tr>
							<th><font color="white">Id</font></th>
							<th><font color="white">User Id</font></th>
							<th><font color="white">Status</font></th>
							<th><font color="white">Harga</font></th>
							<th><font color="white">Alamat</font></th>
							<th><font color="white">Kode Pos</font></th>
							<th><font color="white">Nomor Telepon</font></th>
							<th><font color="white">Created at</font></th>
							<th><font color="white">Opsi</font></th>
						</tr>
					</thead>
					<tbody>
						@foreach($order as $o)
						<tr>
							<td>{{ $o->id }}</td>
							<td>{{ $o->user_id }}</td>
							<td>{{ $o->status }}</td>
							<td>{{ $o->total_price }}</td>
							<td>{{ $o->address }}, {{ $o->address_line2 }}, {{ $o->district }}, {{ $o->city }}, {{ $o->province }}</td>
							<td>{{ $o->zip_code }}</td>
							<td>{{ $o->phone_number }}</td>
							<td>{{ $o->created_at }}</td>

							<td class="actions" data-th="">
                                <a href="/ordersadmin/edit/{{ $o->id }}"><button class="btn btn-info btn-sm update-cart">Update</button></a>
                                <a href="/ordersadmin/{{ $o->id }}"><button class="btn btn-danger btn-sm mt-2 remove-from-cart">Remove</button></a>
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