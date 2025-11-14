@extends('layouts.default')
@section('page-title', 'Usuários')
@section('page-actions')
<a href="{{ route('users.create') }}" class="btn btn-primary">Adicionar</a>
@endsection
@section('content')
@session('status')
<div class="alert alert-success">
    {{ $value }}
</div>
@endsession

<form
    action="{{ route('users.index') }}"
    method="GET"
    class="mb-3"
    style="width: 300px">
    <div class="input-group input-group-sm">
        <input
            type="text"
            name="keyword"
            class="form-control"
            value="{{ request()?->keyword }}"
            placeholder="Pesquise por nome ou email">
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </div>
</form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-center">
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Editar</a>
                <form
                    action="{{ route('users.destroy', $user->id) }}"
                    method="POST"
                    onsubmit="return confirm('Tem certeza que deseja excluir este item?');"s
                    class="d-inline-flex">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $users->links() }}
@endsection