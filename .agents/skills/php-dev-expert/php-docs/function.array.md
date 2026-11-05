# Cria um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array.php

---

# array

(PHP 4, PHP 5, PHP 7, PHP 8)

array — Cria um array

### Descrição

function **array**([mixed](language.types.mixed.md) `...$values`): [array](language.types.array.md)

Cria um array. Leia a seção sobre o
[tipo array](language.types.array.md) para mais
informação sobre o que é um array, incluindo detalhes sobre a sintaxe alternativa de colchetes (`[]`).

### Parâmetros

`values`
:   A sintaxe "índice => valores", separados por vírgulas, definem índice e
    valores respectivamente. O índice pode ser do tipo string ou inteiro.
    Quando o índice é omitido, um índice inteiro é automaticamente
    gerado, começando em 0. Se o índice é um inteiro, o próximo índice gerado
    será igual ao maior índice inteiro + 1. Note que quando dois
    índices idênticos são definidos, o último sobrescreve o primeiro.

    Inserir uma vírgula após a última entrada definida do array, mesmo
    sendo incomum, é uma sintaxe válida.

### Valor Retornado

Retorna um array dos parâmetros. Os parâmetros podem ser fornecidos com
um índice com o operador `=>`. Leia a seção
sobre [tipo de array](language.types.array.md) para mais
informação sobre o que é um array.

### Examples

O exemplo a seguir demonstra como criar um array de
duas dimensões, como especificar chaves para arrays associativos,
e como pular e continuar índices numéricos em arrays
normais.

**Exemplo #1 Exemplo de **array()****

```
<?php
$frutas = array (
    "frutas"  => array("a" => "laranja", "b" => "banana", "c" => "maçã"),
    "numeros" => array(1, 2, 3, 4, 5, 6),
    "buracos" => array("primeiro", 5 => "segundo", "terceiro")
);
print_r($frutas);
?>
```

**Exemplo #2 Indexação automática com **array()****

```
<?php
$array = array(1, 1, 1, 1,  1, 8 => 1, 4 => 1, 19, 3 => 13);
print_r($array);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 1
    [1] => 1
    [2] => 1
    [3] => 13
    [4] => 1
    [8] => 1
    [9] => 19
)
```

Note que o índice 3 é definido duas vezes, e retêm seu último valor
13. O índice 4 é definido depois do índice 8, e o índice gerado a seguir (valor 19)
é 9, uma vez que o maior índice era 8.

Esse exemplo cria um array com o índices iniciando em 1.

**Exemplo #3 Array com índices a partir do 1 com **array()****

```
<?php
$firstQuarter = array(1 => 'Janeiro', 'Fevereiro', 'Março');
print_r($firstQuarter);
?>
```

O exemplo acima produzirá:

```
Array
(
    [1] => Janeiro
    [2] => Fevereiro
    [3] => Março
)
```

Como no Perl, pode-se acessar o valor de um array dentro de aspas.
Entretanto, com o PHP é necessário envolver o array entre chaves {}.

**Exemplo #4 Acessando um array dentro de chaves**

```
<?php
$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!
?>
```

### Notas

> **Nota**:
>
> **array()** é um construtor de linguagem usado para
> representar arrays literais, e não uma função normal.

### Veja também

- [array\_pad()](function.array-pad.md) - Expande um array para um certo comprimento utilizando um determinado valor
- [list()](function.list.md) - Cria variáveis como se fossem arrays
- [count()](function.count.md) - Conta todos os elementos de um array ou de um objeto Countable
- [range()](function.range.md) - Cria um array contendo uma faixa de elementos
- [`foreach`](control-structures.foreach.md)
- O tipo [array](language.types.array.md)

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
