@extends('layout')

@section('content')
<div class="container-perfil">
 <img class="banner-perfil" src="/images/banner-death-star.jpg" alt="perfil">
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
              <button id="stylesheet1" class=" btn btn-primary">DEFAULT THEME</button>
              <button id="stylesheet2" class="btn btn-primary">DARK THEME</button>
              <br>
              <form class="" action="{{ url('/logout') }}" method="post">
                {{ csrf_field() }}
                <input class="btn btn-primary" type="submit" value="CERRAR SESION">
              </form>
            </ul>
          </div>
        <div class="card-datos col-xs-12 col-lg-9">
          <div class="col-12">
            <h2 class="titulo-perfil">Datos Personales</h2>
            <br>
          </div>
          <div class="row">
            <div class="card-datos col-6">
              <ul >
                <li><h4><strong> Name:</strong> {{ Auth::user()->name }}</h4></li>
                <li><h4> <strong>Email:</strong> {{ Auth::user()->email }}</h4> </li>
              </ul>
            </div>
            <div class="card-datos col-6">
              <ul >
                <li><h4> <strong>Country:</strong> {{ Auth::user()->country }}</h4></li>
                <li><h4> <strong>State:</strong> {{ Auth::user()->state }}</h4> </li>
              </ul>
            </div>
          </div>
          <div class="col-12">
            <h1 class="text-center productos">MIS PRODUCTOS</h1>
          </div>
          <div class="row productos">
            <div class="col-12 col-md-4 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-prod-en-perfil" src="/images/star-wars/robot-BB-8.jpeg" width="100" alt="">
                  <div class="card-body">
                    <h5 class="card-title">BB-8</h5>
                    <p class="card-text">Robot BB-8, 2-In-1 Star Wars The Last Jedi.</p>
                    <a href="/product/create"  class="btn btn-primary">Edit Product</a>
                  </div>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top img-prod-en-perfil" src="images/star-wars/darth-holografica.jpeg" alt="darth-vader">
                <div class="card-body">
                  <h5 class="card-title">Funko Darth Vader</h5>
                  <p class="card-text">Funko holográfico de Darth Vader.</p>
                  <a href="/product/create" class="btn btn-primary">Edit Product</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top img-prod-en-perfil" src="images/star-wars/mochila.jpeg" alt="mochila-starwars">
                <div class="card-body">
                  <h5 class="card-title">Mochila Star Wars</h5>
                  <p class="card-text">Mochila estampada The Last Jedi.</p>
                  <a href="/product/create"  class="btn btn-primary">Edit Product</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <script type="text/javascript">

    function changestylesheet(sheet){
      var stylesheet = document.getElementById('stylesheet');
      stylesheet.setAttribute('href', sheet);
    }

    function initate() {
    var style1 = document.getElementById("stylesheet1");
    var style2 = document.getElementById("stylesheet2");

    style1.onclick = function () { changestylesheet("{{ asset('css/style.css') }}") };
    style2.onclick = function () { changestylesheet("{{ asset('css/dark.css') }}"); };
    }

    window.onload = initate;
  </script>


@endsection
