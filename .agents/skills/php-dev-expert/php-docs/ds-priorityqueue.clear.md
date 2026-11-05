# Remove todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.clear.php

---

# Ds\PriorityQueue::clear

(PECL ds >= 1.0.0)

Ds\PriorityQueue::clear — Remove todos os valores

### Descrição

public function **Ds\PriorityQueue::clear**(): [void](language.types.void.md)

Remove todos os valores da fila.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::clear()****

```
<?php
$queue = new \Ds\PriorityQueue();

$queue->push("a",  5);
$queue->push("b", 15);
$queue->push("c", 10);

$queue->clear();
print_r($queue);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\PriorityQueue Object
(
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
