# Retorna a capacidade atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-vector.capacity.php

---

# Ds\Vector::capacity

(PECL ds >= 1.0.0)

Ds\Vector::capacity — Retorna a capacidade atual

### Descrição

public function **Ds\Vector::capacity**(): [int](language.types.integer.md)

Retorna a capacidade atual.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A capacidade atual.

### Examples

**Exemplo #1 Exemplo de **Ds\Vector::capacity()****

```
<?php
$vector = new \Ds\Vector();
var_dump($vector->capacity());

$vector->push(...range(1, 50));
var_dump($vector->capacity());

$vector[] = "a";
var_dump($vector->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(10)
int(50)
int(75)
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
