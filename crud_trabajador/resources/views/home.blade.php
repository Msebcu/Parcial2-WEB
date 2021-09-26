@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombres</label>
                <input type="Nombre" class="form-control" id="exampleFormControlInput1" placeholder="Juan Carlos">
              </div>
              <div class="mb-3">
                <label for="Nombre" class="form-label">Apellidos</label>
                <input type="Nombre" class="form-control" id="exampleFormControlInput1" placeholder="Plata">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Dirección</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <button type="button" class="btn btn-primary">
                  <li class="fas fa-user-plus"></li>
                  Registrar
              </button>

        </div>
    </div>
</div>
@endsection
