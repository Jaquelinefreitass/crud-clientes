@extends('layouts.app')
@section('content')
<h1>Cliente #{{ $cliente->id }}</h1>
<p><strong>Nome:</strong> {{ $cliente->nome }}</p>
<p><strong>Email:</strong> {{ $cliente->email }}</p>
<p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection