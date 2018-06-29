@extends('layout')

@section('content')
    <div class="container">
        <a href="/product/create" class="btn btn-primary">CREATE NEW</a>
        <button type="button" class="btn btn-success" onclick="Back()">VOLVER</button>
        <table class="table table-striped table-bordered" border="0" width="100%" align="center">
            <thead>
                <tr style="text-align:center">
                    <td>Name</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td>Image</td>
                    <td></td>
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
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">ZOOM</button>
                      </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
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
      pag = document.getElementsByTagName('ul')[1];
      pag.setAttribute('class', 'pagination justify-content-center');

      function Back() {
        window.history.back();
      }
    </script>
@endsection
