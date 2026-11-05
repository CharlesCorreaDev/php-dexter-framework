# A classe FilterIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.filteriterator.php

---

# A classe FilterIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Este iterador abstrato filtra os valores indesejados. Esta classe deve ser estendida para
implementar filtros de iterador personalizados. O [FilterIterator::accept()](filteriterator.accept.md)
deve ser implementado na subclasse.

## Resumo da classe

abstract
class ****FilterIterator****
extends
[IteratorIterator](class.iteratoriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](filteriterator.construct.md)([Iterator](class.iterator.md) `$iterator`)

public function [accept](filteriterator.accept.md)(): [bool](language.types.boolean.md)

public function [current](filteriterator.current.md)(): [mixed](language.types.mixed.md)

public function [key](filteriterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](filteriterator.next.md)(): [void](language.types.void.md)

public function [rewind](filteriterator.rewind.md)(): [void](language.types.void.md)

public function [valid](filteriterator.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [FilterIterator::accept](filteriterator.accept.md) — Verifica se o elemento atual do iterador é aceitável
- [FilterIterator::\_\_construct](filteriterator.construct.md) — Constrói um FilterIterator
- [FilterIterator::current](filteriterator.current.md) — Retorna o valor do elemento atual
- [FilterIterator::key](filteriterator.key.md) — Retorna a chave do elemento atual
- [FilterIterator::next](filteriterator.next.md) — Avança o iterador
- [FilterIterator::rewind](filteriterator.rewind.md) — Recomeça o iterador
- [FilterIterator::valid](filteriterator.valid.md) — Verifica se o elemento atual é válido ou não

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
