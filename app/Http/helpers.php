<?php
class helpers{
public function somaValor($comanda){
        foreach($comanda->produto()->get as $produto){
            $total = $total + $produto->valor;
        }
    }
}    
?>