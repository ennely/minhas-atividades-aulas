<?php
require_once "cabecalho.php";
require_once "carro.php";
require_once "gato.php";
require_once "laranja.php";

$carro = new Carro(); // instanciando um objeto dessa classe
echo $carro->cor; // acessando uma propriedade do objeto
echo "<br>";
var_dump($carro->cor); // mais detalhes sobre a variavel
echo "<br>";
$carro->buzinar(); // chamando um metodo do objeto
echo "<br>";
$carro->cor = "preto"; // atribuindo um valor para a propriedade
echo $carro->cor; // acessando novamente para ver o valor atualizado
echo "<br>";
echo "-------";
echo "<br>";
$carro2 = new Carro('vermelho', 2); // instanciando um novo objeto carro dessa vez atraves do construtor
echo $carro2->cor;
echo "<br>";
echo $carro2->qtd_portas;
echo "<br>";
echo "-------";
echo "<br>";
/* $carro->modelo = 'bmw'; // tentando definir uma propriedade privada
echo $carro->modelo; // tentando acessar uma propriedade privada */
echo $carro->getModelo(); // acessando propriedade via getter
echo "<br>";
$carro->setModelo("bmw"); // definindo valor via setter
echo $carro->getModelo();
echo "<br>";
echo "-----------------------------------";
echo "<br>";

$animal = new Animal(); // posso instanciar objeto da classe pai
var_dump($animal);
echo "<br>";
echo $animal->fazBarulho();

$gato = new Gato(); // posso instanciar objeto da classe filha
var_dump($gato);
echo "<br>";
echo $gato->fazBarulho(); // herdou as propriedades e metodos da classe pai

$animal->qtd_patas = 4; // qtd_patas é publico entao posso fazer essa modificacao

/* $animal->alimentacao = "herbivoro"; // nao posso fazer o mesmo com os outros limitadores de aceso
    $animal->teste = "testando"; */

$gato->qtd_patas = 4;
/* $gato->alimentacao = "carnivoro";
    $gato->teste = "testando"; */

echo $gato->getAlimentacao();
echo "<br>";
echo $gato->getTeste();
echo "<br>";

$gato->setAlimentacao('carnivoro');
$gato->setTeste('testando');

echo $gato->getAlimentacao();
echo "<br>";
echo $gato->getTeste();
echo "<br>";
echo "-----------------------------------";
echo "<br>";

//$planta = new Planta(); // nao posso instanciar objetos de classes abstratas, tem que instanciar das filhas
$laranja = new Laranja();
var_dump($laranja);
echo "<br>";
$laranja->crescer(); // o objeto da classe filha age normalmente e utilizar o metodo implementado
echo "<br>";
echo "-----------------------------------";
echo "<br>";

$gato->andarParaFrente();
echo "<br>";
echo "-----------------------------------";
echo "<br>";

Animal::brincar(); // acessando um metodo estatico nomedaclasse::nomedometodo
$animal->brincar(); // o metodo pode ser acessado pelo objeto tambem
?>



<?php
require_once "rodape.php";
?>