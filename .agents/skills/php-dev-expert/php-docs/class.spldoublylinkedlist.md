# A classe SplDoublyLinkedList

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.spldoublylinkedlist.php

---

# A classe SplDoublyLinkedList

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

A classe SplDoublyLinkedList fornece as principais funcionalidades de uma lista duplamente encadeada.

## Resumo da classe

class ****SplDoublyLinkedList****
implements
[Iterator](class.iterator.md),
[Countable](class.countable.md),
[ArrayAccess](class.arrayaccess.md),
[Serializable](class.serializable.md) {

/\* Constantes \*/

public
const
[int](language.types.integer.md)
[IT\_MODE\_LIFO](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-lifo);

public
const
[int](language.types.integer.md)
[IT\_MODE\_FIFO](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-fifo);

public
const
[int](language.types.integer.md)
[IT\_MODE\_DELETE](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-delete);

public
const
[int](language.types.integer.md)
[IT\_MODE\_KEEP](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-keep);

/\* Métodos \*/

public function [add](spldoublylinkedlist.add.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [bottom](spldoublylinkedlist.bottom.md)(): [mixed](language.types.mixed.md)

public function [count](spldoublylinkedlist.count.md)(): [int](language.types.integer.md)

public function [current](spldoublylinkedlist.current.md)(): [mixed](language.types.mixed.md)

public function [getIteratorMode](spldoublylinkedlist.getiteratormode.md)(): [int](language.types.integer.md)

public function [isEmpty](spldoublylinkedlist.isempty.md)(): [bool](language.types.boolean.md)

public function [key](spldoublylinkedlist.key.md)(): [int](language.types.integer.md)

public function [next](spldoublylinkedlist.next.md)(): [void](language.types.void.md)

public function [offsetExists](spldoublylinkedlist.offsetexists.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [offsetGet](spldoublylinkedlist.offsetget.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [offsetSet](spldoublylinkedlist.offsetset.md)([?](language.types.null.md)[int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](spldoublylinkedlist.offsetunset.md)([int](language.types.integer.md) `$index`): [void](language.types.void.md)

public function [pop](spldoublylinkedlist.pop.md)(): [mixed](language.types.mixed.md)

public function [prev](spldoublylinkedlist.prev.md)(): [void](language.types.void.md)

public function [push](spldoublylinkedlist.push.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [rewind](spldoublylinkedlist.rewind.md)(): [void](language.types.void.md)

public function [serialize](spldoublylinkedlist.serialize.md)(): [string](language.types.string.md)

public function [setIteratorMode](spldoublylinkedlist.setiteratormode.md)([int](language.types.integer.md) `$mode`): [int](language.types.integer.md)

public function [shift](spldoublylinkedlist.shift.md)(): [mixed](language.types.mixed.md)

public function [top](spldoublylinkedlist.top.md)(): [mixed](language.types.mixed.md)

public function [unserialize](spldoublylinkedlist.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [unshift](spldoublylinkedlist.unshift.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [valid](spldoublylinkedlist.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

## Direção da Iteração

**`SplDoublyLinkedList::IT_MODE_LIFO`**
:   A lista será iterada em uma ordem de último a entrar, primeiro a sair, como uma pilha.

**`SplDoublyLinkedList::IT_MODE_FIFO`**
:   A lista será iterada em uma ordem de primeiro a entrar, primeiro a sair, como uma fila.

## Comportamento da Iteração

**`SplDoublyLinkedList::IT_MODE_DELETE`**
:   A iteração removerá os elementos iterados.

**`SplDoublyLinkedList::IT_MODE_KEEP`**
:   A iteração não removerá os elementos iterados.

## Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | As constantes de classe agora são tipadas. |

## Índice

- [SplDoublyLinkedList::add](spldoublylinkedlist.add.md) — Adiciona/insere um novo valor no índice especificado
- [SplDoublyLinkedList::bottom](spldoublylinkedlist.bottom.md) — Espreita o nó desde o início da lista duplamente encadeada
- [SplDoublyLinkedList::count](spldoublylinkedlist.count.md) — Conta o número de elementos na lista duplamente encadeada
- [SplDoublyLinkedList::current](spldoublylinkedlist.current.md) — Retorna a entrada de array atual
- [SplDoublyLinkedList::getIteratorMode](spldoublylinkedlist.getiteratormode.md) — Retorna o modo de iteração
- [SplDoublyLinkedList::isEmpty](spldoublylinkedlist.isempty.md) — Verifica se a lista duplamente encadeada está vazia
- [SplDoublyLinkedList::key](spldoublylinkedlist.key.md) — Retorna o índice do nó atual
- [SplDoublyLinkedList::next](spldoublylinkedlist.next.md) — Move para a próxima entrada
- [SplDoublyLinkedList::offsetExists](spldoublylinkedlist.offsetexists.md) — Retorna se o $index solicitado existe
- [SplDoublyLinkedList::offsetGet](spldoublylinkedlist.offsetget.md) — Retorna o valor no $index especificado
- [SplDoublyLinkedList::offsetSet](spldoublylinkedlist.offsetset.md) — Define o valor no $index especificado como $value
- [SplDoublyLinkedList::offsetUnset](spldoublylinkedlist.offsetunset.md) — Remove o valor no $index especificado
- [SplDoublyLinkedList::pop](spldoublylinkedlist.pop.md) — Remove um nó do final da lista duplamente encadeada
- [SplDoublyLinkedList::prev](spldoublylinkedlist.prev.md) — Move para a entrada anterior
- [SplDoublyLinkedList::push](spldoublylinkedlist.push.md) — Adiciona um elemento no final da lista duplamente encadeada
- [SplDoublyLinkedList::rewind](spldoublylinkedlist.rewind.md) — Rebobina o iterador de volta ao início
- [SplDoublyLinkedList::serialize](spldoublylinkedlist.serialize.md) — Serializa o armazenamento
- [SplDoublyLinkedList::setIteratorMode](spldoublylinkedlist.setiteratormode.md) — Define o modo de iteração
- [SplDoublyLinkedList::shift](spldoublylinkedlist.shift.md) — Remove um nó do início da lista duplamente encadeada
- [SplDoublyLinkedList::top](spldoublylinkedlist.top.md) — Observa o nó do final da lista duplamente encadeada
- [SplDoublyLinkedList::unserialize](spldoublylinkedlist.unserialize.md) — Deserializa o armazenamento
- [SplDoublyLinkedList::unshift](spldoublylinkedlist.unshift.md) — Acrescenta um elemento ao início da lista duplamente encadeada
- [SplDoublyLinkedList::valid](spldoublylinkedlist.valid.md) — Verifica se a lista duplamente encadeada contém mais nós

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
