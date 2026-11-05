# Verifica se o conteúdo de uma variável é um valor contável

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.is-countable.php

---

# is\_countable

(PHP 7 >= 7.3.0, PHP 8)

is\_countable — 
Verifica se o conteúdo de uma variável é um valor contável

### Descrição

function **is\_countable**([mixed](language.types.mixed.md) `$value`): [bool](language.types.boolean.md)

Verifica se o conteúdo de uma variável é um [array](language.types.array.md) ou
um objeto que implementa a classe [Countable](class.countable.md).

### Parâmetros

`value`
:   O valor a ser verificado

### Valor Retornado

Retorna **`true`** se `value` for contável, **`false`**
caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.3.0 | A função **is\_countable()** foi adicionada. |

### Examples

**Exemplo #1 Exemplos de **is\_countable()****

```
<?php
var_dump(is_countable([1, 2, 3])); // bool(true)
var_dump(is_countable(new ArrayIterator(['foo', 'bar', 'baz']))); // bool(true)
var_dump(is_countable(new ArrayIterator())); // bool(true)
var_dump(is_countable(new stdClass())); // bool(false)
?>
```

### Veja também

- [is\_array()](function.is-array.md) - Verifica se a variável é um array
- [is\_object()](function.is-object.md) - Verifica se uma variável é um objeto
- [is\_iterable()](function.is-iterable.md) - Verifica se o conteúdo de uma variável é um valor iterável
- [is\_bool()](function.is-bool.md) - Verifica se a variável é um booleano

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
