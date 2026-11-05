# A classe ParentIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.parentiterator.php

---

# A classe ParentIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Este [FilterIterator](class.filteriterator.md) estendido permite uma iteração recursiva
usando [RecursiveIteratorIterator](class.recursiveiteratoriterator.md) que mostra apenas os
elementos que têm filhos.

## Resumo da classe

class ****ParentIterator****
extends
[RecursiveFilterIterator](class.recursivefilteriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](parentiterator.construct.md)([RecursiveIterator](class.recursiveiterator.md) `$iterator`)

public function [accept](parentiterator.accept.md)(): [bool](language.types.boolean.md)

public function [getChildren](parentiterator.getchildren.md)(): [ParentIterator](class.parentiterator.md)

public function [hasChildren](parentiterator.haschildren.md)(): [bool](language.types.boolean.md)

public function [next](parentiterator.next.md)(): [void](language.types.void.md)

public function [rewind](parentiterator.rewind.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [RecursiveFilterIterator::getChildren](recursivefilteriterator.getchildren.md)(): [?](language.types.null.md)[RecursiveFilterIterator](class.recursivefilteriterator.md)

public function [RecursiveFilterIterator::hasChildren](recursivefilteriterator.haschildren.md)(): [bool](language.types.boolean.md)

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

- [ParentIterator::accept](parentiterator.accept.md) — Determina a aceitabilidade
- [ParentIterator::\_\_construct](parentiterator.construct.md) — Constrói um ParentIterator
- [ParentIterator::getChildren](parentiterator.getchildren.md) — Retorna os filhos do iterador interno de um ParentIterator
- [ParentIterator::hasChildren](parentiterator.haschildren.md) — Verifica se o elemento atual do iterador interno tem ou não filhos
- [ParentIterator::next](parentiterator.next.md) — Avança o iterador
- [ParentIterator::rewind](parentiterator.rewind.md) — Recomeça o iterador

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
