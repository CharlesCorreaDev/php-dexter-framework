# Retorna o valor na frente da fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.peek.php

---

# Ds\PriorityQueue::peek

(PECL ds >= 1.0.0)

Ds\PriorityQueue::peek — Retorna o valor na frente da fila

### Descrição

public function **Ds\PriorityQueue::peek**(): [mixed](language.types.mixed.md)

Retorna o valor na frente da fila, mas não o remove.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor na frente da fila.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::peek()****

```
<?php
$queue = new \Ds\PriorityQueue();

$queue->push("a",  5);
$queue->push("b", 15);
$queue->push("c", 10);

var_dump($queue->peek());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "b"
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
