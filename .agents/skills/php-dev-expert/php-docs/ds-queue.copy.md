# Retorna uma cópia rasa da fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.copy.php

---

# Ds\Queue::copy

(PECL ds >= 1.0.0)

Ds\Queue::copy — Retorna uma cópia rasa da fila

### Descrição

public function **Ds\Queue::copy**(): [Ds\Queue](class.ds-queue.md)

Retorna uma cópia rasa da fila.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma cópia rasa da fila.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::copy()****

```
<?php
$a = new \Ds\Queue([1, 2, 3]);
$b = $a->copy();

// Atualizar a cópia não afeta o original
$b->push(4);

print_r($a);
print_r($b);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Queue Object
(
    [0] => 1
    [1] => 2
    [2] => 3
)
Ds\Queue Object
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
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
