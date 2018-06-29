@extends('layout')

@section('content')
    <div class="container">
        <a href="/product/create" class="btn btn-primary">CREATE NEW</a>
        <button type="button" class="btn btn-success" onclick="Back()">VOLVER</button>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td>Edit</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td> $ {{ $product->price / 100 }} </td>
                    <td>{{ $product->description }}</td>
                    <td>
                      @if (!$product->image)
                        <img src="/images/default.png" width="100" alt="">
                      @else
                        <img src="/storage/pdtos/{{ $product->image }}" width="100"  alt="">
                      @endif
                    </td>


                    <td>
                      <a class="btn btn-primary btn-sm" href="/product/{{$product->id}}/edit">EDIT</a>
                        <form method="POST" action="/product/{{$product->id}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" href="/product/{{$product->id}}/edit">DELETE</button>
                          <a class="btn btn-primary btn-sm" href="/product/{{$product->id}}">VIEW</a>
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>
    <script type="text/javascript">
    function Back() {
      window.history.back();
    }
    </script>
@endsection
