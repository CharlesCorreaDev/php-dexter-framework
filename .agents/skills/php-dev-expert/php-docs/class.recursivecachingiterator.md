# A classe RecursiveCachingIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursivecachingiterator.php

---

# A classe RecursiveCachingIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

...

## Resumo da classe

class ****RecursiveCachingIterator****
extends
[CachingIterator](class.cachingiterator.md)
implements
[RecursiveIterator](class.recursiveiterator.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[CachingIterator::CALL\_TOSTRING](class.cachingiterator.md#cachingiterator.constants.call-tostring);

public
const
[int](language.types.integer.md)
[CachingIterator::CATCH\_GET\_CHILD](class.cachingiterator.md#cachingiterator.constants.catch-get-child);

public
const
[int](language.types.integer.md)
[CachingIterator::TOSTRING\_USE\_KEY](class.cachingiterator.md#cachingiterator.constants.tostring-use-key);

public
const
[int](language.types.integer.md)
[CachingIterator::TOSTRING\_USE\_CURRENT](class.cachingiterator.md#cachingiterator.constants.tostring-use-current);

public
const
[int](language.types.integer.md)
[CachingIterator::TOSTRING\_USE\_INNER](class.cachingiterator.md#cachingiterator.constants.tostring-use-inner);

public
const
[int](language.types.integer.md)
[CachingIterator::FULL\_CACHE](class.cachingiterator.md#cachingiterator.constants.full-cache);

/\* Métodos \*/

public function [\_\_construct](recursivecachingiterator.construct.md)([Iterator](class.iterator.md) `$iterator`, [int](language.types.integer.md) `$flags` = **`RecursiveCachingIterator::CALL_TOSTRING`**)

public function [getChildren](recursivecachingiterator.getchildren.md)(): [?](language.types.null.md)[RecursiveCachingIterator](class.recursivecachingiterator.md)

public function [hasChildren](recursivecachingiterator.haschildren.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [CachingIterator::count](cachingiterator.count.md)(): [int](language.types.integer.md)

public function [CachingIterator::current](cachingiterator.current.md)(): [mixed](language.types.mixed.md)

public function [CachingIterator::getCache](cachingiterator.getcache.md)(): [array](language.types.array.md)

public function [CachingIterator::getFlags](cachingiterator.getflags.md)(): [int](language.types.integer.md)

public function [CachingIterator::hasNext](cachingiterator.hasnext.md)(): [bool](language.types.boolean.md)

public function [CachingIterator::key](cachingiterator.key.md)(): scalar

public function [CachingIterator::next](cachingiterator.next.md)(): [void](language.types.void.md)

public function [CachingIterator::offsetExists](cachingiterator.offsetexists.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [CachingIterator::offsetGet](cachingiterator.offsetget.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

public function [CachingIterator::offsetSet](cachingiterator.offsetset.md)([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [CachingIterator::offsetUnset](cachingiterator.offsetunset.md)([string](language.types.string.md) `$key`): [void](language.types.void.md)

public function [CachingIterator::rewind](cachingiterator.rewind.md)(): [void](language.types.void.md)

public function [CachingIterator::setFlags](cachingiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [CachingIterator::\_\_toString](cachingiterator.tostring.md)(): [string](language.types.string.md)

public function [CachingIterator::valid](cachingiterator.valid.md)(): [bool](language.types.boolean.md)

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [RecursiveCachingIterator::\_\_construct](recursivecachingiterator.construct.md) — Construtor
- [RecursiveCachingIterator::getChildren](recursivecachingiterator.getchildren.md) — Retorna os filhos do iterador interno como um RecursiveCachingIterator
- [RecursiveCachingIterator::hasChildren](recursivecachingiterator.haschildren.md) — Verifica se o elemento atual do iterador interno possui filhos

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
