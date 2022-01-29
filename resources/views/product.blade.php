@extends('layouts.app')
@section('content')

<div class="collection_text">Product</div>

<div class="container">
<div class="wrap-shop-control">
	<h1 class="shop-title">{{ $category->name }}</h1>
	<div class="wrap-right">
		<div class="select">
			<select id="order_field" class="form-control">
                <option value="" disabled selected>Sort By:</option>
                <option value="best_seller">Best Seller</option>
                <option value="terbaik">Terbaik</option>
                <option value="termurah">Termurah</option>
                <option value="termahal">Termahal</option>
                <option value="terbaru">Terbaru</option>
            </select>
		</div>
	</div>
</div>
</div>

<br>
	<div class="container">
	<p><span class="font-weight-bold">{{ count($products) }}</span> Products found</p>
	</div>
	<div id="product-list">
		<div class="container">
	@foreach($products as $idx => $product)
		@if ($idx == 0 || $idx % 4 == 0)
			<div class="row mt-4">
				@endif

			<div class="col">
				<div class="card">
					
					<div class="card-body">
						<center>
						<img src="{{ url('storage/images/'.$product->image_url) }}" class="img-thumbnail" width="300" height="300">
						<h5 class="card-title">
							<a href="{{ route('products.show', ['id' => $product['id']]) }}">
								{{ $product->name }}
							</a>
						</h5>
						<p class="card-text">
							Rp. {{ $product->price }}
						</p>
						<a href="{{ route('carts.add', ['id' => $product->id]) }}" class="btn btn-primary">Beli</a>
					</div>
					</center>
				</div>
			</div>

			@if ($idx > 0 && $idx % 4 == 3)
			</div>
		@endif
	@endforeach
	</div>
	</div>
<br />
<br />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#order_field').change(function() {
                $.ajax({
                    type: 'GET',
                    url: '/product/{slug}',
                    data: {
                        order_by: $(this).val()
                    },
                    dataType: 'json',
                    success: function(data) {
                        var products = '';
                        $.each(data, function(idx, product) {
                            if (idx == 0 || idx % 4 == 0) {
                                products += '<div class="row mt-4">';
                            }

                            products +=
                                '<div class="col">' +
                                '<div class="card">' +
                                '<div class="card-body">' +
                                '<center>' +
                                '<img src="/storage/images/' + product.image_url +
                                '"class="img-thumbnail" width="300" height="300">' +
                                '<h5 class="card-title">' +
                                '<a href="/products/' + product.id + '">' + product
                                .name + '</a>' +
                                '</h5>' +
                                '<p class="card-text">' +
                                product.price +
                                '</p>' +
                                '<a href="/carts/add/' + product.id +
                                '"class="btn btn-primary">Beli</a>' +
                                '</center>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                                if(idx > 0 && idx % 4 == 3) {
                                products += '</div>';
                            }


                        });
                        $('#product-list').html(products);
                    },
                    error: function(data) {
                        alert('Unable to handle request');
                    }
                })
            });
        });
    </script>
@endsection