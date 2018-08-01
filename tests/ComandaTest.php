<?php
use App\Comanda;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ComandaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testNomeComMenosQueTresCaracteres()
    {
        $this->visit('comandas/create')
             ->type('a', 'nome')
             ->select(1, 'mesa_id')
             ->select(1, 'garcom_id')
             ->press('Cadastrar')
             ->notSeeInDatabase('comandas', ['nome'=>'a']);
    }
    public function testNomeComValorNumerico()
    {
        $this->visit('comandas/create')
             ->type(1, 'nome')
             ->select(1, 'mesa_id')
             ->select(1, 'garcom_id')
             ->press('Cadastrar')
             ->notSeeInDatabase('comandas', ['nome'=>1]);
    }
    public function testMesaNull()
    {
        $this->visit('comandas/create')
             ->type('test', 'nome')
             ->select(1, 'garcom_id')
             ->press('Cadastrar')
             ->notSeeInDatabase('comandas', ['nome'=>'test']);
    }
    public function testGarcomNull()
    {
        $this->visit('comandas/create')
             ->type('test', 'nome')
             ->select(1, 'mesa_id')
             ->press('Cadastrar')
             ->notSeeInDatabase('comandas', ['nome'=>'test']);

            
    }
}
//Comanda::all()->last()->id);
