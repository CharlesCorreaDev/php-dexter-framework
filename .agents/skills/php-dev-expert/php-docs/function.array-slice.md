# Extrai uma parcela de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-slice.php

---

# array\_slice

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_slice — Extrai uma parcela de um array

### Descrição

function **array\_slice**(  
    [array](language.types.array.md) `$array`,  
    [int](language.types.integer.md) `$offset`,  
    [?](language.types.null.md)[int](language.types.integer.md) `$length` = **`null`**,  
    [bool](language.types.boolean.md) `$preserve_keys` = **`false`**  
): [array](language.types.array.md)

**array\_slice()** retorna a sequência de elementos
de um `array` delimitado pelos parâmetros
`offset` e `length`.

### Parâmetros

`array`
:   O array de entrada.

`offset`
:   Se `offset` for não negativo, a sequência iniciará
    no início do `array`.

    Se `offset` for negativo, a sequência iniciará
    a partir do fim do `array`.

    > **Nota**:
    >
    > O parâmetro `offset` denota uma posição
    > dentro do array, não das chaves.

`length`
:   Se `length` for positivo,
    então a sequência terá até essa quantidade de elementos.

    Se o array for mais curto que `length`,
    então somente os elementos presentes serão retornados.

    Se `length` for negativo então a sequência
    conterá até essa quantidade de elementos do final do array.

    Se esse parâmetro for omitido, a sequência conterá todos os elementos
    a partir de `offset` até o final do
    `array`.

`preserve_keys`
:   > **Nota**:
    >
    > **array\_slice()** irá reordenar e resetar os índices
    > inteiros do array por padrão. Este comportamento pode ser alterado
    > ao informar `preserve_keys` para **`true`**.
    > Chaves string são sempre preservados, independente do parâmetro.

### Valor Retornado

Retorna a parcela. Se o offset for maior que o tamanho do array,
um array vazio é retornado.

### Examples

**Exemplo #1 Exemplos de **array\_slice()****

```
<?php
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);      // retorna "c", "d", e "e"
$output = array_slice($input, -2, 1);  // retorna "d"
$output = array_slice($input, 0, 3);   // retorna "a", "b", e "c"

// Obverse as diferenças nas chaves retornadas
print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => c
    [1] => d
)
Array
(
    [2] => c
    [3] => d
)
```

**Exemplo #2 **array\_slice()** e arrays baseados em 1**

```
<?php
$input = array(1 => "a", "b", "c", "d", "e");
print_r(array_slice($input, 1, 2));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => b
    [1] => c
)
```

**Exemplo #3 **array\_slice()** com chaves mistas**

```
<?php
$ar = array('a'=>'apple', 'b'=>'banana', '42'=>'pear', 'd'=>'orange');
print_r(array_slice($ar, 0, 3));
print_r(array_slice($ar, 0, 3, true));
?>
```

O exemplo acima produzirá:

```
Array
(
    [a] => apple
    [b] => banana
    [0] => pear
)
Array
(
    [a] => apple
    [b] => banana
    [42] => pear
)
```

### Veja também

- [array\_chunk()](function.array-chunk.md) - Divide um array em pedaços
- [array\_splice()](function.array-splice.md) - Remove uma parte array e a substitui por outra coisa
- [unset()](function.unset.md) - unset remove a definição de uma variável informada

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
