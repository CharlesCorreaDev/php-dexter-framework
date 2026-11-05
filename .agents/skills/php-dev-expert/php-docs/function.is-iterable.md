# Verifica se o conteúdo de uma variável é um valor iterável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-iterable.php

---

# is\_iterable

(PHP 7 >= 7.1.0, PHP 8)

is\_iterable — 
Verifica se o conteúdo de uma variável é um valor iterável

### Descrição

function **is\_iterable**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se o conteúdo de uma variável é aceita pelo
pseudo-tipo [iterable](language.types.iterable.md), ou seja, ela é um [array](language.types.array.md) ou
um objeto que implementa a classe [Traversable](class.traversable.md)

### Parâmetros

`value`
:   O valor a ser verificado

### Valor Retornado

Retorna **`true`** se `value` for iterável, **`false`**
caso contrário.

### Examples

**Exemplo #1 Exemplos de **is\_iterable()****

```
<?php

var_dump(is_iterable([1, 2, 3]));  // bool(true)
var_dump(is_iterable(new ArrayIterator([1, 2, 3])));  // bool(true)
var_dump(is_iterable((function () { yield 1; })()));  // bool(true)
var_dump(is_iterable(1));  // bool(false)
var_dump(is_iterable(new stdClass()));  // bool(false)

?>
```

### Veja também

- [is\_array()](function.is-array.md) - Verifica se a variável é um array

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
