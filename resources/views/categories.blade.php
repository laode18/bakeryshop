@extends('layouts.app')
@section('content')

<div class="collection_text">Category</div>

<div id="product-list">
		<div class="container">
	@foreach($categories as $idx => $category)
		@if ($idx == 0 || $idx % 3 == 0)
			<div class="row mt-4">
				@endif

			<div class="col">
				<div class="card">
					<img src="{{ route('categories.image', ['imageName' => $category['image_url']]) }}" class="card-img-top" alt="">
					<center>
					<div class="card-body">
						<img src="{{ url('storage/images/'.$category->image_url) }}" class="img-thumbnail" width="300" height="300">
						<h5 class="card-title">
								{{ $category->name }}
						</h5>
						<p class="card-text">
							{{ $category->slug }}
						</p>
						<a href="{{ url('product/'.$category->slug) }}" class="btn btn-primary">Cek</a>
					</div>
					</center>
				</div>
			</div>

			@if ($idx > 0 && $idx % 3 == 2)
			</div>
		@endif
	@endforeach
	</div>
	</div>
<br />
<br />

@endsection