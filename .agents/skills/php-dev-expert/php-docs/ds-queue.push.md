# Insere valores na fila

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.push.php

---

# Ds\Queue::push

(PECL ds >= 1.0.0)

Ds\Queue::push — Insere valores na fila

### Descrição

public function **Ds\Queue::push**([mixed](language.types.mixed.md) `...$values`): [void](language.types.void.md)

Insere `values` na fila.

### Parâmetros

`values`
:   Os valores a serem inseridos na fila.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::push()****

```
<?php
$queue = new \Ds\Queue();

$queue->push("a");
$queue->push("b");
$queue->push("c", "d");
$queue->push(...["e", "f"]);

print_r($queue);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Ds\Queue Object
(
    [0] => a
    [1] => b
    [2] => c
    [3] => d
    [4] => e
    [5] => f
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
