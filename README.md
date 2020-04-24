# Teste com PHPUnit

Para usar o composer, na raiz da pasta do projeto, executar o comando:

````
composer dump
````

Para usar o PHPUnit na versão 8, na raiz da pasta do projeto, executar o comando:

````
composer require --dev phpunit/phpunit ^8
````

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

