<?php
require_once "animal.php";
class Gato extends Animal
{
    public function getAlimentacao()
    {
        return $this->alimentacao; // posso acessar e modificar a propriedade alimentacao pq ela eh protegida entao a classe gato sendo herdeira de animal tem o direito de acesso
    }

    public function setAlimentacao($ali)
    {
        $this->alimentacao = $ali;
    }

    /* public function getTeste(){
        return $this->teste; // nao posso acessar nem modificar a propriedade teste pq ela eh privada a classe animal
    } */

    /* public function fazBarulho() // eu posso nas classes filhas sobreescrever os metodos da classe pai
    {
        echo "miau miau";
        echo "<br>";
    } */
}
