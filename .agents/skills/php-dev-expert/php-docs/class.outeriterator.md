# A interface OuterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.outeriterator.php

---

# A interface OuterIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Classes que implementam **OuterIterator** podem ser usadas para iterar
sobre iteradores.

## Resumo da Interface

interface ****OuterIterator****
extends
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [getInnerIterator](outeriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

/\* Métodos herdados \*/

public function [Iterator::current](iterator.current.md)(): [mixed](language.types.mixed.md)

public function [Iterator::key](iterator.key.md)(): [mixed](language.types.mixed.md)

public function [Iterator::next](iterator.next.md)(): [void](language.types.void.md)

public function [Iterator::rewind](iterator.rewind.md)(): [void](language.types.void.md)

public function [Iterator::valid](iterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [OuterIterator::getInnerIterator](outeriterator.getinneriterator.md) — Retorna o iterador interno para a entrada atual

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
