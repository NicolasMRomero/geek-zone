@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="color:white; text-align:center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"  autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="country" class="col-md-3 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-9">
                                <select class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" id="countries"> <option value="">Choose</option></select>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="address" class="col-md-3 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-9">
                                <select class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" id="states"> <option value="">Choose</option> </select>

                                @if ($errors->has('state'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="city" class="col-md-3 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-9">
                                <select class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" id="cities"> <option value="">Choose</option> </select>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>

                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="image" class="col-md-3 col-form-label text-md-right">Image</label>

                            <div class="col-md-9">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image">

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('JOIN US') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
// AJAX para select de provincias Cities y Countries
var selectCountries = document.querySelector('#countries');
var selectStates = document.querySelector('#states');
var selectCities = document.querySelector('#cities');
// selectStates.style.display = 'none';
// selectCities.style.display = 'none';

var urlCountries = 'http://pilote.techo.org/?do=api.getPaises';
var urlStates ='http://pilote.techo.org/?do=api.getRegiones?idPais=';
var urlCities = 'http://pilote.techo.org/?do=api.getCiudades?idRegionLT=';

pedidoAJAX(urlCountries, cargarCountries);

function pedidoAJAX(url, callback){
  fetch(url)

      .then(function(response){
      return response.json();
      })

      .then(function(data){
       var data = data.contenido;

        callback(data)
      })

      .catch(function(error){
      console.error(`ERROR: ${error}`);
      });

};

function cargarCountries(countries){

  for (var n in countries){
    var option = `<option
    value = "${n}"> ${n} </option>`;
    selectCountries.innerHTML += option;
    }

    selectCountries.onchange = function () {
      // var idPais = this.value;
      //
      //   if (!idPais) {
      //       selectStates.style.display = 'none';
      //       selectCities.style.display = 'none';
      //     } else {
      //       selectStates.style.display = 'block';
      //     }

      if(selectStates.hasChildNodes()) selectStates.innerHTML = '';

      if(selectStates.hasChildNodes()) selectCities.innerHTML = '';

          if (this.value == 'Argentina') {
            pedidoAJAX(urlStates + 1, cargarStates);
          }





    };
}

function cargarStates(states){

  for (var n in states){
    var option = `<option
    value = "${states[n]}"> ${n} </option>`;
    selectStates.innerHTML += option;
    }

    selectStates.onchange = function () {
      var idRegion = this.value;

      selectCities.style.display = 'block';

      if(selectCities.hasChildNodes()) selectCities.innerHTML = '';


    pedidoAJAX(urlCities + idRegion, cargarCities);
  };

}

function cargarCities (cities) {
    for (var n in cities) {
      var option = `<option value="${cities[n]}"> ${n} </option>`;
      selectCities.innerHTML += option;
    }
}

</script>

@endsection
