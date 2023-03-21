<?php
require_once "movimento.php";
class Animal implements Movimento // criando uma classe que implementa uma interface
{
    public $qtd_patas; // modificador de acesso publico fica disponivel em qualquer lugar
    protected $alimentacao; // modificador de acesso protegido so eh acessado na classe e nas herdeiras
    private $teste; // modificador de acesso privado so eh acessado na propria classe

    public function fazBarulho()
    {
        echo "barulho generico";
        echo "<br>";
    }

    public function getTeste()
    {
        return $this->teste; // posso acessar a propriedade teste aqui
    }
    public function setTeste($teste)
    {
        $this->teste = $teste; // posso modificar a propriedade teste aqui
    }

    public function andarParaFrente() // a classe eh obrigada a implementar o corpo do metodo da interface que esta utilizando
    {
        echo "andando para frente";
        echo "<br>";
    }

    public static function brincar(){ // uma funcao estatica nao precisa ser acessada atraves de um objeto da classe
        echo "brincando";
        echo "<br>";
    }
}
