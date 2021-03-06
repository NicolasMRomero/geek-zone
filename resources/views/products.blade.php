@extends('layout')

@section('content')
    <div class="container">
        <a href="/product/create" class="btn btn-primary">CREAr NUEVO</a>
        <button type="button" class="btn btn-primary" onclick="Back()">VOLVER</button>
        <table class="table table-striped table-bordered" border="0" width="100%" align="center">
            <thead>
                <tr style="text-align:center">
                    <td>Nombre</td>
                    <td>Precio</td>
                    <td>Descripción</td>
                    <td>Imagen</td>
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
                      <a class="btn btn-primary btn-sm" href="/product/{{$product->id}}/edit">EDITAR</a>
                        <form method="POST" action="/product/{{$product->id}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-primary btn-sm" href="/product/{{$product->id}}/edit">BORRAR</button>
                          <a class="btn btn-primary btn-sm" href="/product/{{$product->id}}">VER</a>
                          </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $products->links() }}
    </div>



    <script type="text/javascript">
      pag = document.getElementsByTagName('ul')[1];
      pag.setAttribute('class', 'pagination justify-content-center');

      function Back() {
        window.history.back();
      }
    </script>
@endsection
