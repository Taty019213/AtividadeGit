<?php
    
class Produto {
    private $codigo;
    private $nome;
    private $descricao;
    private $preco;
}

public function exibirproduto(){
    echo $this->nome;
}
?>