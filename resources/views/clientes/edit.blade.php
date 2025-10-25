@extends('layouts.app')
@section('content')
<h1>Editar Cliente</h1>
<form method="POST" action="{{ route('clientes.update', $cliente) }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value="{{ old('nome', $cliente->nome) }}">
        @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $cliente->email) }}">
        @error('email') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control" value="{{ old('telefone', $cliente->telefone) }}">
        @error('telefone') <div class="text-danger">{{ $message }}</div> @enderror
    </div>

    <button class="btn btn-primary">Atualizar</button>
</form>
@endsection