# Teste com PHPUnit

Para rodar o teste, na raiz da pasta do projeto, executar o comando:

````
php teste-avaliador.php
````

## Aula 1

Conceito de estrutura de testes.

1. A inicialização do cenário (Arrange ou Given).

2. A execução da regra de negócio (Act ou When).

3. A verificação do resultado (Assert ou Then).

Padrões de testes:
- Arrange-Act-Assert
- Given-When-Then

## Aula 2

Criada pasta 'tests' na raiz, onde ficarão as classes de testes.

Para instalar o PHPUnit, executar o comando na raiz do projeto:

````
composer require --dev phpunit/phpunit ^8
````

Foram criadas 4 funções/testes na Classe de teste "AvaliadorTest.php".

Que buscam o maior ou o menor valor, de lances que estão em ordem crescente e decrescente.

- testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemCrescente
- testAvaliadorDeveEncontrarOMaiorValorDeLancesEmOrdemDecrescente
- testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemCrescente
- testAvaliadorDeveEncontrarOMenorValorDeLancesEmOrdemDecrescente


Para rodar os testes, executar o comando na raiz do projeto:

````
vendor\bin\phpunit --colors tests
````

## Aula 3

Análise das possibilidades de dados para testar todas os casos de testes, encontrando as simililaridades entre eles, que são as classes de equivalência. Dessa forma melhorar a forma de codificar os testes.

Foi criada mais uma função de teste, a testAvaliadorDeveBuscar3MaioresValores, que é computado 4 lances, o avalidor coloca em ordem, e devolve os 3 maiores. O teste avalia se de fato retornou os 3 maiores lances.

## Aula 4 

Aula dedicada a refatoração do código.

Uso de algumas funções do PHPUnit que evitam repetição de código. São elas:

- public static function setUpBeforeClass(): void - Método executado uma vez só, antes de todos os testes da classe
- public function setUp(): void - Método executado antes de cada teste da classe
- public function tearDown(): void - Método executado após cada teste da classe
- public static function tearDownAfterClass(): void - Método executado uma vez só, após todos os testes da classe

Na função setUp() está a criação de um novo Avaliador(), para evitar repetição de código.

Criação de 3 funções que simulalam lances em diferentes ordens, que são chamadas por dataprovider.
- leilaoEmOrdemCrescente
- leilaoEmOrdemDecrescente
- leilaoEmOrdemAleatoria

Dessa forma 4 funções foram excluídas, e os testes mantidos por apenas 2 funções (testAvaliadorDeveEncontrarOMaiorValorDeLances e testAvaliadorDeveEncontrarOMenorValorDeLances):

Criação de uma função testAvaliadorDeveBuscar3MaioresValores que recebe 4 lances e retorna os 3 maiores

Criação do arquivo phpunit.xml, que é um arquivo de configuração padrões para execução do teste mais a geração de um arquivo txt de log do último teste.

Agora para rodar os testes, basta executar o comando na raiz do projeto:

````
vendor\bin\phpunit
````

## Aula 5

Criação de uma nova classe de teste, chamada LeilaoTest.php, na pasta tests\Models.
Com as seguintes funções de teste:

- testLeilaoDeveReceberLances que testa que um leilão recebe um lance pelo menos.
- testLeilaoNaoDeveReceberLancesRepetidos que testa que um lance não aceita lances repetidos.
- testLeilaoNaoDeveAceitarMaisDe5LancesPorUsuario que testa que um leilão não aceita mais de 5 lances por usuário.


Refatoração do método recebeLance em Alura\Leilao\Model para garentir que um leilão recebe um lance pelo menos, que um lance não aceita lances repetidos e que um leilão não aceita mais de 5 lances por usuário.

Além da crição dos métodos ehDoUltimoUsuario e quantidadeLancesPorUsuario com base na técnica baby steps guiados pelos testes.

