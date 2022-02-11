# Teste de lógica ally:code

📢 ATENÇÃO: Não faça um fork desse repositório. Clone o repositório e suba em seu GitHub, envie o link do seu repositório para [allycode@allycode.com.br](mailto:allycode@allycode.com.br)

## Descrição
Com esse teste a ally:code pretende conhecer melhor a capacidade lógica e a forma de pensar (se organizar) do candidato. Caso não se sinta confortável com a estrutura do PHP faça o teste em sua linguagem preferida pois o conhecimento da linguagem não é eliminatório nessa fase.

📢 ATENÇÃO: Caso opte por fazer o teste em outra linguagem, não esqueça de implementar o mesmo teste que foi feito aqui e documentar bem o seu repositório.

## Como funciona este repositório?
Esse repositório tem um teste criado com PHPUnit que deve ser rodado para verificar se o que foi desenvolvido atende às necessidades. Seu código deve ser colocado no arquivo [ProductStructure.php](./src/ProductStructure.php). Sinta-se livre para estruturar da forma que preferir, desde que o retorno seja criado de acordo com resultado que esperamos na seção seguinte, levando em consideração que no seu código o retorno deve ser dinámico, baseado no array inicial fornecido no arquivo em questão.

## Instalação
Para instalar o projeto com suas dependências você deve rodar o seguinte comando:
```bash
composer install
```
Lembrando que para isso você precisa ter o Composer instalado.

### Observação: 
Mexa apenas nas implementações em [ProductStructure.php](./src/ProductStructure.php) se houver alteração nos testes você será desclassificado, em caso de dúvida use sua linguagem preferida ou entre em contato com o email informado.

## Problema
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

## Como testar?
Para testar seu código, basta apenas rodar o seguinte comando:
```bash
php vendor/bin/phpunit test --colors
```

O resultado deve ser semelhante ao seguinte:
```bash
PHPUnit 8.5.21 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 26 ms, Memory: 4.00 MB

OK (1 test, 1 assertion)
```
