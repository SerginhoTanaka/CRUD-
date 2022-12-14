<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Contracts\View\View;

class ProdutoController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return View('produtosIndex')->with(["produtos" => $produtos]);
    }
    /**
     * mostar produto
     * parametro $id -> id produto a ser mostrado no banco
     */
    public function show($id){
        $produto = Produto::findOrfail($id);
        return View('produtoShow')-> with(["produto"=>$produto]);

    }

     public function create(){
        return View('produtoCreate');
    }

     public function edit($id){
        $produto = Produto::find($id);
        return View('produtoEdit',["produto" =>$produto]);
    }
/**
 * cria produto no banco
 */
    public function store(Request $request){
        $produto = Produto::create([
            "nome" => $request-> nome,
            "codigo" => $request-> codigo,
            "preco" => $request-> preco,
            "estoque" => $request-> estoque,
            "descricao" => $request-> descricao,

        ]);
        $produto->save();

        return $produto;
    }
/**
 * Atualiza um produto no banco
 */
    public function update(Request $request){
        $produto = Produto::findOrfail();

       $produto -> nome = $request ('nome');
       $produto -> codigo = $request('codigo');
       $produto -> preco = $request('preco');
       $produto -> estoque = $request ('estoque');
       $produto -> descricao = $request ('descricao');
       $produto->save();
       return $produto;
    }
/**
 *
 */
    public function delete(Request $request){
        $produto = Produto::findOrfail();
        $produto -> delete();

        return redirect(route('produto.index'),200);
    }
}
