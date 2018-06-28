@extends('layout')

@section('content')
<div class="container-perfil">
 <img class="banner-perfil" src="images/banner-death-star.png" alt="perfil">
  </div>
  <section class="container-avatar">
       <div class="row">
          <div class="card col-xs-12 col-lg-3 pr-3" style="width: 18rem;">
            <img class="card-img-top imagen-perfil" src="/storage/usuarios/{{ Auth::user()->image }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="perfil-nombre"></h5>

            </div>
            <ul class="list-group menu-perfil">
              <a href="/product/create" class="opcion-menu" >
                <li class="list-group-item ">CREAR PRODUCTO</li>
              </a>
              <a href="/product" class="opcion-menu" >
                <li class="list-group-item">VER PRODUCTOS</li>
              </a>
              <a href="#" class="opcion-menu">
                <li class="list-group-item">
                  <form class="" action="{{ url('/logout') }}" method="get">
                    {{ csrf_field() }}
                    <button type="submit" name="button" class="btn btn-link">
                      CERRAR SESIÓN
                    </button>
                  </form>
                </li>
              </a>

            </ul>
          </div>
        <div class="card-datos col-xs-12 col-lg-9">
          <div class="col-12">
            <h2 class="titulo-perfil">Datos Personales</h2>
          </div>
          <div class="card-datos">
           <ul >
              <li>Name: <p> {{ Auth::user()->name }}</p></li>
              <li>Email:<p> {{ Auth::user()->email }}</p> </li>
              <form class="" action="{{ route('password.email') }}" method="POST">
              <li>Password: <a class="btn-links" href="{{ route('password.request') }}">clic here</a> </li>
            </form>
              </ul>
          </div>
          <div class="col-12">
            <h1 class="text-center productos">MIS PRODUCTOS</h1>
          </div>
          <div class="row productos">
            <div class="col-12 col-md-4 col-lg-4">
              @foreach ($products as $product)

                <div class="card" style="width: 18rem;">
                  <img class="card-img-top img-prod-en-perfil" src="@if (file_exists(public_path().'/img/'.$product->image))
                      <img src="{{ asset('img/'.$product->image) }}">
                  @else
                      <img src="{{ asset('img/logo.gif') }}">
                  @endif" alt="BB-8">
                  <div class="card-body">
                    <h5 class="card-title">BB-8</h5>
                    <p class="card-text">Robot BB-8, 2-In-1 - Star Wars The Last Jedi.</p>
                    <a href="#" class="btn btn-primary">Editar Producto</a>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top img-prod-en-perfil" src="images/star-wars/darth-holografica.jpeg" alt="darth-vader">
                <div class="card-body">
                  <h5 class="card-title">Funko Darth Vader</h5>
                  <p class="card-text">Funko holográfico de Darth Vader.</p>
                  <a href="#" class="btn btn-primary">Editar Producto</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top img-prod-en-perfil" src="images/star-wars/mochila.jpeg" alt="mochila-starwars">
                <div class="card-body">
                  <h5 class="card-title">Mochila Star Wars</h5>
                  <p class="card-text">Mochila estampada Star Wars The Last Jedi.</p>
                  <a href="#" class="btn btn-primary">Editar Producto</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script src="{{ asset('js/app.js') }}" defer></script>


@endsection
