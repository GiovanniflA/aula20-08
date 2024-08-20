<?php

class Funcionario {
    public $nome='beker';
    public $telefone='11 89225092';
    public $numFilhos=99;

    function resumirCardFunc () {
        return "$this->nome possui $this->numFilhos filhos";
    }

    
    function modificarNumFilhos($numFilhos) {
        return  $this->numFilhos = $numFilhos;
    }
}
 $y= new Funcionario();
 $y->modificarNumFilhos(2) . '<br />';
echo $y-> resumirCardFunc();

?>