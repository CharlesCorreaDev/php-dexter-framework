# Obtém o iterador interno

> **Fonte / Source:** https://www.php.net/manual/pt_BR/iteratoriterator.getinneriterator.php

---

# IteratorIterator::getInnerIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

IteratorIterator::getInnerIterator — Obtém o iterador interno

### Descrição

public function **IteratorIterator::getInnerIterator**(): [?](language.types.null.md)[Iterator](class.iterator.md)

Obtém o iterador interno.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O iterador interno passado para [IteratorIterator::\_\_construct()](iteratoriterator.construct.md), ou **`null`** quando não há iterador interno.

### Veja também

- [Iterator](class.iterator.md)
- [OuterIterator](class.outeriterator.md)

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
