# Retorna a capacidade atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.capacity.php

---

# Ds\Queue::capacity

(PECL ds >= 1.0.0)

Ds\Queue::capacity — Retorna a capacidade atual

### Descrição

public function **Ds\Queue::capacity**(): [int](language.types.integer.md)

Retorna a capacidade atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A capacidade atual.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::capacity()****

```
<?php
$queue = new \Ds\Queue();
var_dump($queue->capacity());

$queue->push(...range(1, 50));
var_dump($queue->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(8)
int(64)
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
