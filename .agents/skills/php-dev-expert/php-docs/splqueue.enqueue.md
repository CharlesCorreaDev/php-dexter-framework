# Adiciona um elemento à fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splqueue.enqueue.php

---

# SplQueue::enqueue

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplQueue::enqueue — Adiciona um elemento à fila

### Descrição

public function **SplQueue::enqueue**([mixed](language.types.mixed.md) `$value`): [void](language.types.void.md)

Enfileira `value` no final da fila.

> **Nota**:
>
> **SplQueue::enqueue()** é um sinônimo de [SplDoublyLinkedList::push()](spldoublylinkedlist.push.md).

### Parâmetros

`value`
:   O valor a ser enfileirado.

### Valor Retornado

Nenhum valor é retornado.

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
