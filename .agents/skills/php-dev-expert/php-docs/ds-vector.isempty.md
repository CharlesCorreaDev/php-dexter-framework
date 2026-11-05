# Retorna se o vetor está vazio

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.isempty.php

---

# Ds\Vector::isEmpty

(PECL ds >= 1.0.0)

Ds\Vector::isEmpty — Retorna se o vetor está vazio

### Descrição

public function **Ds\Vector::isEmpty**(): [bool](language.types.boolean.md)

Retorna se o vetor está vazio.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o vetor estiver vazio, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::isEmpty()****

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
