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
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">ZOOM</button>
					<button type="button" class="btn btn-primary" onclick="Back()">VOLVER</button>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">{{ $product->name }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					@if (!$product->image)
						<img src="/images/default.png" width="100" alt="">
					@else
						<img src="/storage/pdtos/{{ $product->image }}" width="100"  alt="">
					@endif
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	function Back() {
	  window.history.back();
	}
	</script>
@endsection
