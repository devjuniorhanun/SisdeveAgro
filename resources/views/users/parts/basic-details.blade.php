<form
    action="{{ route('users.update', $user->id) }}"
    method="POST">
    @csrf
    @method('PUT')

    <fieldset>
        <legend>Cadastro Básico</legend>
        <div class="row">


            <div class="mb-3 col-6 col-md-4">
                <label class="form-label">Nome.:</label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name') ?? $user->name }}"
                    class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 col-6 col-md-4">
                <label class="form-label">Email.:</label>
                <input
                    type="text"
                    name="email"
                    value="{{ old('email') ?? $user->email }}"
                    class="form-control @error('email') is-invalid @enderror">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3 col-6 col-md-4">
                <label class="form-label">Senha.:</label>
                <input
                    type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>
    </fieldset>
</form>