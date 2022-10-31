<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i < 200; $i++){
            $produto = Produto::create([
        "nome" => fake()->words(2,true),
        "codigo" => fake()->randomNumber(8,true),
        "preco" => fake()->randomFloat(8,true),
        "estoque" => fake()->randomNumber(8,true),
        "descricao" => fake()->paragraph(8,true)
    ]);
     $produto->save();
    }
    }
}
