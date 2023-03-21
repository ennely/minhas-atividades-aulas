<?php
require_once "cabecalho.php";
?>

Ola mundo <!-- esse vem do html -->
<br>

<?php
echo "Ola mundo"; // esse vem do php
// isso eh um comentario em php
echo "<br>"; // imprimindo na tela uma tag html usando php

$nome; //assim criamos variaveis em php
$nome = "Fellipe"; //atribuindo um valor
echo $nome;
echo "<br>";

//algumas funcoes internas para strings

echo strlen($nome); //retorna o tamanho da string
echo "<br>";

echo strrev($nome); //reverte a string
echo "<br>";

echo str_replace("Mundo", "Pessoas", "Ola Mundo"); //substitui uma string
echo "<br>";

// algumas funcoes internas para numeros

$numero = 1;
$num = 3.14;

var_dump(is_int($numero)); // var dump outra forma de exibir dados na tela, Despeja informações sobre uma variável
echo "<br>";
var_dump(is_int($num));
echo "<br>";

echo (int)$num; // converte o tipo em inteiro
echo "<br>";
var_dump(is_float($numero)); // vamos ver se $numero tem um valor do tipo float (false)
echo "<br>";
$numero = (float)$numero; // agora convertendo e salvando esse valor
var_dump(is_float($numero)); // verificando novamente (true)
echo "<br>";

echo pi(); // retorna o valor de pi
echo "<br>";

echo min(0, 150, 30); // retorna o menor valor temos a oposta max()
echo "<br>";

echo abs(-2); // retorna o valor absoluto (positivo)
echo "<br>";

echo sqrt(64); // retorna a raiz quadrada
echo "<br>";

echo round(0.8); //arredonda
echo "<br>";

echo rand(); //retorna um valor aleatorio, para limitar a abrangencia dos valores colocamos parametros nos parenteses
echo "<br>";

echo rand(1, 10);
echo "<br>";

$valor = 3.123124124124;
echo number_format($valor, 2); // formato um numero

?>

<?php
require_once "rodape.php";
?>