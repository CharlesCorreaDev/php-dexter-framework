# A classe NoRewindIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.norewinditerator.php

---

# A classe NoRewindIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Este iterador ignora operações de rebobinamento. Isso permite processar um iterador em vários loops foreach parciais.

## Resumo da classe

class ****NoRewindIterator****
extends
[IteratorIterator](class.iteratoriterator.md)
{

/\* Métodos \*/

public function [\_\_construct](norewinditerator.construct.md)([Iterator](class.iterator.md) `$iterator`)

public function [current](norewinditerator.current.md)(): [mixed](language.types.mixed.md)

public function [key](norewinditerator.key.md)(): [mixed](language.types.mixed.md)

public function [next](norewinditerator.next.md)(): [void](language.types.void.md)

public function [rewind](norewinditerator.rewind.md)(): [void](language.types.void.md)

public function [valid](norewinditerator.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [NoRewindIterator::\_\_construct](norewinditerator.construct.md) — Constrói um NoRewindIterator
- [NoRewindIterator::current](norewinditerator.current.md) — Obtém o valor atual
- [NoRewindIterator::key](norewinditerator.key.md) — Obtém a chave atual
- [NoRewindIterator::next](norewinditerator.next.md) — Avança para o próximo elemento
- [NoRewindIterator::rewind](norewinditerator.rewind.md) — Impede a operação de rebobinar no iterador interno
- [NoRewindIterator::valid](norewinditerator.valid.md) — Valida o iterador

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
