# Remove e retorna o valor no início da fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.pop.php

---

# Ds\Queue::pop

(PECL ds >= 1.0.0)

Ds\Queue::pop — Remove e retorna o valor no início da fila

### Descrição

public function **Ds\Queue::pop**(): [mixed](language.types.mixed.md)

Remove e retorna o valor no início da fila.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor removido que estava no início da fila.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::pop()****

```
<?php
$queue = new \Ds\Queue();

$queue->push("a");
$queue->push("b");
$queue->push("c");

var_dump($queue->pop());
var_dump($queue->pop());
var_dump($queue->pop());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
string(1) "c"
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
