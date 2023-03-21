<?php
require_once "cabecalho.php";
?>
<?php
$validacao = true;
if($validacao){
    echo "<p> essa eh minha pagina sobre </p>";
} else {
    echo "<p> Faça login </p>";
}
?>

<?php
require_once "rodape.php";
?>