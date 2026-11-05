# Adiciona valores na fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.push.php

---

# Ds\PriorityQueue::push

(PECL ds >= 1.0.0)

Ds\PriorityQueue::push — Adiciona valores na fila

### Descrição

public function **Ds\PriorityQueue::push**([mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$priority`): [void](language.types.void.md)

Adiciona um valor `value` com uma dada prioridade `priority` na fila.

### Parâmetros

`value`
:   O valor a ser adicionado na fila.

`priority`
:   A prioridade associada ao valor.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::push()****

```
<?php
$queue = new \Ds\PriorityQueue();

$queue->push("a",  5);
$queue->push("b", 15);
$queue->push("c", 10);

print_r($queue->pop());
print_r($queue->pop());
print_r($queue->pop());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "b"
string(1) "c"
string(1) "a"
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
