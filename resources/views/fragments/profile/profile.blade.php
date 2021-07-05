@extends('layouts.main')
@section('title', 'Principal')

@section('content')
<div class="container ">
    <h2>Mi Perfil</h2>
      <hr>
	<div class="row justify-content-center">
    <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Nombres</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->firstname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Apellidos</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->lastname }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Rol</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        @if(Auth::user()->role->name =='visitor')
                            Visitante
                        @else
                            Administrador
                        @endif
                    </div>
                  </div>
                  <hr>
                  <div class="row justify-content-center">
                    <div class="col-4">
                        <a  href="#" class="btn btn-success" style="display: block">Editar <br> Información</a>
                    </div>
                    <div class="col-4">
                        <a href="/admin" class="btn btn-primary" style="display: block">Regresar <br> a Inicio</a>
                    </div>
                  </div>
                </div>
              </div>
  </div>
</div>
<hr>
@endsection
