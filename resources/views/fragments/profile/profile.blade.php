@extends('layouts.admin')
@section('title', 'Perfil')

@section('content')
<div class="container ">
  <div class="row justify-content-center">
    <div class="col-7 pt-5 pb-5">
      <div class="card">
        <div class="card-body">
          <h4 class="mb-4">Mi perfil</h4>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Nombres:</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{ Auth::user()->firstname }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Apellidos:</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{ Auth::user()->lastname }}
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <h6 class="mb-0">Email:</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                {{ Auth::user()->email }}
            </div>
          </div>
          <hr>
          <div class="row mb-4">
            <div class="col-sm-3">
              <h6 class="mb-0">Rol:</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                @if(Auth::user()->role->name =='visitor')
                    Visitante
                @else
                    Administrador
                @endif
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-6">
                <a  href="#" class="btn btn-success btn-block pt-1 pb-1">Editar Información</a>
            </div>
            <div class="col-6">
                <a href="/admin" class="btn btn-primary btn-block pt-1 pb-1">Regresar a Inicio</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<hr>
@endsection
