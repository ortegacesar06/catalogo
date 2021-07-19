@extends('layouts.admin')
@section('title', 'Registro de usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-7 pt-5 pb-5">
            <div class="text-right mb-3">
                <a href="/admin/users" class="btn btn-outline-primary pt-1 pb-1">Regresar al listado</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-4">{{ $name }}</h4>
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <label for="firstname_input">Cédula</label>
                            <input type="text" name="dni"
                                class="form-control @error('dni') is-invalid @enderror" id="dni_input"
                                placeholder="Número de Cédula" value="{{ old('dni') }}">
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
                                placeholder="Nombres" value="{{ old('firstname') }}">
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
                                placeholder="Apellidos" value="{{ old('lastname') }}">
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="address_input">Dirección</label>
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                id="address_input" placeholder="Dirección" value="{{ old('address') }}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="phone_input">Número Telefónico</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                id="phone_input" placeholder="Número Telefónico" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <label for="email_input">Correo electrónico</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email_input" placeholder="Correo electrónico" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="password_input">Contraseña</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password_input"
                                placeholder="Contraseña">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <label for="confirm_password_input">Confirmar contraseña</label>
                            <input type="password" name="confirm_password"
                                class="form-control @error('confirm_password') is-invalid @enderror"
                                id="confirm_password_input" placeholder="Confirmar contraseña">
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @if ($isAdmin === true)
                        <div class="form-floating mb-3">
                            <label for="roles">Rol</label>
                            <select name="role" class="form-control" id="roles">
                                <option selected>Elija uno ..</option>
                                @foreach( $roles as $role )
                                <option value="{{ $role->id_role }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary btn-block" type="submit">Crear cuenta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
