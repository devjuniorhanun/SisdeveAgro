@extends('layouts.default')

@section('content')
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <fieldset>
        <legend>Adicionar Usuário</legend>
        <div class="row">
            <div class="mb-3 col-6 col-md-4">
                <label class="form-label" for="name">Nome.:</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 col-6 col-md-4">
                <label class="form-label" for="email">Email.:</label>
                <input
                    type="text"
                    name="email"
                    value="{{ old('email') }}"
                    id="email"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 col-6 col-md-4">
                <label class="form-label" for="password">Senha.:</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control @error('password') is-invalid @enderror">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Adicionar</button>
            </div>
        </div>
    </fieldset>
</form>
@endsection