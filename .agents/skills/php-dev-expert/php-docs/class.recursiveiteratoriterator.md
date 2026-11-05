# Classe RecursiveIteratorIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursiveiteratoriterator.php

---

# Classe RecursiveIteratorIterator

(PHP 5, PHP 7, PHP 8)

## Introdução

Pode ser utilizado para percorrer interatores recursivos.

## Resumo da classe

class ****RecursiveIteratorIterator****
implements
[OuterIterator](class.outeriterator.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[LEAVES\_ONLY](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.leaves-only);

public
const
[int](language.types.integer.md)
[SELF\_FIRST](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.self-first);

public
const
[int](language.types.integer.md)
[CHILD\_FIRST](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.child-first);

public
const
[int](language.types.integer.md)
[CATCH\_GET\_CHILD](class.recursiveiteratoriterator.md#recursiveiteratoriterator.constants.catch-get-child);

/\* Métodos \*/

public function [\_\_construct](recursiveiteratoriterator.construct.md)([Traversable](class.traversable.md) `$iterator`, [int](language.types.integer.md) `$mode` = **`RecursiveIteratorIterator::LEAVES_ONLY`**, [int](language.types.integer.md) `$flags` = 0)

public function [beginChildren](recursiveiteratoriterator.beginchildren.md)(): [void](language.types.void.md)

public function [beginIteration](recursiveiteratoriterator.beginiteration.md)(): [void](language.types.void.md)

public function [callGetChildren](recursiveiteratoriterator.callgetchildren.md)(): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

public function [callHasChildren](recursiveiteratoriterator.callhaschildren.md)(): [bool](language.types.boolean.md)

public function [current](recursiveiteratoriterator.current.md)(): [mixed](language.types.mixed.md)

public function [endChildren](recursiveiteratoriterator.endchildren.md)(): [void](language.types.void.md)

public function [endIteration](recursiveiteratoriterator.enditeration.md)(): [void](language.types.void.md)

public function [getDepth](recursiveiteratoriterator.getdepth.md)(): [int](language.types.integer.md)

public function [getInnerIterator](recursiveiteratoriterator.getinneriterator.md)(): [RecursiveIterator](class.recursiveiterator.md)

public function [getMaxDepth](recursiveiteratoriterator.getmaxdepth.md)(): [int](language.types.integer.md)|[false](language.types.singleton.md)

public function [getSubIterator](recursiveiteratoriterator.getsubiterator.md)([?](language.types.null.md)[int](language.types.integer.md) `$level` = **`null`**): [?](language.types.null.md)[RecursiveIterator](class.recursiveiterator.md)

public function [key](recursiveiteratoriterator.key.md)(): [mixed](language.types.mixed.md)

public function [next](recursiveiteratoriterator.next.md)(): [void](language.types.void.md)

public function [nextElement](recursiveiteratoriterator.nextelement.md)(): [void](language.types.void.md)

public function [rewind](recursiveiteratoriterator.rewind.md)(): [void](language.types.void.md)

public function [setMaxDepth](recursiveiteratoriterator.setmaxdepth.md)([int](language.types.integer.md) `$maxDepth` = -1): [void](language.types.void.md)

public function [valid](recursiveiteratoriterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`RecursiveIteratorIterator::LEAVES_ONLY`**

**`RecursiveIteratorIterator::SELF_FIRST`**

**`RecursiveIteratorIterator::CHILD_FIRST`**

**`RecursiveIteratorIterator::CATCH_GET_CHILD`**

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [RecursiveIteratorIterator::beginChildren](recursiveiteratoriterator.beginchildren.md) — Inicia filhos
- [RecursiveIteratorIterator::beginIteration](recursiveiteratoriterator.beginiteration.md) — Inicia Iteração
- [RecursiveIteratorIterator::callGetChildren](recursiveiteratoriterator.callgetchildren.md) — Obtém filhos
- [RecursiveIteratorIterator::callHasChildren](recursiveiteratoriterator.callhaschildren.md) — Tem filhos
- [RecursiveIteratorIterator::\_\_construct](recursiveiteratoriterator.construct.md) — Constrói um RecursiveIteratorIterator
- [RecursiveIteratorIterator::current](recursiveiteratoriterator.current.md) — Retorna o valor do elemento atual
- [RecursiveIteratorIterator::endChildren](recursiveiteratoriterator.endchildren.md) — Encerra filhos
- [RecursiveIteratorIterator::endIteration](recursiveiteratoriterator.enditeration.md) — Finaliza Iteração
- [RecursiveIteratorIterator::getDepth](recursiveiteratoriterator.getdepth.md) — Retorna a profundidade atual da iteração recursiva
- [RecursiveIteratorIterator::getInnerIterator](recursiveiteratoriterator.getinneriterator.md) — Obtém iterador interno
- [RecursiveIteratorIterator::getMaxDepth](recursiveiteratoriterator.getmaxdepth.md) — Obtém a profundidade máxima
- [RecursiveIteratorIterator::getSubIterator](recursiveiteratoriterator.getsubiterator.md) — Retorna o sub-iterador ativo atual
- [RecursiveIteratorIterator::key](recursiveiteratoriterator.key.md) — Retorna a chave atual
- [RecursiveIteratorIterator::next](recursiveiteratoriterator.next.md) — Avança para o próximo elemento
- [RecursiveIteratorIterator::nextElement](recursiveiteratoriterator.nextelement.md) — Próximo elemento
- [RecursiveIteratorIterator::rewind](recursiveiteratoriterator.rewind.md) — Recomeça o iterador no primeiro elemento do primeiro iterador interno
- [RecursiveIteratorIterator::setMaxDepth](recursiveiteratoriterator.setmaxdepth.md) — Define profundidade máxima
- [RecursiveIteratorIterator::valid](recursiveiteratoriterator.valid.md) — Verifica se a posição atual é válida

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
