<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();

        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder {
    public function run(): void
    {
        DB::insert('insert into produtos
        (nome, qtd_estoque, descricao, marca, modelo, valor)
        values (?, ?, ?, ?, ?, ?)', array('Geladeira', 5, 'Frostfree',
        'marca', 'modelo', 2500.00));

        DB::insert('insert into produtos
        (nome, qtd_estoque, descricao, marca, modelo, valor)
        values (?, ?, ?, ?, ?, ?)', array('Microondas', 10, 'Microondas',
         'marca','modelo', 2500.00));

        DB::insert('insert into produtos
        (nome, qtd_estoque, descricao, marca, modelo, valor)
        values(?, ?, ?, ?, ?, ?)', array('Fogão', 5, 'Fogão',
         'marca', 'modelo', 2500.00));
        
    }
}
