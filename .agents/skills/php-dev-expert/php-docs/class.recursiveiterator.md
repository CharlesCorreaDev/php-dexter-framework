# A interface RecursiveIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursiveiterator.php

---

# A interface RecursiveIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Classes que implementam **RecursiveIterator** podem ser usadas para iterar
sobre iteradores de forma recursiva.

## Resumo da Interface

interface ****RecursiveIterator****
extends
[Iterator](class.iterator.md) {

/\* Métodos \*/

public function [getChildren](recursiveiterator.getchildren.md)(): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

public function [hasChildren](recursiveiterator.haschildren.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [Iterator::current](iterator.current.md)(): [mixed](language.types.mixed.md)

public function [Iterator::key](iterator.key.md)(): [mixed](language.types.mixed.md)

public function [Iterator::next](iterator.next.md)(): [void](language.types.void.md)

public function [Iterator::rewind](iterator.rewind.md)(): [void](language.types.void.md)

public function [Iterator::valid](iterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [RecursiveIterator::getChildren](recursiveiterator.getchildren.md) — Retorna um iterador para a entrada atual
- [RecursiveIterator::hasChildren](recursiveiterator.haschildren.md) — Retorna se um iterador pode ser criado para a entrada atual

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
