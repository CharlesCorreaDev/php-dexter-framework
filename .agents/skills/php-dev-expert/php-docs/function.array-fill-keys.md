# Preenche um array com valores, especificando chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.array-fill-keys.php

---

# array\_fill\_keys

(PHP 5 >= 5.2.0, PHP 7, PHP 8)

array\_fill\_keys — Preenche um array com valores, especificando chaves

### Descrição

function **array\_fill\_keys**([array](language.types.array.md) `$keys`, [mixed](language.types.mixed.md) `$value`): [array](language.types.array.md)

Preenche um array com o
valor do parâmetro `value`, usando os
valores do array `keys` como chaves.

### Parâmetros

`keys`
:   Array de valores que serão usados como chaves. Valores ilegais
    para chaves serão convertidos para [string](language.types.string.md).

`value`
:   Valor para usar no preenchimento

### Valor Retornado

Retorna o array preenchido

### Examples

**Exemplo #1 Exemplo da função **array\_fill\_keys()****

```
<?php
$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);
?>
```

O exemplo acima produzirá:

```
Array
(
    [foo] => banana
    [5] => banana
    [10] => banana
    [bar] => banana
)
```

### Veja também

- [array\_fill()](function.array-fill.md) - Preenche um array com valores
- [array\_combine()](function.array-combine.md) - Cria um array usando um array para chaves e outro para valores

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
