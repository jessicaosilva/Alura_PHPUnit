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
