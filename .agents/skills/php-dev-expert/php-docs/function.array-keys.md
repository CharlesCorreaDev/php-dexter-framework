# Retorna todas as chaves ou uma parte das chaves de um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-keys.php

---

# array\_keys

(PHP 4, PHP 5, PHP 7, PHP 8)

array\_keys — Retorna todas as chaves ou uma parte das chaves de um array

### Descrição

function **array\_keys**([array](language.types.array.md) `$array`): [array](language.types.array.md)

function **array\_keys**([array](language.types.array.md) `$array`, [mixed](language.types.mixed.md) `$filter_value`, [bool](language.types.boolean.md) `$strict` = **`false`**): [array](language.types.array.md)

**array\_keys()** retorna as chaves, numéricas e
string, do array `array`.

Se um parâmetro `filter_value` for especificado,
então apenas as chaves para esse valor serão retornadas. Do contrário, todas
as chaves de `array` serão retornadas.

### Parâmetros

`array`
:   Um array contendo chaves a serem retornadas.

`filter_value`
:   Se especificado, somente chaves contendo este valor são retornadas.

`strict`
:   Determina se a comparação é rígida (===) deve ser utilizada durante a busca.

### Valor Retornado

Retorna um array de todas as chaves em `array`.

### Examples

**Exemplo #1 Exemplo de **array\_keys()****

```
<?php
$array = array(0 => 100, "cor" => "vermelho");
print_r(array_keys($array));

$array = array("azul", "vermelho", "verde", "azul", "azul");
print_r(array_keys($array, "azul"));

$array = array("cor"     => array("azul", "vermelho", "verde"),
               "tamanho" => array("pequeno", "medio", "grande"));
print_r(array_keys($array));
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => 0
    [1] => cor
)
Array
(
    [0] => 0
    [1] => 3
    [2] => 4
)
Array
(
    [0] => cor
    [1] => tamanho
)
```

### Veja também

- [array\_values()](function.array-values.md) - Retorna todos os valores de um array
- [array\_combine()](function.array-combine.md) - Cria um array usando um array para chaves e outro para valores
- [array\_key\_exists()](function.array-key-exists.md) - Verifica se uma chave ou índice existe em um array
- [array\_search()](function.array-search.md) - Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado

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
