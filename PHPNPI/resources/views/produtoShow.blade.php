@extends('layout.pagina')

@section('content')
        <a href="{{route('produto.edit', $produto->id)}}">
            <button type="button">Editar produto</button>
            </a>
            <form action="{{route('produto.delete', produto ->id)}}" method="delete"></form>
            <button type="submit"></button>
            @csrf
            @method("delete")

        <br>
        <b class="titulo">{{"Nome: ".$produto->nome}}</b>
        <p>{{"Codigo: ".$produto->codigo}}</p>
        <p>{{"Preço: ".$produto->preco}}</p>
        <p>{{"Estoque: ".$produto->estoque}}</p>
        <p>{{"Descrição: ".$produto->descricao}}</p>
@endsection


