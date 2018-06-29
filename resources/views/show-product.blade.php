@extends('layout')

@section('content')
<div class="container">
<div class="row">
		<div class="col-12 col-md-4 col-lg-4">
			<div class="card" style="width: 18rem;">
				@if (!$product->image)
					<img src="/images/default.png" width="100" alt="">
				@else
					<img src="/storage/pdtos/{{ $product->image }}" width="100"  alt="">
				@endif
				<div class="card-body">
					<h5 class="card-title">{{ $product->name }}</h5>
					<p class="card-text"> $ {{ $product->price }}</p>
					<p class="card-text">{{ $product->description}}</p>
					<a href="/product/{{$product->id}}/edit" class="btn btn-primary">EDIT</a>
				</div>
			</div>
		</div>
	</div>
	</div>

@endsection
