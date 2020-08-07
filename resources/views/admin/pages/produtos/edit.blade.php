@extends('admin.layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar Produto {{ $id }}</h1>
    <form action="{{ route('produtos.update', $id) }}" method="post">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" id="nome" placeholder="Nome" required>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" required>
        <button type="submit">Enviar</button>    
    </form>
@endsection