# A classe AppendIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.appenditerator.php

---

# A classe AppendIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Um Iterador que itera sobre vários iteradores um após o outro.

## Resumo da classe

class ****AppendIterator****
extends
[IteratorIterator](class.iteratoriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](appenditerator.construct.md)()

public function [append](appenditerator.append.md)([Iterator](class.iterator.md) `$iterator`): [void](language.types.void.md)

public function [current](appenditerator.current.md)(): [mixed](language.types.mixed.md)

public function [getArrayIterator](appenditerator.getarrayiterator.md)(): [ArrayIterator](class.arrayiterator.md)

public function [getIteratorIndex](appenditerator.getiteratorindex.md)(): [?](language.types.null.md)[int](language.types.integer.md)

public function [key](appenditerator.key.md)(): scalar

public function [next](appenditerator.next.md)(): [void](language.types.void.md)

public function [rewind](appenditerator.rewind.md)(): [void](language.types.void.md)

public function [valid](appenditerator.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [AppendIterator::append](appenditerator.append.md) — Acrescenta um iterador
- [AppendIterator::\_\_construct](appenditerator.construct.md) — Constrói um AppendIterator
- [AppendIterator::current](appenditerator.current.md) — Obtém o valor atual
- [AppendIterator::getArrayIterator](appenditerator.getarrayiterator.md) — Obtém o ArrayIterator
- [AppendIterator::getIteratorIndex](appenditerator.getiteratorindex.md) — Obtém um índice dos iteradores
- [AppendIterator::key](appenditerator.key.md) — Obtém a chave atual
- [AppendIterator::next](appenditerator.next.md) — Move para o próximo elemento
- [AppendIterator::rewind](appenditerator.rewind.md) — Rebobina o Iterador
- [AppendIterator::valid](appenditerator.valid.md) — Verifica a validade do elemento atual

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
