# Retorna se a pilha está vazia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-stack.isempty.php

---

# Ds\Stack::isEmpty

(PECL ds >= 1.0.0)

Ds\Stack::isEmpty — Retorna se a pilha está vazia

### Descrição

public function **Ds\Stack::isEmpty**(): [bool](language.types.boolean.md)

Retorna se a pilha está vazia.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a pilha estiver vazia, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Stack::isEmpty()****

```
<?php
$a = new \Ds\Stack([1, 2, 3]);
$b = new \Ds\Stack();

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
