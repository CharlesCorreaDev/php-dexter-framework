# Remove todos os valores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.clear.php

---

# Ds\Queue::clear

(PECL ds >= 1.0.0)

Ds\Queue::clear — Remove todos os valores

### Descrição

public function **Ds\Queue::clear**(): [void](language.types.void.md)

Remove todos os valores da fila.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::clear()****

```
<?php
$queue = new \Ds\Queue([1, 2, 3]);
print_r($queue);

$queue->clear();
print_r($queue);
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
