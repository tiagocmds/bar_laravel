<?php
use App\Produto;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProdutoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;

    public function testNomeComUmCaracter()
    {

        $this->visit('produtos/create')
             ->type('h', 'nome')
             ->type(15, 'valor')
             ->press('Cadastrar')
             ->notSeeInDatabase('produtos', ['nome' => 'h'])
             ->seePageIs('produtos/create');
    }
 
    public function testNomeRepetido()
    {

        $this->visit('produtos/create')
             ->type('chocolate', 'nome')
             ->type(15, 'valor')
             ->press('Cadastrar')
             ;
        $this->visit('produtos/create')
             ->type('chocolate', 'nome')
             ->type(15, 'valor')
             ->press('Cadastrar')
             ;     
        $this->assertEquals(1, Produto::all()->where('nome', 'chocolate')->count()); 
           
    }
   
    public function testNomeNull()
    {

        $this->visit('produtos/create')
             ->type(null, 'nome')
             ->type(15, 'valor')
             ->press('Cadastrar')
             ->notSeeInDatabase('produtos', ['nome' => null])
             ->seePageIs('produtos/create');
    }
    public function testValorNegativo()
    {

        $this->visit('produtos/create')
             ->type('upa', 'nome')
             ->type(-15, 'valor')
             ->press('Cadastrar')
             ->notSeeInDatabase('produtos', ['valor' => -15])
             ->seePageIs('produtos/create');
    }

}
