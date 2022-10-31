@extends('layout.pagina')

@section('content')
<form action="{{route('produtoCreate')}}" method="post">
@csrf
<label for="nome">Nome</label>
<input type="text" name="nome">
<label for="codigo">Codigo</label>
<input type="text" name="codigo">
<label for="preco">Preço</label>
<input type="text" name="preco">
<label for="estoque">Estoque</label>
<input type="number" name="estoque">
{!! Form::label("descricao", "Descrção", []) !!}
{!! Form::textarea("descricao", '', []) !!}
<button type="submit">salvar</button>
</form>

@endsection
