# Remove um nó da fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splqueue.dequeue.php

---

# SplQueue::dequeue

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplQueue::dequeue — Remove um nó da fila

### Descrição

public function **SplQueue::dequeue**(): [mixed](language.types.mixed.md)

Remove o `value` do topo da fila.

> **Nota**:
>
> **SplQueue::dequeue()** é um sinônimo de [SplDoublyLinkedList::shift()](spldoublylinkedlist.shift.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor do nó retirado da fila.

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
