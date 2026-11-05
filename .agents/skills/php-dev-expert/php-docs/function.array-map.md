# Aplica uma função em todos os elementos dos arrays dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-map.php

---

# array\_map

(PHP 4 >= 4.0.6, PHP 5, PHP 7, PHP 8)

array\_map — Aplica uma função em todos os elementos dos arrays dados

### Descrição

function **array\_map**([?](language.types.null.md)[callable](language.types.callable.md) `$callback`, [array](language.types.array.md) `$array`, [array](language.types.array.md) `...$arrays`): [array](language.types.array.md)

**array\_map()** retorna um [array](language.types.array.md) contendo
os resultados da aplicação do `callback`
ao valor correspondente do `array`
(e `arrays` se mais arrays forem fornecidos)
usados como argumentos para a função de callback.
O número de parâmetros que a função `callback`
aceita deve coincidir com o número de arrays
passados para **array\_map()**. Arrays
de entrada excedentes são ignorados. Um [ArgumentCountError](class.argumentcounterror.md)
é lançado se um número insuficiente de argumentos é fornecido.

### Parâmetros

`callback`
:   Um [callable](language.types.callable.md) para executar para cada elemento em cada array.

    **`null`** pode ser passado como um valor para `callback`
    para realizar uma operação zip em múltiplos arrays e retornar um array
    onde cada elemento é um array contendo os elementos dos arrays de entrada na
    mesma posição do ponteiro interno do array (veja o exemplo abaixo).
    Se apenas `array` for fornecido,
    **array\_map()** retornará o array de entrada.

`array`
:   Um array para percorrer chamando função `callback`.

`arrays`
:   Lista variável suplementar de argumentos array para passar pela
    função `callback`.

### Valor Retornado

Retorna um array contendo os resultados da aplicação da função `callback`
ao valor correspondente do `array`
(e `arrays` se mais arrays forem fornecidos)
usados como argumentos para o callback.

O array retornado irá preservar as chaves do argumento array se e somente
se exatamente um array for passado. Se mais de um array for passado, o
array retornado terá chaves inteiras sequenciais.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Se a função `callback` espera que um parâmetro seja passado por referência, esta função agora emitirá um **`E_WARNING`**. |

### Examples

**Exemplo #1 Exemplo da função **array\_map()****

```
<?php
function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b);
?>
```

Faz com que $b tenha:

```
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
```

**Exemplo #2 **array\_map()** utilizando uma função lambda**

```
<?php
$func = function(int $value): int {
    return $value * 2;
};

print_r(array_map($func, range(1, 5)));

// Ou a partir do PHP 7.4.0:

print_r(array_map(fn($value): int => $value * 2, range(1, 5)));

?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
)
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 8
    [4] => 10
)
```

**Exemplo #3 **array\_map()** - usando mais de um array**

```
<?php
function mostrar_Espanhol(int $n, string $m): string
{
    return "O número {$n} é chamado de {$m} em espanhol";
}

function map_Espanhol(int $n, string $m): array
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$c = array_map('mostrar_Espanhol', $a, $b);
print_r($c);

$d = array_map('map_Espanhol', $a , $b);
print_r($d);
?>
```

O exemplo acima produzirá:

```
// Saída de $c
Array
(
    [0] => O número 1 é chamado de uno em espanhol
    [1] => O número 2 é chamado de dos em espanhol
    [2] => O número 3 é chamado de tres em espanhol
    [3] => O número 4 é chamado de cuatro em espanhol
    [4] => O número 5 é chamado de cinco em espanhol
)

// Saída de $d
Array
(
    [0] => Array
        (
            [1] => uno
        )

    [1] => Array
        (
            [2] => dos
        )

    [2] => Array
        (
            [3] => tres
        )

    [3] => Array
        (
            [4] => cuatro
        )

    [4] => Array
        (
            [5] => cinco
        )

)
```

Normalmente quando se usa dois ou mais arrays, eles devem ter o mesmo tamanho
porque a função de retorno é aplicada paralelamente nos elementos
correpondentes.
Se os arrays tem tamanhos diferentes, o array menor será estendido com
elementos vazios.

Uma forma interessante de se usar esta função é na construção de um array de
arrays, o que pode ser facilmente feito usando **`null`**
como o nome da função de retorno.

**Exemplo #4 Realizando uma operação zip de arrays**

```
<?php
$a = [1, 2, 3, 4, 5];
$b = ['one', 'two', 'three', 'four', 'five'];
$c = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

$d = array_map(null, $a, $b, $c);
print_r($d);
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => Array
        (
            [0] => 1
            [1] => one
            [2] => uno
        )

    [1] => Array
        (
            [0] => 2
            [1] => two
            [2] => dos
        )

    [2] => Array
        (
            [0] => 3
            [1] => three
            [2] => tres
        )

    [3] => Array
        (
            [0] => 4
            [1] => four
            [2] => cuatro
        )

    [4] => Array
        (
            [0] => 5
            [1] => five
            [2] => cinco
        )

)
```

**Exemplo #5
`callback` **`null`** apenas com
`array`**

```
<?php
$array = [1, 2, 3];
var_dump(array_map(null, $array));
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
```

**Exemplo #6 **array\_map()** - com chaves string**

```
<?php
$arr = ['stringkey' => 'value'];
function cb1($a) {
    return [$a];
}
function cb2($a, $b) {
    return [$a, $b];
}
var_dump(array_map('cb1', $arr));
var_dump(array_map('cb2', $arr, $arr));
var_dump(array_map(null,  $arr));
var_dump(array_map(null, $arr, $arr));
?>
```

O exemplo acima produzirá:

```
array(1) {
  ["stringkey"]=>
  array(1) {
    [0]=>
    string(5) "value"
  }
}
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(5) "value"
    [1]=>
    string(5) "value"
  }
}
array(1) {
  ["stringkey"]=>
  string(5) "value"
}
array(1) {
  [0]=>
  array(2) {
    [0]=>
    string(5) "value"
    [1]=>
    string(5) "value"
  }
}
```

**Exemplo #7 **array\_map()** - arrays associativos**

Enquanto **array\_map()** não suporta diretamente
o uso da chave do array como entrada, isso pode ser simulado usando [array\_keys()](function.array-keys.md).

```
<?php
$arr = [
    'v1' => 'Primeiro lançamento',
    'v2' => 'Segundo lançamento',
    'v3' => 'Terceiro lançamento',
];

// Nota: Antes da 7.4.0, use a sintaxe mais longa para funções anônimas.
$callback = fn(string $k, string $v): string => "$k foi o $v";

$result = array_map($callback, array_keys($arr), array_values($arr));

var_dump($result);
?>
```

O exemplo acima produzirá:

```
array(3) {
  [0]=>
  string(24) "v1 foi o Primeiro lançamento"
  [1]=>
  string(25) "v2 foi o Segundo lançamento"
  [2]=>
  string(24) "v3 foi o Terceiro lançamento"
}
```

### Veja também

- [array\_filter()](function.array-filter.md) - Filtra elementos de um array utilizando uma função callback
- [array\_reduce()](function.array-reduce.md) - Reduz um array para um único valor através de um processo iterativo via callback
- [array\_walk()](function.array-walk.md) - Aplica uma determinada função em cada elemento de um array

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
