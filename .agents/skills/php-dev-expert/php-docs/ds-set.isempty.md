# Retorna se o conjunto está vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.isempty.php

---

# Ds\Set::isEmpty

(PECL ds >= 1.0.0)

Ds\Set::isEmpty — Retorna se o conjunto está vazio

### Descrição

public function **Ds\Set::isEmpty**(): [bool](language.types.boolean.md)

Retonar se o conjunto está vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o conjunto estiver vazio, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::isEmpty()****

```
<?php
$a = new \Ds\Set([1, 2, 3]);
$b = new \Ds\Set();

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
