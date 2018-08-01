<?php

use Illuminate\Database\Seeder;
use App\Produto;
class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Antartica',
            'valor' => 15,
        ]);
    }
}
