# A Interface Sequence

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.ds-sequence.php

---

# A Interface Sequence

(PECL ds >= 1.0.0)

## Introdução

A Sequence descreve o comportamento de valores dispostos em uma única dimensão linear.
Algumas linguagens se referem a isso como uma "Lista". É semelhante a um array que usa
chaves incrementais de inteiro, com exceção de algumas características:

- Os valores sempre serão indexados como [0, 1, 2, …, size - 1].
- Apenas é permitido acessar valores pelo índice na faixa [0, size - 1].

Casos de uso:

- Onde é usada um array como uma lista (sem preocupação com as chaves).
- Uma alternativa mais eficiente para
  [SplDoublyLinkedList](class.spldoublylinkedlist.md) e
  [SplFixedArray](class.splfixedarray.md).

## Resumo da Interface

interface ****Ds\Sequence****
extends
[Ds\Collection](class.ds-collection.md),
[ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

abstract public function [allocate](ds-sequence.allocate.md)([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

abstract public function [apply](ds-sequence.apply.md)([callable](language.types.callable.md) `$callback`): [void](language.types.void.md)

abstract public function [capacity](ds-sequence.capacity.md)(): [int](language.types.integer.md)

abstract public function [contains](ds-sequence.contains.md)([mixed](language.types.mixed.md) `...$values`): [bool](language.types.boolean.md)

abstract public function [filter](ds-sequence.filter.md)([callable](language.types.callable.md) `$callback` = ?): [Ds\Sequence](class.ds-sequence.md)

abstract public function [find](ds-sequence.find.md)([mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

abstract public function [first](ds-sequence.first.md)(): [mixed](language.types.mixed.md)

abstract public function [get](ds-sequence.get.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

abstract public function [insert](ds-sequence.insert.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

abstract public function [join](ds-sequence.join.md)([string](language.types.string.md) `$glue` = ?): [string](language.types.string.md)

abstract public function [last](ds-sequence.last.md)(): [mixed](language.types.mixed.md)

abstract public function [map](ds-sequence.map.md)([callable](language.types.callable.md) `$callback`): [Ds\Sequence](class.ds-sequence.md)

abstract public function [merge](ds-sequence.merge.md)([mixed](language.types.mixed.md) `$values`): [Ds\Sequence](class.ds-sequence.md)

abstract public function [pop](ds-sequence.pop.md)(): [mixed](language.types.mixed.md)

abstract public function [push](ds-sequence.push.md)([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

abstract public function [reduce](ds-sequence.reduce.md)([callable](language.types.callable.md) `$callback`, [mixed](language.types.mixed.md) `$initial` = ?): [mixed](language.types.mixed.md)

abstract public function [remove](ds-sequence.remove.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

abstract public function [reverse](ds-sequence.reverse.md)(): [void](language.types.void.md)

abstract public function [reversed](ds-sequence.reversed.md)(): [Ds\Sequence](class.ds-sequence.md)

abstract public function [rotate](ds-sequence.rotate.md)([int](language.types.integer.md) `$rotations`): [void](language.types.void.md)

abstract public function [set](ds-sequence.set.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

abstract public function [shift](ds-sequence.shift.md)(): [mixed](language.types.mixed.md)

abstract public function [slice](ds-sequence.slice.md)([int](language.types.integer.md) `$index`, [int](language.types.integer.md) `$length` = ?): [Ds\Sequence](class.ds-sequence.md)

abstract public function [sort](ds-sequence.sort.md)([callable](language.types.callable.md) `$comparator` = ?): [void](language.types.void.md)

abstract public function [sorted](ds-sequence.sorted.md)([callable](language.types.callable.md) `$comparator` = ?): [Ds\Sequence](class.ds-sequence.md)

abstract public function [sum](ds-sequence.sum.md)(): [int](language.types.integer.md)|[float](language.types.float.md)

abstract public function [unshift](ds-sequence.unshift.md)([mixed](language.types.mixed.md) `$values` = ?): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [Ds\Collection::clear](ds-collection.clear.md)(): [void](language.types.void.md)

public function [Ds\Collection::copy](ds-collection.copy.md)(): [Ds\Collection](class.ds-collection.md)

public function [Ds\Collection::isEmpty](ds-collection.isempty.md)(): [bool](language.types.boolean.md)

public function [Ds\Collection::toArray](ds-collection.toarray.md)(): [array](language.types.array.md)

public function [Countable::count](countable.count.md)(): [int](language.types.integer.md)

public function [IteratorAggregate::getIterator](iteratoraggregate.getiterator.md)(): [Traversable](class.traversable.md)

public function [JsonSerializable::jsonSerialize](jsonserializable.jsonserialize.md)(): [mixed](language.types.mixed.md)

public function [ArrayAccess::offsetExists](arrayaccess.offsetexists.md)([mixed](language.types.mixed.md) `$offset`): [bool](language.types.boolean.md)

public function [ArrayAccess::offsetGet](arrayaccess.offsetget.md)([mixed](language.types.mixed.md) `$offset`): [mixed](language.types.mixed.md)

public function [ArrayAccess::offsetSet](arrayaccess.offsetset.md)([mixed](language.types.mixed.md) `$offset`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [ArrayAccess::offsetUnset](arrayaccess.offsetunset.md)([mixed](language.types.mixed.md) `$offset`): [void](language.types.void.md)

}

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL ds 1.3.0 | A interface agora estende [ArrayAccess](class.arrayaccess.md). |

## Índice

- [Ds\Sequence::allocate](ds-sequence.allocate.md) — Aloca memória suficiente para uma capacidade requerida
- [Ds\Sequence::apply](ds-sequence.apply.md) — Atualiza todos os valores aplicando uma função callback a cada valor
- [Ds\Sequence::capacity](ds-sequence.capacity.md) — Retorna a capacidade atual
- [Ds\Sequence::contains](ds-sequence.contains.md) — Determina se a sequência contém determinados valores
- [Ds\Sequence::filter](ds-sequence.filter.md) — Cria uma nova sequência usando um callable para
  determinar quais valores incluir.
- [Ds\Sequence::find](ds-sequence.find.md) — Tenta encontrar o índice de um valor
- [Ds\Sequence::first](ds-sequence.first.md) — Retorna o primeiro valor na sequência
- [Ds\Sequence::get](ds-sequence.get.md) — Retorna o valor em um índice específico
- [Ds\Sequence::insert](ds-sequence.insert.md) — Insere valores em um índice específico
- [Ds\Sequence::join](ds-sequence.join.md) — Une todos os valores como uma string
- [Ds\Sequence::last](ds-sequence.last.md) — Retorna o último valor
- [Ds\Sequence::map](ds-sequence.map.md) — Retorna o resultado da aplicação de um callback a cada valor
- [Ds\Sequence::merge](ds-sequence.merge.md) — Retorna o resultado de adicionar todos os valores fornecidos à sequência
- [Ds\Sequence::pop](ds-sequence.pop.md) — Remove e retorna o último valor
- [Ds\Sequence::push](ds-sequence.push.md) — Adiciona valores ao final da sequência
- [Ds\Sequence::reduce](ds-sequence.reduce.md) — Reduz a sequência a um único valor usando uma função de callback
- [Ds\Sequence::remove](ds-sequence.remove.md) — Remove e retorna um valor pelo índice
- [Ds\Sequence::reverse](ds-sequence.reverse.md) — Inverte a sequência no local
- [Ds\Sequence::reversed](ds-sequence.reversed.md) — Retorna uma cópia reversa
- [Ds\Sequence::rotate](ds-sequence.rotate.md) — Rotaciona a sequência pelo número dado de rotações
- [Ds\Sequence::set](ds-sequence.set.md) — Atualiza um valor em um índice específico
- [Ds\Sequence::shift](ds-sequence.shift.md) — Remove e retorna o primeiro valor
- [Ds\Sequence::slice](ds-sequence.slice.md) — Retorna uma sub-sequência de um intervalo dado
- [Ds\Sequence::sort](ds-sequence.sort.md) — Ordena a sequência no local
- [Ds\Sequence::sorted](ds-sequence.sorted.md) — Retorna uma cópia ordenada
- [Ds\Sequence::sum](ds-sequence.sum.md) — Retorna a soma de todos os valores na sequência
- [Ds\Sequence::unshift](ds-sequence.unshift.md) — Adiciona valores no início da sequência

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
