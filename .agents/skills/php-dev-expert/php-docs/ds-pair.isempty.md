# Retorna se o par está vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-pair.isempty.php

---

# Ds\Pair::isEmpty

(No version information available, might only be in Git)

Ds\Pair::isEmpty — Retorna se o par está vazio

### Descrição

public function **Ds\Pair::isEmpty**(): [bool](language.types.boolean.md)

Retorna se o par está vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o par estiver vazio, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Pair::isEmpty()****

```
<?php
$a = new \Ds\Pair("a", 1);
$b = new \Ds\Pair();

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
