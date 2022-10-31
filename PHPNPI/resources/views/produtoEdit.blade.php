@extends('layout.pagina')

@section('content')
<form action="{{route('produto.update',$produto->id)}}" method="post">
@csrf
@method("put")
<label for="nome">Nome</label>
<input type="text" name="nome" value="{{$produto -> nome}}">
<label for="codigo">Codigo</label>
<input type="text" name="codigo" value="{{$produto -> codigo}}">
<label for="preco">Preço</label>
<input type="text" name="preco" value="{{$produto -> preco}}">
<label for="estoque">Estoque</label>
<input type="number" name="estoque" value="{{$produto -> estoque}}">
{!! Form::label("descricao", "Descrção", []) !!}
{!! Form::textarea("descricao", $produto->descricao, ['required']) !!}
<button type="submit">salvar</button>
</form>

@endsection
