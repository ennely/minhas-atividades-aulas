<?php
class Carro { // definindo uma classe em php
    public $cor; // propriedades sao caracteristicas que voce deseja representar
    public $qtd_portas;
    private $modelo;

    public function buzinar(){ // metodos são acoes que voce deseja que os objetos realizem
        echo "biiiii";
    }

    // definindo um metodo construtor para criação de objetos com propriedades instanciadas
    // nesse caso o valor padrao para os parametros é null para tornar a criacao do objeto com seu valor definido opcional
    function __construct($cor = null, $qtd_portas = null) 
    {
        $this->cor = $cor; // a palavra this refere-se a propriedade da classe definida la no inicio entao $this->cor != $cor
        // $this->cor = propriedade da classe
        // $cor = parametro utilizado no construtor
        $this->qtd_portas = $qtd_portas;
    }

    public function getModelo() { // funcao getter que retorna o valor de uma propriedade
        return $this->modelo;
    }

    public function setModelo($modelo) { // funcao setter que define o valor de uma propriedade
        $this->modelo = $modelo;
    }
    
}