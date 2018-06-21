@extends("layout")

@section("content")

	<div class="container">

		<h1>{{ $product->name }}</h1>

		<img src="/{{ $product->image }}" width="250px">

		<p>{{ $product->description }}</p>
		<p>{{ $product->price / 100 }} $</p>
	</div>

@endsection
