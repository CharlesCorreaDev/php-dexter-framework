# A classe RecursiveTreeIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursivetreeiterator.php

---

# A classe RecursiveTreeIterator

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

Permite iterar sobre um [RecursiveIterator](class.recursiveiterator.md) para gerar uma árvore gráfica ASCII.

## Resumo da classe

class ****RecursiveTreeIterator****
extends
[RecursiveIteratorIterator](class.recursiveiteratoriterator.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[RecursiveIteratorIterator::LEAVES\_ONLY](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.leaves-only);

public
const
[int](language.types.integer.md)
[RecursiveIteratorIterator::SELF\_FIRST](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.self-first);

public
const
[int](language.types.integer.md)
[RecursiveIteratorIterator::CHILD\_FIRST](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.child-first);

public
const
[int](language.types.integer.md)
[RecursiveIteratorIterator::CATCH\_GET\_CHILD](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.catch-get-child);

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[BYPASS\_CURRENT](class.recursivetreeiterator.md#recursivetreeiterator.constants.bypass-current);

public
const
[int](language.types.integer.md)
[BYPASS\_KEY](class.recursivetreeiterator.md#recursivetreeiterator.constants.bypass-key);

public
const
[int](language.types.integer.md)
[PREFIX\_LEFT](class.recursivetreeiterator.md#recursivetreeiterator.constants.prefix-left);

public
const
[int](language.types.integer.md)
[PREFIX\_MID\_HAS\_NEXT](class.recursivetreeiterator.md#recursivetreeiterator.constants.prefix-mid-has-next) = 1;

public
const
[int](language.types.integer.md)
[PREFIX\_MID\_LAST](class.recursivetreeiterator.md#recursivetreeiterator.constants.prefix-mid-last) = 2;

public
const
[int](language.types.integer.md)
[PREFIX\_END\_HAS\_NEXT](class.recursivetreeiterator.md#recursivetreeiterator.constants.prefix-end-has-next) = 3;

public
const
[int](language.types.integer.md)
[PREFIX\_END\_LAST](class.recursivetreeiterator.md#recursivetreeiterator.constants.prefix-end-last) = 4;

public
const
[int](language.types.integer.md)
[PREFIX\_RIGHT](class.recursivetreeiterator.md#recursivetreeiterator.constants.prefix-right) = 5;

/\* Métodos \*/

public function [\_\_construct](recursivetreeiterator.construct.md)(  
    [RecursiveIterator](class.recursiveiterator.md)|[IteratorAggregate](class.iteratoraggregate.md) `$iterator`,  
    [int](language.types.integer.md) `$flags` = **`RecursiveTreeIterator::BYPASS_KEY`**,  
    [int](language.types.integer.md) `$cachingIteratorFlags` = **`CachingIterator::CATCH_GET_CHILD`**,  
    [int](language.types.integer.md) `$mode` = **`RecursiveTreeIterator::SELF_FIRST`**  
)

public function [beginChildren](recursivetreeiterator.beginchildren.md)(): [void](language.types.void.md)

public function [beginIteration](recursivetreeiterator.beginiteration.md)(): [RecursiveIterator](class.recursiveiterator.md)

public function [callGetChildren](recursivetreeiterator.callgetchildren.md)(): [RecursiveIterator](class.recursiveiterator.md)

public function [callHasChildren](recursivetreeiterator.callhaschildren.md)(): [bool](language.types.boolean.md)

public function [current](recursivetreeiterator.current.md)(): [mixed](language.types.mixed.md)

public function [endChildren](recursivetreeiterator.endchildren.md)(): [void](language.types.void.md)

public function [endIteration](recursivetreeiterator.enditeration.md)(): [void](language.types.void.md)

public function [getEntry](recursivetreeiterator.getentry.md)(): [string](language.types.string.md)

public function [getPostfix](recursivetreeiterator.getpostfix.md)(): [string](language.types.string.md)

public function [getPrefix](recursivetreeiterator.getprefix.md)(): [string](language.types.string.md)

public function [key](recursivetreeiterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](recursivetreeiterator.next.md)(): [void](language.types.void.md)

public function [nextElement](recursivetreeiterator.nextelement.md)(): [void](language.types.void.md)

public function [rewind](recursivetreeiterator.rewind.md)(): [void](language.types.void.md)

public function [setPostfix](recursivetreeiterator.setpostfix.md)([string](language.types.string.md) `$postfix`): [void](language.types.void.md)

public function [setPrefixPart](recursivetreeiterator.setprefixpart.md)([int](language.types.integer.md) `$part`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [valid](recursivetreeiterator.valid.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [RecursiveIteratorIterator::beginChildren](recursiveiteratoriterator.beginchildren.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::beginIteration](recursiveiteratoriterator.beginiteration.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::callGetChildren](recursiveiteratoriterator.callgetchildren.md)(): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

public function [RecursiveIteratorIterator::callHasChildren](recursiveiteratoriterator.callhaschildren.md)(): [bool](language.types.boolean.md)

public function [RecursiveIteratorIterator::current](recursiveiteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [RecursiveIteratorIterator::endChildren](recursiveiteratoriterator.endchildren.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::endIteration](recursiveiteratoriterator.enditeration.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::getDepth](recursiveiteratoriterator.getdepth.md)(): [int](language.types.integer.md)

public function [RecursiveIteratorIterator::getInnerIterator](recursiveiteratoriterator.getinneriterator.md)(): [RecursiveIterator](class.recursiveiterator.md)

public function [RecursiveIteratorIterator::getMaxDepth](recursiveiteratoriterator.getmaxdepth.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [RecursiveIteratorIterator::getSubIterator](recursiveiteratoriterator.getsubiterator.md)([?](language.types.null.md)[int](language.types.integer.md) `$level` = **`null`**): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

public function [RecursiveIteratorIterator::key](recursiveiteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [RecursiveIteratorIterator::next](recursiveiteratoriterator.next.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::nextElement](recursiveiteratoriterator.nextelement.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::rewind](recursiveiteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [RecursiveIteratorIterator::setMaxDepth](recursiveiteratoriterator.setmaxdepth.md)([int](language.types.integer.md) `$maxDepth` = -1): [void](language.types.void.md)

public function [RecursiveIteratorIterator::valid](recursiveiteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`RecursiveTreeIterator::BYPASS_CURRENT`**

**`RecursiveTreeIterator::BYPASS_KEY`**

**`RecursiveTreeIterator::PREFIX_LEFT`**

**`RecursiveTreeIterator::PREFIX_MID_HAS_NEXT`**

**`RecursiveTreeIterator::PREFIX_MID_LAST`**

**`RecursiveTreeIterator::PREFIX_END_HAS_NEXT`**

**`RecursiveTreeIterator::PREFIX_END_LAST`**

**`RecursiveTreeIterator::PREFIX_RIGHT`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [RecursiveTreeIterator::beginChildren](recursivetreeiterator.beginchildren.md) — Iniciar filhos
- [RecursiveTreeIterator::beginIteration](recursivetreeiterator.beginiteration.md) — Inicia iteração
- [RecursiveTreeIterator::callGetChildren](recursivetreeiterator.callgetchildren.md) — Obtém filhos
- [RecursiveTreeIterator::callHasChildren](recursivetreeiterator.callhaschildren.md) — Tem filhos
- [RecursiveTreeIterator::\_\_construct](recursivetreeiterator.construct.md) — Constrói um RecursiveTreeIterator
- [RecursiveTreeIterator::current](recursivetreeiterator.current.md) — Obtém o elemento atual
- [RecursiveTreeIterator::endChildren](recursivetreeiterator.endchildren.md) — Termina os filhos
- [RecursiveTreeIterator::endIteration](recursivetreeiterator.enditeration.md) — Termina iteração
- [RecursiveTreeIterator::getEntry](recursivetreeiterator.getentry.md) — Obtém entrada atual
- [RecursiveTreeIterator::getPostfix](recursivetreeiterator.getpostfix.md) — Obtém o sufixo
- [RecursiveTreeIterator::getPrefix](recursivetreeiterator.getprefix.md) — Obtém o prefixo
- [RecursiveTreeIterator::key](recursivetreeiterator.key.md) — Obtém a chave do elemento atual
- [RecursiveTreeIterator::next](recursivetreeiterator.next.md) — Move para o próximo elemento
- [RecursiveTreeIterator::nextElement](recursivetreeiterator.nextelement.md) — Próximo elemento
- [RecursiveTreeIterator::rewind](recursivetreeiterator.rewind.md) — Rebobina o iterador
- [RecursiveTreeIterator::setPostfix](recursivetreeiterator.setpostfix.md) — Define sufixo
- [RecursiveTreeIterator::setPrefixPart](recursivetreeiterator.setprefixpart.md) — Define uma parte do prefixo
- [RecursiveTreeIterator::valid](recursivetreeiterator.valid.md) — Verifica validade

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
