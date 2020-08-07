@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="nome" id="nome" placeholder="Nome" required>
        <input type="text" name="descricao" id="descricao" placeholder="Descrição" required>
        <button type="submit">Enviar</button>    
    </form>
@endsection