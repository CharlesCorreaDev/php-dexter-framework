# Retorna o valor no início da fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.peek.php

---

# Ds\Queue::peek

(PECL ds >= 1.0.0)

Ds\Queue::peek — Retorna o valor no início da fila

### Descrição

public function **Ds\Queue::peek**(): [mixed](language.types.mixed.md)

Retorna o valor no início da fila, mas não o remove.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor no início da fila.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::peek()****

```
<?php
$queue = new \Ds\Queue();

$queue->push("a");
$queue->push("b");
$queue->push("c");

var_dump($queue->peek());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
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
