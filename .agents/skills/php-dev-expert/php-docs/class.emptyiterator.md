# A classe EmptyIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.emptyiterator.php

---

# A classe EmptyIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

A classe EmptyIterator para um iterador vazio.

## Resumo da classe

class ****EmptyIterator****
implements
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [current](emptyiterator.current.md)(): [never](language.types.never.md)

public function [key](emptyiterator.key.md)(): [never](language.types.never.md)

public function [next](emptyiterator.next.md)(): [void](language.types.void.md)

public function [rewind](emptyiterator.rewind.md)(): [void](language.types.void.md)

public function [valid](emptyiterator.valid.md)(): [false](language.types.singleton.md)

}

## Índice

- [EmptyIterator::current](emptyiterator.current.md) — O método current()
- [EmptyIterator::key](emptyiterator.key.md) — O método key()
- [EmptyIterator::next](emptyiterator.next.md) — O método next()
- [EmptyIterator::rewind](emptyiterator.rewind.md) — O método rewind()
- [EmptyIterator::valid](emptyiterator.valid.md) — Verifica se o elemento atual é válido

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
