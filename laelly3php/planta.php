<?php

abstract class Planta
{ // classe abstrata
    public $nome; // pode ter propriedades para suas filhas herdarem

    /* abstract function andar(){
        echo "andando";
    } */

    function teste()
    { // pode ter metodos para suas filhas herdarem
        echo "testando";
    }

    abstract function crescer(); // metodos abstratos nao podem ter corpo apenas assinatura, a filha obrigatoriamente deve implementar o corpo
}
