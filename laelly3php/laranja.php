<?php
require_once "planta.php";
class Laranja extends Planta
{ // classe laranja herda de planta

    function crescer()
    { // vai dar erro enquanto a funcao abstrata crescer da classe pai nao for definida
        echo "crescendo";
        echo "<br>";
    }
}
