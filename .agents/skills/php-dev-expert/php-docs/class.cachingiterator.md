# A classe CachingIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.cachingiterator.php

---

# A classe CachingIterator

(PHP 5, PHP 7, PHP 8)

## Introdução

Este objeto suporta iteração em cache sobre outro iterador.

## Resumo da classe

class ****CachingIterator****
extends
[IteratorIterator](class.iteratoriterator.md)
implements
[ArrayAccess](class.arrayaccess.md),
[Countable](class.countable.md),
[Stringable](class.stringable.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[CALL\_TOSTRING](class.cachingiterator.md#cachingiterator.constants.call-tostring);

public
const
[int](language.types.integer.md)
[CATCH\_GET\_CHILD](class.cachingiterator.md#cachingiterator.constants.catch-get-child);

public
const
[int](language.types.integer.md)
[TOSTRING\_USE\_KEY](class.cachingiterator.md#cachingiterator.constants.tostring-use-key);

public
const
[int](language.types.integer.md)
[TOSTRING\_USE\_CURRENT](class.cachingiterator.md#cachingiterator.constants.tostring-use-current);

public
const
[int](language.types.integer.md)
[TOSTRING\_USE\_INNER](class.cachingiterator.md#cachingiterator.constants.tostring-use-inner);

public
const
[int](language.types.integer.md)
[FULL\_CACHE](class.cachingiterator.md#cachingiterator.constants.full-cache);

/\* Métodos \*/

public function [\_\_construct](cachingiterator.construct.md)([Iterator](class.iterator.md) `$iterator`, [int](language.types.integer.md) `$flags` = **`CachingIterator::CALL_TOSTRING`**)

public function [count](cachingiterator.count.md)(): [int](language.types.integer.md)

public function [current](cachingiterator.current.md)(): [mixed](language.types.mixed.md)

public function [getCache](cachingiterator.getcache.md)(): [array](language.types.array.md)

public function [getFlags](cachingiterator.getflags.md)(): [int](language.types.integer.md)

public function [hasNext](cachingiterator.hasnext.md)(): [bool](language.types.boolean.md)

public function [key](cachingiterator.key.md)(): scalar

public function [next](cachingiterator.next.md)(): [void](language.types.void.md)

public function [offsetExists](cachingiterator.offsetexists.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [offsetGet](cachingiterator.offsetget.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

public function [offsetSet](cachingiterator.offsetset.md)([string](language.types.string.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](cachingiterator.offsetunset.md)([string](language.types.string.md) `$key`): [void](language.types.void.md)

public function [rewind](cachingiterator.rewind.md)(): [void](language.types.void.md)

public function [setFlags](cachingiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [\_\_toString](cachingiterator.tostring.md)(): [string](language.types.string.md)

public function [valid](cachingiterator.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [IteratorIterator::current](iteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::getInnerIterator](iteratoriterator.getinneriterator.md)(): [?](language.types.null.md)[Iterator](class.iterator.md)

public function [IteratorIterator::key](iteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [IteratorIterator::next](iteratoriterator.next.md)(): [void](language.types.void.md)

public function [IteratorIterator::rewind](iteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [IteratorIterator::valid](iteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`CachingIterator::CALL_TOSTRING`**
:   Converte cada elemento para string.

**`CachingIterator::CATCH_GET_CHILD`**
:   Não lançar exceção ao acessar filhos.

**`CachingIterator::TOSTRING_USE_KEY`**
:   Usar [key](cachingiterator.key.md) para conversão para
    string.

**`CachingIterator::TOSTRING_USE_CURRENT`**
:   Usar [current](cachingiterator.current.md) para
    conversão para string.

**`CachingIterator::TOSTRING_USE_INNER`**
:   Usar [inner](iteratoriterator.getinneriterator.md)
    para conversão para string.

**`CachingIterator::FULL_CACHE`**
:   Cache de todos os dados lidos.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | **CachingIterator** implementa [Stringable](class.stringable.md) agora. |

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [CachingIterator::\_\_construct](cachingiterator.construct.md) — Constrói um novo objeto CachingIterator para o iterador
- [CachingIterator::count](cachingiterator.count.md) — O número de elementos no iterador
- [CachingIterator::current](cachingiterator.current.md) — Retorna o elemento atual
- [CachingIterator::getCache](cachingiterator.getcache.md) — Recupera o conteúdo do cache
- [CachingIterator::getFlags](cachingiterator.getflags.md) — Obtém as opções utilizadas
- [CachingIterator::hasNext](cachingiterator.hasnext.md) — Verifica se o iterador interno possui um próximo elemento válido
- [CachingIterator::key](cachingiterator.key.md) — Retorna a chave para o elemento atual
- [CachingIterator::next](cachingiterator.next.md) — Move o iterador para frente
- [CachingIterator::offsetExists](cachingiterator.offsetexists.md) — O propósito do offsetExists
- [CachingIterator::offsetGet](cachingiterator.offsetget.md) — O propósito de offsetGet
- [CachingIterator::offsetSet](cachingiterator.offsetset.md) — O propósito do offsetSet
- [CachingIterator::offsetUnset](cachingiterator.offsetunset.md) — O objetivo do offsetUnset
- [CachingIterator::rewind](cachingiterator.rewind.md) — Rebobina o iterador
- [CachingIterator::setFlags](cachingiterator.setflags.md) — O propósito da função setFlags
- [CachingIterator::\_\_toString](cachingiterator.tostring.md) — Retorna a representação em string do elemento atual
- [CachingIterator::valid](cachingiterator.valid.md) — Verifica se o elemento atual é válido

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
