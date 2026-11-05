# Retorna se a fila está vazia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.isempty.php

---

# Ds\Queue::isEmpty

(PECL ds >= 1.0.0)

Ds\Queue::isEmpty — Retorna se a fila está vazia

### Descrição

public function **Ds\Queue::isEmpty**(): [bool](language.types.boolean.md)

Retorna se a fila está vazia.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a fila estiver vazia, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::isEmpty()****

```
<?php
$a = new \Ds\Queue([1, 2, 3]);
$b = new \Ds\Queue();

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
