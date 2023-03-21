<?php
require_once "cabecalho.php";
$logado = false;
if(!$logado){ //verifica se esta logado
    header("Location: index.php"); // usamos a funcao header para redirecionar
}
?>
se vc esta aqui vc esta logado
<?php
require_once "rodape.php";
?>