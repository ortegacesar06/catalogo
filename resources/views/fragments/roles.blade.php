@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('save_roles') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="role_name">Nombre</label>
                        <input class="form-control" type="text" name="name" id="role_name">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar rol</button>
                </form>
            </div>
        </div>
    </div>
@endsection