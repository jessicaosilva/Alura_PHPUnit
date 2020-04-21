<?php 

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;
use Alura\Leilao\Service\Avaliador;

require "vendor/autoload.php";

//Arrange - Given
$leilao = new Leilao('Fiat 147 0Km');
$ana  = new Usuario('Maria');
$joao = new Usuario('João');

$leilao->recebeLance(new Lance($ana, 2000));
$leilao->recebeLance(new Lance($joao, 2500));

$leiloeiro = new Avaliador();

//Act - When
$leiloeiro->avalia($leilao);

$maiorValor = $leiloeiro->getMaiorValor();

//Assert - Then
$valorEsperado = 2500;

if($maiorValor == $valorEsperado){
    echo "Teste ok";
}else{
    echo "Teste falhou";
}