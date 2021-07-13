@extends('layouts.main')
@section('title', 'Editar Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 pt-5 pb-5">
            <div class="card">
                <div class="card-body px-5 py-5">
                    <h4 class="text-center mb-4">Editar Información del Usuario</h4>
                    <form action="{{ url('/admin/update-user/'.$user->id_account) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-floating mb-3">
                            <input type="number" name="dni" disabled
                                class="form-control @error('dni') is-invalid @enderror" id="dni_input"
                                placeholder="Número de Cédula" value="{{ $user->dni }}">
                            <label for="firstname_input">Cédula</label>
                            @error('dni')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="firstname"
                                class="form-control @error('firstname') is-invalid @enderror" id="firstname_input"
                                placeholder="Nombres" value="{{ $user->firstname }}">
                            <label for="firstname_input">Nombres</label>
                            @error('firstname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="lastname"
                                class="form-control @error('lastname') is-invalid @enderror" id="lastname_input"
                                placeholder="Apellidos" value="{{  $user->lastname }}">
                            <label for="lastname_input">Apellidos</label>
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="address"
                                class="form-control @error('address') is-invalid @enderror" id="address_input"
                                placeholder="Dirección" value="{{ $user->address }}">
                            <label for="address_input">Dirección</label>
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                id="phone_input" placeholder="Número Telefónico" value="{{ $user->phone }}">
                            <label for="phone_input">Número Telefónico</label>
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Actualizar Datos</button>
                        </div>
                    </form>
                    <hr>
                    <h4 class="text-center mb-4">Actualizar Contraseña</h4>
                    <form action="{{ url('/admin/update-password/'.$user->id_account) }}" method="post">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-floating mb-3">
                            <input type="password" name="oldPassword"
                                class="form-control @error('password') is-invalid @enderror" id="oldPassword"
                                placeholder="Contraseña Antigua">
                            <label for="oldPassword">Contraseña Antigua</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="newPassword"
                                class="form-control @error('confirm_password') is-invalid @enderror"
                                id="newPassword" placeholder="Nueva Contraseña">
                            <label for="newPassword">Nueva Contraseña</label>
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit">Actualizar Contraseña</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
