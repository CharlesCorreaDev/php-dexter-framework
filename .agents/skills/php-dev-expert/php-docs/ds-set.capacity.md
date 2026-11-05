# Retorna a capacidade atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-set.capacity.php

---

# Ds\Set::capacity

(PECL ds >= 1.0.0)

Ds\Set::capacity — Retorna a capacidade atual

### Descrição

public function **Ds\Set::capacity**(): [int](language.types.integer.md)

Retorna a capacidade atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A capacidade atual.

### Examples

**Exemplo #1 Exemplo de **Ds\Set::capacity()****

```
<?php
$set = new \Ds\Set();
var_dump($set->capacity());

$set->add(...range(1, 50));
var_dump($set->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(16)
int(64)
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
