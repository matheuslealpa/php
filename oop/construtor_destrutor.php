<?php

class Produto {
    private $nome;
    private $estoque;
    private $preco;

    public function __construct ($nome, $estoque, $preco){
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;

    }

    public function getNome(){
        return $this->nome;
    }

    public function __destruct(){
        print "DESTRUIDO: Objeto " . $this->getNome() . '<br>';
    }
}

echo '<pre>';
 var_dump(new Produto("Computador", 10, 10.9));
echo '</pre>';