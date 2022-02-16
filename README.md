# Teste de lógica ally:code

📢 ATENÇÃO: Não faça um fork desse repositório. Clone o repositório e suba em seu GitHub, envie o link do seu repositório para [allycode@allycode.com.br](mailto:allycode@allycode.com.br)

## Descrição
Com esse teste a ally:code pretende conhecer melhor a capacidade lógica e a forma de pensar (se organizar) do candidato. Caso não se sinta confortável com a estrutura do PHP faça o teste em sua linguagem preferida pois o conhecimento da linguagem não é eliminatório nessa fase.

📢 ATENÇÃO: Caso opte por fazer o teste em outra linguagem, não esqueça de implementar o mesmo teste que foi feito aqui e documentar bem o seu repositório.

## Como funciona este repositório?
Esse repositório tem um teste criado com PHPUnit que deve ser rodado para verificar se o que foi desenvolvido atende às necessidades. Seu código deve ser desenvolvido nos arquivos dentro da pasta [src](./src/).

O teste consiste em dois desafios que estão em arquivos separados como será explicado a seguir.

Sinta-se livre para estruturar da forma que preferir, desde que o retorno seja criado de acordo com resultado que esperamos na seção seguinte, levando em consideração que no seu código o retorno deve ser dinâmico, baseado no valor do parâmetro passado para a sua função.

## Instalação
Para instalar o projeto com suas dependências você deve rodar o seguinte comando:
```bash
composer install
```
Lembrando que para isso você precisa ter o Composer instalado.

### Observação:
Mexa apenas nas implementações de código na pasta [src](./src/)! Se houver alteração nos testes você será desclassificado, em caso de dúvida use sua linguagem preferida ou entre em contato com o email informado.

## Problema 1 - Separar Produtos
Nosso cliente cadastrou na plataforma as variantes dos produtos sem especificação. E pediu para criarmos um seletor de variantes na página de produto. Mas a seguinte estrutura de dados não funciona bem para o desenvolvimento de um seletor de variantes.

```php
[
    'azul-XG',
    'branco-PP',
    'azul-XG',
    'preto-PP',
    'preto-M',
    'branco-G',
    'preto-G',
    'vermelho-M',
    'preto-GG',
    'azul-P',
    'preto-GG',
    'azul-XG',
]
```

Precisamos que essa estrutura seja convertida para o seguinte formato.

```php
[
    'preto' =>  [
        'PP' => 1,
        'M' => 1,
        'G' => 1,
        'GG' => 2
    ],
    'branco' => [
        'PP'=> 1,
        'G' => 1
    ],
    'vermelho' => [
        'M' => 1
    ],
    'azul' => [
        'XG' => 3,
        'P' => 1
    ]
]
```

## Problema 2 - Números Primos
Em determinada rotina precisamos de um relatório sobre números primos.

A entrada do programa será um número qualquer. O seu trabalho é pegar os 5 maiores números primos que sejam menores ou iguais ao número informado e então retornar alguns detalhes sobre eles. Modelo de entrada:

```php
2496
```

Modelo de saída:

```php
[
    [
        'numero' => 2477,
        'par' => false,
        'impar' => true,
        'somaDigitos' => 20
    ],
    [
        'numero' => 2473,
        'par' => false,
        'impar' => true,
        'somaDigitos' => 16
    ],
    [
        'numero' => 2467,
        'par' => false,
        'impar' => true,
        'somaDigitos' => 19
    ],
    [
        'numero' => 2459,
        'par' => false,
        'impar' => true,
        'somaDigitos' => 20
    ],
    [
        'numero' => 2447,
        'par' => false,
        'impar' => true,
        'somaDigitos' => 17
    ],
]
```

O retorno deverá ser um array de arrays associativos com as informações sobre os números. As informações obrigatórias são:

- O número
- É par (true ou false)
- É ímpar (true ou false)
- A soma de todos os dígitos do número
## Como testar?
Para testar seu código, basta apenas rodar o seguinte comando:
```bash
php vendor/bin/phpunit test --colors
```
Esse comando irá executar todos os testes dos dois desafios.

### Executando isoladamente

Caso queira executar apenas os testes do Separador de Produtos
```bash
php vendor/bin/phpunit test/SeparateProductsTest.php --colors
```

Caso queira executar apenas os testes dos Números Primos
```bash
php vendor/bin/phpunit test/PrimeNumbersTest.php --colors
```

O resultado deve ser semelhante ao seguinte:
```bash
PHPUnit 8.5.21 by Sebastian Bergmann and contributors.

......                                                              6 / 6 (100%)

Time: 211 ms, Memory: 4.00 MB

OK (6 tests, 6 assertions)
```
