@extends('layout')

@section('content')
<div class="container">
<div class="row">
		<div class="col-12 col-md-4 col-lg-4">
			<div class="card" style="width: 18rem;">
				<img class="card-img-top img-prod-en-perfil" src="/storage/pdtos/{{ $product->image }}" alt="{{ $product->name }}">
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
