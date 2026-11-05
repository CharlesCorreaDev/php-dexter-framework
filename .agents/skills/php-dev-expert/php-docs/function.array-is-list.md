# Verifica se um array é uma lista

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-is-list.php

---

# array\_is\_list

(PHP 8 >= 8.1.0)

array\_is\_list — Verifica se um `array` é uma lista

### Descrição

function **array\_is\_list**([array](language.types.array.md) `$array`): [bool](language.types.boolean.md)

Determina se o `array` fornecido é uma lista.
Um [array](language.types.array.md) é considerado uma lista se suas chaves consistirem em números consecutivos
de `0` a `count($array)-1`.

### Parâmetros

`array`
:   O [array](language.types.array.md) que está sendo avaliado.

### Valor Retornado

Retorna **`true`** se `array` for uma lista, **`false`**
caso contrário.

### Examples

**Exemplo #1 Exemplo de **array\_is\_list()****

```
<?php
var_dump(array_is_list([])); // true
var_dump(array_is_list(['maçã', 2, 3])); // true
var_dump(array_is_list([0 => 'maçã', 'laranja'])); // true

// O array não começa em 0
var_dump(array_is_list([1 => 'maçã', 'laranja'])); // false

// As chaves não estão na ordem correta
var_dump(array_is_list([1 => 'maçã', 0 => 'laranja'])); // false

// Chaves não inteiras
var_dump(array_is_list([0 => 'maçã', 'foo' => 'bar'])); // false

// Chaves não consecutivas
var_dump(array_is_list([0 => 'maçã', 2 => 'bar'])); // false
?>
```

### Notas

> **Nota**:
>
> Esta função retorna **`true`** em arrays vazios.

### Veja também

- [array\_values()](function.array-values.md) - Retorna todos os valores de um array

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
