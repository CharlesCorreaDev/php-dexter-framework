# Preenche um array com valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-fill.php

---

# array\_fill

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

array\_fill — Preenche um array com valores

### Descrição

function **array\_fill**([int](language.types.integer.md) `$start_index`, [int](language.types.integer.md) `$count`, [mixed](language.types.mixed.md) `$value`): [array](language.types.array.md)

Preenche um array com
`count` elementos com o valor do
parâmetro `value` e chaves começando a partir de
`start_index`.

### Parâmetros

`start_index`
:   O primeiro índice do array retornado

    Se `start_index` for negativo,
    o primeiro índice do array retornado será
    `start_index`, e os índices
    seguintes começarão do zero antes do PHP 8.0.0.
    A partir do PHP 8.0.0, chaves negativas são incrementadas normalmente
    (veja o [exemplo](function.array-fill.md#function.array-fill.example.negative-start-index)).

`count`
:   Número de elementos a inserir.
    Deve ser maior ou igual a zero, e menor ou igual a `2147483647`.

`value`
:   Valores a preencher

### Valor Retornado

Retorna o array preenchido

### Erros/Exceções

Lança um [ValueError](class.valueerror.md) se `count` estiver
fora do alcance.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **array\_fill()** agora lança um [ValueError](class.valueerror.md) se `count` estiver fora de alance; anteriormente um **`E_WARNING`** era disparado, e a função retornava **`false`**. |

### Examples

**Exemplo #1 Exemplo da função **array\_fill()****

```
<?php
$a = array_fill(5, 6, 'banana');
print_r($a);
?>
```

O exemplo acima produzirá:

```
Array
(
    [5] => banana
    [6] => banana
    [7] => banana
    [8] => banana
    [9] => banana
    [10] => banana
)
```

**Exemplo #2 Exemplo da **array\_fill()** com um índice de início negativo**

```
<?php
$a = array_fill(-2, 4, 'pera');
print_r($a);
?>
```

Saída do exemplo acima no PHP 8:

```
Array
(
    [-2] => pera
    [-1] => pera
    [0] => pera
    [1] => pera
)
```

Saída do exemplo acima no PHP 7:

```
Array
(
    [-2] => pera
    [0] => pera
    [1] => pera
    [2] => pera
)
```

Note que o índice `-1` não está presente antes do PHP 8.0.0.

### Notas

Veja também a seção [Arrays](language.types.array.md)
do manual para a explicação detalhada de chaves negativas.

### Veja também

- [array\_fill\_keys()](function.array-fill-keys.md) - Preenche um array com valores, especificando chaves
- [str\_repeat()](function.str-repeat.md) - Repete uma string
- [range()](function.range.md) - Cria um array contendo uma faixa de elementos

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
