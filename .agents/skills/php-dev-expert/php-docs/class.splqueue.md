# A classe SplQueue

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.splqueue.php

---

# A classe SplQueue

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

## Introdução

A classe SplQueue fornece as principais funcionalidades de uma fila implementada usando uma lista duplamente encadeada,
estabelecendo o modo do iterador como **`SplDoublyLinkedList::IT_MODE_FIFO`**.

## Resumo da classe

class ****SplQueue****
extends
[SplDoublyLinkedList](class.spldoublylinkedlist.md)
{

/\* Constantes herdadas \*/

public
const
[int](language.types.integer.md)
[SplDoublyLinkedList::IT\_MODE\_LIFO](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-lifo);

public
const
[int](language.types.integer.md)
[SplDoublyLinkedList::IT\_MODE\_FIFO](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-fifo);

public
const
[int](language.types.integer.md)
[SplDoublyLinkedList::IT\_MODE\_DELETE](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-delete);

public
const
[int](language.types.integer.md)
[SplDoublyLinkedList::IT\_MODE\_KEEP](class.spldoublylinkedlist.md#spldoublylinkedlist.constants.it-mode-keep);

/\* Métodos \*/

public function [dequeue](splqueue.dequeue.md)(): [mixed](language.types.mixed.md)

public function [enqueue](splqueue.enqueue.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

/\* Métodos herdados \*/

public function [SplDoublyLinkedList::add](spldoublylinkedlist.add.md)([int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [SplDoublyLinkedList::bottom](spldoublylinkedlist.bottom.md)(): [mixed](language.types.mixed.md)

public function [SplDoublyLinkedList::count](spldoublylinkedlist.count.md)(): [int](language.types.integer.md)

public function [SplDoublyLinkedList::current](spldoublylinkedlist.current.md)(): [mixed](language.types.mixed.md)

public function [SplDoublyLinkedList::getIteratorMode](spldoublylinkedlist.getiteratormode.md)(): [int](language.types.integer.md)

public function [SplDoublyLinkedList::isEmpty](spldoublylinkedlist.isempty.md)(): [bool](language.types.boolean.md)

public function [SplDoublyLinkedList::key](spldoublylinkedlist.key.md)(): [int](language.types.integer.md)

public function [SplDoublyLinkedList::next](spldoublylinkedlist.next.md)(): [void](language.types.void.md)

public function [SplDoublyLinkedList::offsetExists](spldoublylinkedlist.offsetexists.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [SplDoublyLinkedList::offsetGet](spldoublylinkedlist.offsetget.md)([int](language.types.integer.md) `$index`): [mixed](language.types.mixed.md)

public function [SplDoublyLinkedList::offsetSet](spldoublylinkedlist.offsetset.md)([?](language.types.null.md)[int](language.types.integer.md) `$index`, [mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [SplDoublyLinkedList::offsetUnset](spldoublylinkedlist.offsetunset.md)([int](language.types.integer.md) `$index`): [void](language.types.void.md)

public function [SplDoublyLinkedList::pop](spldoublylinkedlist.pop.md)(): [mixed](language.types.mixed.md)

public function [SplDoublyLinkedList::prev](spldoublylinkedlist.prev.md)(): [void](language.types.void.md)

public function [SplDoublyLinkedList::push](spldoublylinkedlist.push.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [SplDoublyLinkedList::rewind](spldoublylinkedlist.rewind.md)(): [void](language.types.void.md)

public function [SplDoublyLinkedList::serialize](spldoublylinkedlist.serialize.md)(): [string](language.types.string.md)

public function [SplDoublyLinkedList::setIteratorMode](spldoublylinkedlist.setiteratormode.md)([int](language.types.integer.md) `$mode`): [int](language.types.integer.md)

public function [SplDoublyLinkedList::shift](spldoublylinkedlist.shift.md)(): [mixed](language.types.mixed.md)

public function [SplDoublyLinkedList::top](spldoublylinkedlist.top.md)(): [mixed](language.types.mixed.md)

public function [SplDoublyLinkedList::unserialize](spldoublylinkedlist.unserialize.md)([string](language.types.string.md) `$data`): [void](language.types.void.md)

public function [SplDoublyLinkedList::unshift](spldoublylinkedlist.unshift.md)([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

public function [SplDoublyLinkedList::valid](spldoublylinkedlist.valid.md)(): [bool](language.types.boolean.md)

}

## Examples

**Exemplo #1 Exemplo de **SplQueue****

```
<?php
$q = new SplQueue();
$q[] = 1;
$q[] = 2;
$q[] = 3;
foreach ($q as $elem)  {
 echo $elem."\n";
}
?>
```

O exemplo acima produzirá:

```
1
2
3
```

**Exemplo #2 Gestão eficiente de tarefas usando **SplQueue****

```
<?php
$q = new SplQueue();
$q->setIteratorMode(SplQueue::IT_MODE_DELETE);
// ... adicionar algumas tarefas à fila ...
// processá-las.
foreach ($q as $task) {
    // ... processar a tarefa $task ...
    // adicionar novas tarefas à fila
    $q[] = $newTask;
    // ...
}
?>
```

## Índice

- [SplQueue::dequeue](splqueue.dequeue.md) — Remove um nó da fila
- [SplQueue::enqueue](splqueue.enqueue.md) — Adiciona um elemento à fila

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
