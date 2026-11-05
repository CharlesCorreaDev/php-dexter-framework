# A classe InfiniteIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.infiniteiterator.php

---

# A classe InfiniteIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

**InfiniteIterator** permite iterar
infinitamente sobre um iterador sem ter que rebobiná-lo manualmente
ao alcançar o seu final.

## Resumo da classe

class ****InfiniteIterator****
extends
[IteratorIterator](class.iteratoriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](infiniteiterator.construct.md)([Iterator](class.iterator.md) `$iterator`)

public function [next](infiniteiterator.next.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [InfiniteIterator::\_\_construct](infiniteiterator.construct.md) — Constrói um InfiniteIterator
- [InfiniteIterator::next](infiniteiterator.next.md) — Movimenta o Iterador Interno para frente ou rebobina

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
