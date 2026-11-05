# A classe ArrayIterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.arrayiterator.php

---

# A classe ArrayIterator

(PHP 5, PHP 7, PHP 8)

## Introdução

Permite a remoção de elementos e a modificação de
chaves e valores ao iterar sobre [array](language.types.array.md)s ou [object](language.types.object.md)s.

Para iterar o mesmo array mais de uma vez, é recomendado
instanciar [ArrayObject](class.arrayobject.md) e usar a
instância de **ArrayIterator** criada implicitamente ao
usar [`foreach`](control-structures.foreach.md) para iterar sobre o array armazenado, ou criar uma
chamando o método [ArrayObject::getIterator()](arrayobject.getiterator.md) manualmente.

## Resumo da classe

class ****ArrayIterator****
implements
[SeekableIterator](class.seekableiterator.md),
[ArrayAccess](class.arrayaccess.md),
[Serializable](class.serializable.md),
[Countable](class.countable.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[STD\_PROP\_LIST](class.arrayiterator.md#arrayiterator.constants.std-prop-list);

public
const
[int](language.types.integer.md)
[ARRAY\_AS\_PROPS](class.arrayiterator.md#arrayiterator.constants.array-as-props);

/\* Métodos \*/

public function [\_\_construct](arrayiterator.construct.md)([array](language.types.array.md)|[object](language.types.object.md) `$array` = [], [int](language.types.integer.md) `$flags` = 0)

public function [append](arrayiterator.append.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [asort](arrayiterator.asort.md)([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

public function [count](arrayiterator.count.md)(): [int](language.types.integer.md)

public function [current](arrayiterator.current.md)(): [mixed](language.types.mixed.md)

public function [getArrayCopy](arrayiterator.getarraycopy.md)(): [array](language.types.array.md)

public function [getFlags](arrayiterator.getflags.md)(): [int](language.types.integer.md)

public function [key](arrayiterator.key.md)(): [string](language.types.string.md)|[int](language.types.integer.md)|[null](language.types.null.md)

public function [ksort](arrayiterator.ksort.md)([int](language.types.integer.md) `$flags` = **`SORT_REGULAR`**): [true](language.types.singleton.md)

public function [natcasesort](arrayiterator.natcasesort.md)(): [true](language.types.singleton.md)

public function [natsort](arrayiterator.natsort.md)(): [true](language.types.singleton.md)

public function [next](arrayiterator.next.md)(): [void](language.types.void.md)

public function [offsetExists](arrayiterator.offsetexists.md)([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

public function [offsetGet](arrayiterator.offsetget.md)([mixed](language.types.mixed.md) `$key`): [mixed](language.types.mixed.md)

public function [offsetSet](arrayiterator.offsetset.md)([mixed](language.types.mixed.md) `$key`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](arrayiterator.offsetunset.md)([mixed](language.types.mixed.md) `$key`): [void](language.types.void.md)

public function [rewind](arrayiterator.rewind.md)(): [void](language.types.void.md)

public function [seek](arrayiterator.seek.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [serialize](arrayiterator.serialize.md)(): [string](language.types.string.md)

public function [setFlags](arrayiterator.setflags.md)([int](language.types.integer.md) `$flags`): [void](language.types.void.md)

public function [uasort](arrayiterator.uasort.md)([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

public function [uksort](arrayiterator.uksort.md)([callable](language.types.callable.md) `$callback`): [true](language.types.singleton.md)

public function [unserialize](arrayiterator.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [valid](arrayiterator.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

## ArrayIterator Flags

**`ArrayIterator::STD_PROP_LIST`**
:   As propriedades de objeto têm sua funcionalidade normal
    quando acessados como listas ([var\_dump()](function.var-dump.md), [`foreach`](control-structures.foreach.md) etc.).

**`ArrayIterator::ARRAY_AS_PROPS`**
:   Itens podem ser acessados como propriedades (leitura e escrita).

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [ArrayIterator::append](arrayiterator.append.md) — Anexa um elemento
- [ArrayIterator::asort](arrayiterator.asort.md) — Ordena entradas pelos valores
- [ArrayIterator::\_\_construct](arrayiterator.construct.md) — Constrói um ArrayIterator
- [ArrayIterator::count](arrayiterator.count.md) — Conta os elementos
- [ArrayIterator::current](arrayiterator.current.md) — Retorna a entrada atual do array
- [ArrayIterator::getArrayCopy](arrayiterator.getarraycopy.md) — Obtém cópia do array
- [ArrayIterator::getFlags](arrayiterator.getflags.md) — Retorna as flags de comportamento
- [ArrayIterator::key](arrayiterator.key.md) — Retorna a chave do elemento atual do array
- [ArrayIterator::ksort](arrayiterator.ksort.md) — Ordena entradas por chaves
- [ArrayIterator::natcasesort](arrayiterator.natcasesort.md) — Ordena entradas naturalmente, sem diferenciar maiúsculas de minúsculas
- [ArrayIterator::natsort](arrayiterator.natsort.md) — Ordena entradas naturalmente
- [ArrayIterator::next](arrayiterator.next.md) — Avança para o próximo elemento
- [ArrayIterator::offsetExists](arrayiterator.offsetexists.md) — Verificar se o deslocamento existe
- [ArrayIterator::offsetGet](arrayiterator.offsetget.md) — Obtém valor para um deslocamento
- [ArrayIterator::offsetSet](arrayiterator.offsetset.md) — Define valor para um deslocamento
- [ArrayIterator::offsetUnset](arrayiterator.offsetunset.md) — Remove valor para um deslocamento
- [ArrayIterator::rewind](arrayiterator.rewind.md) — Retrocede o array
- [ArrayIterator::seek](arrayiterator.seek.md) — Aponta para uma posição
- [ArrayIterator::serialize](arrayiterator.serialize.md) — Serializa
- [ArrayIterator::setFlags](arrayiterator.setflags.md) — Define as flags que irão alterar o comportamento
- [ArrayIterator::uasort](arrayiterator.uasort.md) — Ordena com uma função de comparação definida pelo usuário e manter a associação de índices
- [ArrayIterator::uksort](arrayiterator.uksort.md) — Ordena por chaves usando uma função de comparação definida pelo usuário
- [ArrayIterator::unserialize](arrayiterator.unserialize.md) — Desserializa
- [ArrayIterator::valid](arrayiterator.valid.md) — Verifica se o iterador de array contém mais entradas

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
