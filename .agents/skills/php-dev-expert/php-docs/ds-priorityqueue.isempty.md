# Retorna se a fila está vazia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.isempty.php

---

# Ds\PriorityQueue::isEmpty

(PECL ds >= 1.0.0)

Ds\PriorityQueue::isEmpty — Retorna se a fila está vazia

### Descrição

public function **Ds\PriorityQueue::isEmpty**(): [bool](language.types.boolean.md)

Retorna se a fila está vazia.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a fila estiver vazia, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::isEmpty()****

```
<?php
$a = new \Ds\PriorityQueue();
$b = new \Ds\PriorityQueue();

$a->push("a",  5);
$a->push("b", 15);
$a->push("c", 10);

var_dump($a->isEmpty());
var_dump($b->isEmpty());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
bool(true)
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
