<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MesaTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testSetorNull()
    {
        $this->visit('mesas/create')
             ->press('Cadastrar')
             ->notSeeInDatabase('mesas', ['setor'=>null]);
    }
}
