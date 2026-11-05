# Retorna se a coleção está vazia

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-collection.isempty.php

---

# Ds\Collection::isEmpty

(PECL ds >= 1.0.0)

Ds\Collection::isEmpty — Retorna se a coleção está vazia

### Descrição

public function **Ds\Collection::isEmpty**(): [bool](language.types.boolean.md)

Retorna se a coleção está vazia.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se a coleção estiver vazia, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Collection::isEmpty()****

```
<?php
$a = new \Ds\Vector([1, 2, 3]);
$b = new \Ds\Vector();

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
