# Constrói um ArrayIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayiterator.construct.php

---

# ArrayIterator::\_\_construct

(PHP 5, PHP 7, PHP 8)

ArrayIterator::\_\_construct — Constrói um ArrayIterator

### Descrição

public function **ArrayIterator::\_\_construct**([array](language.types.array.md)|[object](language.types.object.md) `$array` = [], [int](language.types.integer.md) `$flags` = 0)

Constrói um [ArrayIterator](class.arrayiterator.md) [object](language.types.object.md).

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`array`
:   O array ou objeto a ser iterado.

`flags`
:   Flags para controlar o comportamento do objeto [ArrayIterator](class.arrayiterator.md).
    Veja [ArrayIterator::setFlags()](arrayiterator.setflags.md).

### Veja também

- [ArrayIterator::getArrayCopy()](arrayiterator.getarraycopy.md) - Obtém cópia do array

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
