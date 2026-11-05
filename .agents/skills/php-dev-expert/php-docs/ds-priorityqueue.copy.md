# Retorna uma cópia rasa da fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.copy.php

---

# Ds\PriorityQueue::copy

(PECL ds >= 1.0.0)

Ds\PriorityQueue::copy — Retorna uma cópia rasa da fila

### Descrição

public function **Ds\PriorityQueue::copy**(): [Ds\PriorityQueue](class.ds-priorityqueue.md)

Retorna uma cópia rasa da fila.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa da fila.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::copy()****

```
<?php
$queue = new \Ds\PriorityQueue();

$queue->push("a",  5);
$queue->push("b", 15);
$queue->push("c", 10);

print_r($queue->copy());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\PriorityQueue Object
(
    [0] => b
    [1] => c
    [2] => a
)
```

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
