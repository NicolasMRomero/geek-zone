@extends('layout')

@section('content')

<div class="container ">
  <div class="row">
    <form method="POST" action="/product" enctype="multipart/form-data" class="col-10 col-sm-offset-2 form-control">
        {{ csrf_field() }}

        <h1 style="text-align:center">CREAR PRODUCTO</h1>

        <div class="form-group">
            <label for="name" class="col-form-label col-md-12" style="text-align:center">Nombre</label>

            <div class="col-md-12">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-form-label col-md-12" style="text-align:center">Descripción</label>

            <div class="col-md-12">
                <textarea
                    id="description"
                    type="text"
                    class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                    name="description"
                    required>{{ old('description') }}</textarea>

                @if ($errors->has('description'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="price" class="col-form-label col-md-12" style="text-align:center">Precio</label>

            <div class="col-md-12">
                <input
                    id="price"
                    type="text"
                    class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                    name="price"
                    value="{{ old('price') }}"
                    required>

                @if ($errors->has('price'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="category_id" class="col-form-label col-md-12" style="text-align:center">Categoría</label>

            <div class="col-md-12">

                <select
                  id="category_id"
                  class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                  name="category_id"
                  requiresd>

                  @foreach ($categories as $category)
                    <option value="{{ $category->id}}">{{ $category->name}}</option>
                  @endforeach
                </select>

                @if ($errors->has('category_id'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('category_id') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="image" class="col-form-label col-md-12" style="text-align:center">Imagen</label>

            <div class="col-md-12">
                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">

                @if ($errors->has('image'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group" style="text-align:center">

        <div class="col-md-12 p-4 " >
            <button type="submit" class="btn btn-success" >Crear</button>
            <button type="button" class="btn btn-success" onclick="Back()">Volver</button>
        </div>
      </div>

    </form>
  </div>
</div>


<script type="text/javascript">
function Back() {
  window.history.back();
}
</script>
@endsection
