@extends('layout.pagina')
@section('content')
    <a href="{{route('produtoCreate')}}"><button>criar</button></a>
    @foreach ($produtos as $produto)
    <a href="{{route('produto.show',$produto->id)}}">
    <h1>{{"Nome:" .$produto->nome}}</h1>
    </a>
    <br>
    @endforeach
@endsection

