@extends('layouts.main')
@section('title', 'Iniciar sesión')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5 pt-5 pb-5">
                <div class="card">
                    <div class="card-body px-5 py-5">
                        <h4 class="text-center mb-4">Ingreso al sistema</h4>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email_input" placeholder="ejemplo@dominio.com">
                                <label for="email_input">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit">Ingresar</button>
                                <a href="/registro" class="btn btn-secondary">Registarse</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection