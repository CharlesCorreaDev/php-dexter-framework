# A classe RecursiveArrayIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.recursivearrayiterator.php

---

# A classe RecursiveArrayIterator

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

## Introdução

Este iterador permite desfazer e modificar valores e chaves enquanto itera sobre arrays e objetos,
da mesma forma que o [ArrayIterator](class.arrayiterator.md). Além disso, é possível iterar
sobre a entrada atual do iterador.

## Resumo da classe

class ****RecursiveArrayIterator****
extends
[ArrayIterator](class.arrayiterator.md)
implements
[RecursiveIterator](class.recursiveiterator.md) {

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[ArrayIterator::STD\_PROP\_LIST](class.arrayiterator.md#arrayiterator.constants.std-prop-list);

public
const
[int](language.types.integer.md)
[ArrayIterator::ARRAY\_AS\_PROPS](class.arrayiterator.md#arrayiterator.constants.array-as-props);

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[CHILD\_ARRAYS\_ONLY](class.recursivearrayiterator.md#recursivearrayiterator.constants.child-arrays-only);

/\* Métodos \*/

public function [getChildren](recursivearrayiterator.getchildren.md)(): [?](language.types.null.md)[RecursiveArrayIterator](class.recursivearrayiterator.md)

public function [hasChildren](recursivearrayiterator.haschildren.md)(): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

public function [ArrayIterator::\_\_construct](arrayiterator.construct.md)([array](language.types.array.md)|[object](language.types.object.md) `$array` = [], [int](language.types.integer.md) `$flags` = 0)

public function [ArrayIterator::append](arrayiterator.append.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [ArrayIterator::asort](arrayiterator.asort.md)([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

public function [ArrayIterator::count](arrayiterator.count.md)(): [int](language.types.integer.md)

public function [ArrayIterator::current](arrayiterator.current.md)(): [mixed](language.types.mixed.md)

public function [ArrayIterator::getArrayCopy](arrayiterator.getarraycopy.md)(): [array](language.types.array.md)

public function [ArrayIterator::getFlags](arrayiterator.getflags.md)(): [int](language.types.integer.md)

public function [ArrayIterator::key](arrayiterator.key.md)(): [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

public function [ArrayIterator::ksort](arrayiterator.ksort.md)([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

public function [ArrayIterator::natcasesort](arrayiterator.natcasesort.md)(): [true](language.types.singleton.md)

public function [ArrayIterator::natsort](arrayiterator.natsort.md)(): [true](language.types.singleton.md)

public function [ArrayIterator::next](arrayiterator.next.md)(): [void](language.types.void.md)

public function [ArrayIterator::offsetExists](arrayiterator.offsetexists.md)([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

public function [ArrayIterator::offsetGet](arrayiterator.offsetget.md)([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

public function [ArrayIterator::offsetSet](arrayiterator.offsetset.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [ArrayIterator::offsetUnset](arrayiterator.offsetunset.md)([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

public function [ArrayIterator::rewind](arrayiterator.rewind.md)(): [void](language.types.void.md)

public function [ArrayIterator::seek](arrayiterator.seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [ArrayIterator::serialize](arrayiterator.serialize.md)(): [string](language.types.string.md)

public function [ArrayIterator::setFlags](arrayiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [ArrayIterator::uasort](arrayiterator.uasort.md)([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

public function [ArrayIterator::uksort](arrayiterator.uksort.md)([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

public function [ArrayIterator::unserialize](arrayiterator.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [ArrayIterator::valid](arrayiterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

## Flags do RecursiveArrayIterator

**`RecursiveArrayIterator::CHILD_ARRAYS_ONLY`**
:   Trata apenas arrays (não objetos) como tendo filhos para iteração recursiva.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [RecursiveArrayIterator::getChildren](recursivearrayiterator.getchildren.md) — Retorna um iterador para a entrada atual se ela for um array ou um object
- [RecursiveArrayIterator::hasChildren](recursivearrayiterator.haschildren.md) — Retorna se a entrada atual é um array ou um objeto

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
