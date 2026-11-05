# A classe RecursiveFilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursivefilteriterator.php

---

# A classe RecursiveFilterIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Este iterador abstrato filtra valores indesejados para um [RecursiveIterator](class.recursiveiterator.md).
Esta classe deve ser estendida para implementar filtros personalizados.
O **RecursiveFilterIterator::accept()** deve ser implementado na subclasse.

## Resumo da classe

abstract
class ****RecursiveFilterIterator****
extends
[FilterIterator](class.filteriterator.md)
implements
[RecursiveIterator](class.recursiveiterator.md) {

/\* Métodos \*/

public function [\_\_construct](recursivefilteriterator.construct.md)([RecursiveIterator](class.recursiveiterator.md) `$iterator`)

public function [getChildren](recursivefilteriterator.getchildren.md)(): [?](language.types.null.md)[RecursiveFilterIterator](class.recursivefilteriterator.md)

public function [hasChildren](recursivefilteriterator.haschildren.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [FilterIterator::accept](filteriterator.accept.md)(): [bool](language.types.boolean.md)

public function [FilterIterator::current](filteriterator.current.md)(): [mixed](language.types.mixed.md)

public function [FilterIterator::key](filteriterator.key.md)(): [mixed](language.types.mixed.md)

public function [FilterIterator::next](filteriterator.next.md)(): [void](language.types.void.md)

public function [FilterIterator::rewind](filteriterator.rewind.md)(): [void](language.types.void.md)

public function [FilterIterator::valid](filteriterator.valid.md)(): [bool](language.types.boolean.md)

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [RecursiveFilterIterator::\_\_construct](recursivefilteriterator.construct.md) — Cria um RecursiveFilterIterator a partir de um RecursiveIterator
- [RecursiveFilterIterator::getChildren](recursivefilteriterator.getchildren.md) — Retorna os filhos do iterador interno contidos em um RecursiveFilterIterator
- [RecursiveFilterIterator::hasChildren](recursivefilteriterator.haschildren.md) — Verifica se o elemento atual do iterador interno tem filhos

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
