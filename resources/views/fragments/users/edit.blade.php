@extends('layouts.main')
@section('title', 'Editar Usuario')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 pt-5 pb-5">
            <div class="card">
                <div class="card-body px-5 py-5">
                    <h4 class="text-center mb-4">Editar Información del Usuario</h4>
                    <form action="{{ route('admin/update-user/'.$user->id_account) }}" method="post">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" name="firstname"
                                class="form-control @error('firstname') is-invalid @enderror" id="firstname_input"
                                placeholder="Nombres" value="{{ old('firstname') }}">
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
                                placeholder="Apellidos" value="{{ old('lastname') }}">
                            <label for="lastname_input">Apellidos</label>
                            @error('lastname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email_input" placeholder="Correo electrónico" value="{{ old('email') }}">
                            <label for="email_input">Correo electrónico</label>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password_input"
                                placeholder="Contraseña">
                            <label for="password_input">Contraseña</label>
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="confirm_password"
                                class="form-control @error('confirm_password') is-invalid @enderror"
                                id="confirm_password_input" placeholder="Confirmar contraseña">
                            <label for="confirm_password_input">Confirmar contraseña</label>
                            @error('confirm_password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        @if ($isAdmin === true)
                        <div class="form-floating mb-3 input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="roles">Rol</label>
                            </div>
                            <select name="role" class="custom-select" id="roles">
                                <option selected>Elija uno ..</option>
                                @foreach( $roles as $role )
                                <option value="{{ $role->id_role }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Crear cuenta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
