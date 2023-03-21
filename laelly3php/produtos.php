<?php
require_once "cabecalho.php";

/* criando um array de arrays e salvando na variavel lista */
$lista = array(
    //cada array representa um produto
    //os arrays aqui sao associativos (pares de chave e valor)
    // criei 2 chaves (img e texto)
    // as chaves apontam para o respectivo valor
    // podemos associar isso ao resultado de uma busca no banco de dados
    array("img" => "img/coracao.webp", "texto" => "coracao"),
    array("img" => "img/pic_bulboff.gif", "texto" => "luz apagada"),
    array("img" => "img/pic_bulbon.gif", "texto" => "luz acesa")
    
)
// agora a variavel lista contem os valores referentes aos produtos
?>
<!-- agora podemos utilizar o foreach para iterar sobre cada item do array e fazermos o que quiser com ele como por exemplo exibi-los de forma personalizada -->
<!-- dentro do foreach eu passo a variavel que representa o array ($lista) e itero cada item me referindo a ele como $item (variavel local criada para esse proposito apenas) -->
<div class="container-cards">
    <?php foreach ($lista as $item) : ?>
        <!-- crio uma estrutura de exibicao dos dados (nesse caso um card) -->
        <div class="card">
            <div class="imgCard">
                <!-- dinamicamente eu preencho a cada iteração os valores da tag img com o valor do item atual na chave ['img']. pense que esse seria o titulo da coluna da tabela no banco de dados que armazena os dados da imagem do produto da iteracao atual -->
                <img src="<?= $item["img"] ?>" alt="">
            </div>
            <div class="texto">
                <!-- o mesmo eh feito a cada iteracao para alocar dinamicamente o texto do produto -->
                <?= $item["texto"] ?>
            </div>
        </div>
    <?php endforeach; ?><!-- preciso encerrar o foreach -->
</div>
<?php
require_once "rodape.php";
?>