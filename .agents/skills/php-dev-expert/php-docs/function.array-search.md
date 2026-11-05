# Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-search.php

---

# array\_search

(PHP 4 >= 4.0.5, PHP 5, PHP 7, PHP 8)

array\_search — Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado

### Descrição

function **array\_search**([mixed](language.types.mixed.md) `$needle`, [array](language.types.array.md) `$haystack`, [bool](language.types.boolean.md) `$strict` = **`false`**): [int](language.types.integer.md)|[string](language.types.string.md)|[false](language.types.singleton.md)

Procura a `needle` (agulha) em `haystack` (palheiro).

### Parâmetros

`needle`
:   O valor procurado.

    > **Nota**:
    >
    > Se `needle` for uma string, a comparação é feita
    > de uma maneira que diferencia maiúsculas e minúsculas.

`haystack`
:   O array.

`strict`
:   Se o terceiro parâmetro opcional `strict` for informador como **`true`**
    então **array\_search()** fará uma busca por elementos
    *idênticos* em
    `haystack`. Isto significa que haverá uma checagem adicional de
    [tipos](language.types.md) no parâmetro
    `needle` ao percorrer `haystack`,
    de forma que os objetos sejam a mesma instância.

### Valor Retornado

Retorna a chave para `needle` se foi encontrada no
array, **`false`** caso contrário.

Se `needle` for encontrado em `haystack`
mais de uma vez, a primeira chave encontrada é retornada. Para retornar as chaves
de todos os valores correspondentes, utilize a função [array\_keys()](function.array-keys.md) com o parâmetro opcional
`filter_value`.

**Aviso**

Esta função pode
retornar o valor booleano **`false`**, mas também pode retornar um valor não booleano que pode ser
avaliado como **`false`**. Leia a seção sobre [Booleanos](language.types.boolean.md) para mais
informações. Use o [operador
===](language.operators.comparison.md) para testar o valor retornado por esta
função.

### Examples

**Exemplo #1 Exemplo de **array\_search()****

```
<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
print_r($key);

$key = array_search('red', $array);   // $key = 1;
print_r($key);
?>
```

### Veja também

- [array\_keys()](function.array-keys.md) - Retorna todas as chaves ou uma parte das chaves de um array
- [array\_values()](function.array-values.md) - Retorna todos os valores de um array
- [array\_key\_exists()](function.array-key-exists.md) - Verifica se uma chave ou índice existe em um array
- [in\_array()](function.in-array.md) - Verifica se um valor existe em um array

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
