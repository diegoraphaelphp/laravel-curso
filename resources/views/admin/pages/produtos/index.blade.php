@extends('admin.layouts.app')
@section('title', 'Gestão de Produtos')
@section('content')

    <h1>Exibindo os produtos</h1>

    <a href="{{ route('produtos.create') }}">Cadastrar</a>


    <hr>

    @component('admin.components.cards')
        @slot('title')
            <h1>Título Card</h1>
        @endslot

        Um card de exemplo
    @endcomponent

    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>

    @if (isset($arrProdutos))
        @forelse ($arrProdutos as $pro) 
            <p>{{ $pro }}</p>
        @empty
            <p>Não há dados para visualização.</p>    
        @endforelse
    @endif

    <hr>

    @if (isset($teste))
        <p>{{ $teste }}</p>
    @endif

@endsection

@push('styles')
    <style>
        .last{
            background: #CCC;
        }
    </style>
@endpush 

@push('scripts')
    <script>
        //alert('#teliga!');
    </script>
@endpush 