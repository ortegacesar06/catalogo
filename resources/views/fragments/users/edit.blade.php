@extends('layouts.admin')
@section('title', 'Editar Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 pt-5 pb-5">
            <div class="text-right mb-3">
                <a href="/admin/users" class="btn btn-outline-primary pt-1 pb-1">Regresar al listado</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4">Editar Información del Usuario</h4>
                    <form action="{{ url('/admin/update-user/'.$user->id_account) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-floating mb-3">
                            <label for="firstname_input">Cédula</label>
                            <input type="text" name="dni" disabled
                                class="form-control @error('dni') is-invalid @enderror" id="dni_input"
                                placeholder="Número de Cédula" value="{{ $user->dni }}">
                            @error('dni')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="firstname_input">Nombres</label>
                            <input type="text" name="firstname"
                                class="form-control @error('firstname') is-invalid @enderror" id="firstname_input"
                                placeholder="Nombres" value="{{ $user->firstname }}">
                            @error('firstname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="lastname_input">Apellidos</label>
                            <input type="text" name="lastname"
                                class="form-control @error('lastname') is-invalid @enderror" id="lastname_input"
                                placeholder="Apellidos" value="{{  $user->lastname }}">
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="address_input">Dirección</label>
                            <input type="text" name="address"
                                class="form-control @error('address') is-invalid @enderror" id="address_input"
                                placeholder="Dirección" value="{{ $user->address }}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="phone_input">Número Telefónico</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                id="phone_input" placeholder="Número Telefónico" value="{{ $user->phone }}">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-block" type="submit">Actualizar Datos</button>
                        </div>
                    </form>
                    <hr>
                    <h4 class="mb-4">Actualizar Contraseña</h4>
                    <form action="{{ url('/admin/update-password/'.$user->id_account) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-floating mb-3">
                            <label for="oldPassword">Contraseña Antigua</label>
                            <input type="password" name="oldPassword"
                                class="form-control @error('password') is-invalid @enderror" id="oldPassword"
                                placeholder="Contraseña Antigua">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="newPassword">Nueva Contraseña</label>
                            <input type="password" name="newPassword"
                                class="form-control @error('confirm_password') is-invalid @enderror"
                                id="newPassword" placeholder="Nueva Contraseña">
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-block" type="submit">Actualizar Contraseña</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
