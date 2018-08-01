<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Garcom;
class GarcomTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testNomeApenasComAlfabeticos()
    {
        $this->visit('garcoms/create')
             ->type(125, "nome")
             ->press('Cadastrar')
             ->notSeeInDatabase('garcoms', ['nome' => 125]);
    }
    public function testNomeComMenosQueTresCaracteres()
    {

        $this->visit('garcoms/create')
             ->type('a', 'nome')
             ->press('Cadastrar')
             ->notSeeInDatabase('garcoms', ['nome' => 'a']);
    }
    public function testNomeRepetido()
    {
        $this->visit('garcoms/create')
             ->type('icaro', 'nome')
             ->press('Cadastrar')
             ->visit('garcoms/create')
             ->type('icaro', 'nome')
             ->press('Cadastrar');
        $this->assertEquals(1, Garcom::all()->where('nome', 'icaro')->count());     
    }
}
